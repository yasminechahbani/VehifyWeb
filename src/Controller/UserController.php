<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\EditType;
use App\Form\EditUserType;
use App\Form\LoginType;
use App\Form\UserType;
use App\Repository\EmployeRepository;
use App\Repository\UserRepository;
use ContainerJGxdLqx\getConsole_ErrorListenerService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use App\Service\CloudinaryService;
use Cloudinary\Cloudinary;
//Load Composer's autoloader (created by composer, not included with PHPMailer)


//Create an instance; passing `true` enables exceptions



final class UserController extends AbstractController
{

    #[Route('user/afficher', name: 'app_user_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $users = $entityManager
            ->getRepository(User::class)
            ->findAll();

        return $this->render('user/index.html.twig', [
            'users' => $users,
        ]);
    }

    #[Route('/', name: 'app_user_new', methods: ['GET', 'POST'])]
    public function new(
        Request                $request,
        EntityManagerInterface $entityManager,
        UserRepository         $userRepository,
        EmployeRepository $organizationRepository,
        SessionInterface       $session): Response
    {
        $message = null;
        // Initialisation de Cloudinary
        $cloudinary = new Cloudinary([
            'cloud' => [
                'cloud_name' => $_ENV['CLOUDINARY_CLOUD_NAME'],
                'api_key' => $_ENV['CLOUDINARY_API_KEY'],
                'api_secret' => $_ENV['CLOUDINARY_API_SECRET']
            ],
            'url' => [
                'analytics' => false
            ]
        ]);

        $user = new User();
        $user->setStatus("invalide");
        $user->setRole("USER");

        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        $loginForm = $this->createForm(LoginType::class);
        $loginForm->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $email = $form->get('email')->getData();
            $password = $form->get('mot_de_passe')->getData();
        
            if ($userRepository->chercherEmail($email)) {
                $message = 'Cet email est déjà utilisé par un autre utilisateur';
                return $this->render('user/new.html.twig', [
                    'form' => $form->createView(),
                    'loginForm' => $loginForm->createView(),
                    'recaptcha_site_key' => $_ENV['GOOGLE_RECAPTCHA_SITE_KEY'],
                    'message' => $message
                ]);
            }
        
            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                try {
                    $uploadResult = $cloudinary->uploadApi()->upload($imageFile->getRealPath());
                    $user->setImage($uploadResult['secure_url']);
                } catch (\Exception $e) {
                    $message = 'Erreur lors de l\'upload de l\'image: ' . $e->getMessage();
                    return $this->render('user/new.html.twig', [
                        'form' => $form->createView(),
                        'loginForm' => $loginForm->createView(),
                        'recaptcha_site_key' => $_ENV['GOOGLE_RECAPTCHA_SITE_KEY'],
                        'message' => $message
                    ]);
                }
            }
        
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $user->setMotDePasse($hash);
        
            $entityManager->persist($user);
            $entityManager->flush();
            
            $message = 'Inscription réussie!';
            return $this->render('user/new.html.twig', [
                'form' => $form->createView(),
                'loginForm' => $loginForm->createView(),
                'recaptcha_site_key' => $_ENV['GOOGLE_RECAPTCHA_SITE_KEY'],
                'message' => $message,
                'messageType' => 'success' 
            ]);
        }
    
        if ($loginForm->isSubmitted()) {
            $email = $loginForm->get('email')->getData();
            $password = $loginForm->get('mot_de_passe')->getData();

            if ($email && $password) {

                

                $recaptchaResponse = $request->request->get('g-recaptcha-response');

                    if (empty($recaptchaResponse)) {
                        $message = 'Veuillez valider le reCAPTCHA';
                        }

                        else {
                            $employee = $organizationRepository->ChercherEMPLOYEESelonEmailAndPassword($email, $password);  // Removed extra $
                            if ($employee !== null) {
                                $session->set('id_employe', $employee->getIdEmploye());
                                $session->set('nom_employe', $employee->getNom());
                                $session->set('prenom_employe', $employee->getPrenom());
                                $session->set('email_employe', $employee->getEmail());
                                return $this->redirectToRoute('app_employe_front');
                            }
                        $user = $userRepository->ChercherUserSelonEmailAndPassword($email, $password);
                    if ($user !== null) { 
                    $session->set('id', $user->getId());
                    $session->set('nom', $user->getNom());
                    $session->set('prenom', $user->getPrenom());
                    $session->set('email', $user->getEmail());
                    $session->set('status', $user->getStatus());
                    $session->set('role', $user->getRole());
                    $session->set('image', $user->getImage());
                    if ($user->getStatus() === "active") {
                        $session->set('id', $user->getId());
                        $session->set('nom', $user->getNom());
                        $session->set('prenom', $user->getPrenom());
                        $session->set('email', $user->getEmail());
                        $session->set('status', $user->getStatus());
                        $session->set('role', $user->getRole());
                        $session->set('image', $user->getImage());
                    
                        if($user->getRole() === "ADMIN")
                        {
                            return $this->redirectToRoute('app_Admin');
                        }
                        else{
                            return $this->render('welcomePage/welcome.html.twig', [
                                'nom' => $user->getNom(),
                                'prenom' => $user->getPrenom(),
                            ]);
                        }
                       
                    } else {
                        $code = $this->generateOtp();
                        $this->sendEmail($user->getEmail(), $code);
                        $session->set('code', $code);
                        return $this->redirectToRoute('app_user_verifier');
                    }
                } else {
                    $message="Identifiants incorrects";
                }
        }
         }
        }
    
        return $this->render('user/new.html.twig', [
            'form' => $form->createView(),
            'loginForm' => $loginForm->createView(),
            'recaptcha_site_key' => $_ENV['GOOGLE_RECAPTCHA_SITE_KEY'],
            'message' => $message
        ]);
    }


    #[Route('user/{id}', name: 'app_user_show', methods: ['GET'])]
    public function show(User $user): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('user/{id}/edit', name: 'app_user_edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request,
        User $user,
        EntityManagerInterface $entityManager,
        SessionInterface $session
    ): Response {
        $form = $this->createForm(EditType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() ) {
            // Récupérer les nouvelles valeurs
            $newStatus = $form->get('status')->getData();
            $newRole = $form->get('role')->getData();
            
            // Mettre à jour l'utilisateur
            $user->setStatus($newStatus);
            $user->setRole($newRole);
            
            $entityManager->persist($user);
            $entityManager->flush();
            
            $this->addFlash('success', 'User information updated successfully!');
            return $this->redirectToRoute('app_user_index');
        }

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }




    #[Route('user/{id}/editProfile', name: 'app_user_editProfile', methods: ['GET', 'POST'])]
    public function editProfile(
        Request $request,
        User $user,
        EntityManagerInterface $entityManager,
        UserRepository $userRepository
    ): Response {
        // Initialisation de Cloudinary comme dans new()
        $cloudinary = new Cloudinary([
            'cloud' => [
                'cloud_name' => $_ENV['CLOUDINARY_CLOUD_NAME'],
                'api_key' => $_ENV['CLOUDINARY_API_KEY'],
                'api_secret' => $_ENV['CLOUDINARY_API_SECRET']
            ],
            'url' => [
                'analytics' => false
            ]
        ]);

        $form = $this->createForm(EditUserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            
                    $plainPassword = $form->get('mot_de_passe')->getData();
                    if (empty($plainPassword)) {
                        $user->setMotDePasse($user->getMotDePasse()); // Garder l'ancien mot de passe
                    } else {
                        $hashedPassword = password_hash($plainPassword, PASSWORD_DEFAULT);
                        $user->setMotDePasse($hashedPassword);
                    }
                    

            // Gestion de l'image 
            $imageFile = $form->get('image')->getData();
            //clear 
            if ($imageFile) {
                try {
                    if ($user->getImage()) {
                        $publicId = basename(parse_url($user->getImage(), PHP_URL_PATH), '.'.pathinfo($user->getImage(), PATHINFO_EXTENSION));
                        $cloudinary->uploadApi()->destroy($publicId);
                    }

                    // Uploader
                    $uploadResult = $cloudinary->uploadApi()->upload($imageFile->getRealPath());
                    $user->setImage($uploadResult['secure_url']);
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Erreur lors de la mise à jour de l\'image: '.$e->getMessage());
                    return $this->redirectToRoute('app_user_edit', ['id' => $user->getId()]);
                }
            }

            // Vérification email 
            $newEmail = $form->get('email')->getData();
            if ($newEmail !== $user->getEmail() && $userRepository->chercherEmail($newEmail)) {
                $this->addFlash('error', 'Cet email est déjà utilisé par un autre utilisateur');
                return $this->redirectToRoute('app_user_edit', ['id' => $user->getId()]);
            }
            
            $entityManager->flush();
            $this->addFlash('success', 'Profil mis à jour avec succès!');
            //mettre a jour les sessions
            $session = $request->getSession();
            $session->set('nom', $user->getNom());
            $session->set('prenom', $user->getPrenom());
            $session->set('email', $user->getEmail());
            $session->set('image', $user->getImage());
            return $this->redirectToRoute('app_home');
        }
        return $this->render('user/modifierProfile.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }


    #[Route('welcomePage/verifierCompute', name: 'app_user_verifier')]
    public function verifier(Request $request, SessionInterface $session, EntityManagerInterface $em): Response
    {

        $otp1 = $request->request->get('otp1');
        $otp2 = $request->request->get('otp2');
        $otp3 = $request->request->get('otp3');
        $otp4 = $request->request->get('otp4');
        $otpGlobal = $otp1 . $otp2 . $otp3 . $otp4;
        $code = $session->get('code');
        if ($otpGlobal === $code) {
            $user = $em->getRepository(User::class)->find($session->get('id'));
            if ($user) {
                $user->setStatus('active');
                $em->flush();
            }
            $this->addFlash('error', 'CompteVerifié.');
            return $this->render('welcomePage/welcome.html.twig', [
                'nom' => $session->get('nom'),
                'prenom' => $session->get('prenom'),
            ]);
        }

        return $this->render('welcomePage/verifier.html.twig', [
            'nom' => 'bachir',
            'prenom' => 'bachir'
        ]);
    }
    private function generateOtp(): string
    {
        $otp = str_pad(random_int(0, 9999), 4, '0', STR_PAD_LEFT);
        return $otp;
    }
    #[Route('/sendEmail', name: 'app_user_sendEmail', methods: ['POST'])]
    public function sendEmail(string $email, string $code): JsonResponse
    {
        // Initialize PHPMailer
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->SMTPDebug = SMTP::DEBUG_OFF; // Changed to OFF for production, use DEBUG_SERVER for testing
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'motezselmi.77@gmail.com';
            $mail->Password = 'tghu xktr pllb juwq';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Changed to STARTTLS for port 587
            $mail->Port = 587;

            // Important security note:
            // Consider using app-specific password or moving credentials to .env file
            // $mail->Password = $_ENV['GMAIL_APP_PASSWORD'];

            // Recipients
            $mail->setFrom('motezselmi.77@gmail.com', 'Vehify'); // Changed to actual sender
            $mail->addAddress($email); // Using the parameter passed to the function

            // Uncomment if you need these
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            // Content
            $mail->isHTML(false);
            $mail->Subject = 'Verifier Compte By vehify';
            $mail->Body = 'Voici votre code : [' . $code . ']' . "\r\n\r\n" .
                'Si vous avez des questions ou besoin d\'assistance supplementaire, n\'hesitez pas à nous contacter.' . "\r\n\r\n" .
                'Cordialement;';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            $mail->send();
            return new JsonResponse(['status' => 'success', 'message' => 'Email sent successfully']);

        } catch (Exception $e) {
            return new JsonResponse([
                'status' => 'error',
                'message' => 'Message could not be sent',
                'error' => $mail->ErrorInfo
            ], 500);
        }

    }
    #[Route('/logout', name: 'app_user_logout', methods: ['GET', 'POST'])]
    public function bro(Request $request, SessionInterface $session): Response
    {
        $session->invalidate();
        
        $response = $this->redirectToRoute('app_user_new');
        
        $response->headers->set('Cache-Control', 'no-cache, no-store, must-revalidate');
        $response->headers->set('Pragma', 'no-cache');
        $response->headers->set('Expires', '0');

        return $response;
    }

    #[Route('/deleteAccount/{id}', name: 'app_user_deleteUserByhimSelf', methods: ['POST'])]
    public function delete(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($user);
            $entityManager->flush();
        }
        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/detectface', name: 'app_detect_face')]
    public function detectFace(): Response
    {
        return $this->render('user/detectFace.html.twig');
    }
     
}
