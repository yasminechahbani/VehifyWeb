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
use Dompdf\Renderer;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Storage\MockArraySessionStorage;
use App\Form\FaceRecognitionType;
use Symfony\Component\Process\Process;
use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use League\OAuth2\Client\Provider\Exception\IdentityProviderException;
use PhpParser\Builder\Interface_;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

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
                            $Attemp=9;
                            $session->set("Attemp",$Attemp );
                            return $this->redirectToRoute('app_face_recognition');
                            
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
    

    //face recoginition 

    #[Route('/face/compare', name: 'app_face_compare', methods: ['POST'])]
    public function compare(Request $request, SessionInterface $session, EntityManagerInterface $entityManager): JsonResponse
    {
        try {
            // Get user's reference image
            $userId = $session->get('id');
            $user = $entityManager->getRepository(User::class)->find($userId);
            
            if (!$user || !$user->getImage()) {
                throw new \RuntimeException('Image de référence non trouvée');
            }

            // Handle uploaded file
            $uploadedFile = $request->files->get('image');
            if (!$uploadedFile) {
                throw new \RuntimeException('Aucun fichier image reçu');
            }

            // Validate MIME type
            $mimeType = $uploadedFile->getMimeType();
            if (!in_array($mimeType, ['image/jpeg', 'image/png'])) {
                throw new \RuntimeException('Seuls les formats JPEG et PNG sont supportés');
            }

            // Create temporary files
            $tempDir = sys_get_temp_dir();
            $tempUploadName = 'upload_'.uniqid().'.jpg';
            $tempRefName = 'ref_'.uniqid().'.jpg';
            $tempUploadPath = $tempDir.DIRECTORY_SEPARATOR.$tempUploadName;
            $tempRefPath = $tempDir.DIRECTORY_SEPARATOR.$tempRefName;

            // Save uploaded file
            $uploadedFile->move($tempDir, $tempUploadName);

            // Download and save reference image
            $referenceImageContent = file_get_contents($user->getImage());
            if ($referenceImageContent === false) {
                throw new \RuntimeException('Impossible de télécharger l\'image de référence');
            }
            file_put_contents($tempRefPath, $referenceImageContent);

            // Get Python script path
            $projectDir = $this->getParameter('kernel.project_dir');
            $pythonScript = $projectDir.DIRECTORY_SEPARATOR.'compare.py';

            if (!file_exists($pythonScript)) {
                throw new \RuntimeException('Script Python introuvable');
            }

            // Execute Python script
            $process = new Process([
                'python',  // Changed from python3 to python for Windows
                $pythonScript,
                $tempUploadPath,
                $tempRefPath
            ]);
            
            $process->setTimeout(60);
            $process->run();

            // Cleanup temporary files
            @unlink($tempUploadPath);
            @unlink($tempRefPath);

            if (!$process->isSuccessful()) {
                throw new \RuntimeException('Erreur Python: ' . $process->getErrorOutput());
            }

            $result = json_decode($process->getOutput(), true);
            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new \RuntimeException('Erreur de décodage JSON: ' . json_last_error_msg());
            }



            return new JsonResponse($result);

        } catch (\Exception $e) {
            return new JsonResponse([
                'success' => false,
                'message' => 'Erreur: ' . $e->getMessage(),
                'details' => $e->getTraceAsString()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/face-recognition', name: 'app_face_recognition')]
    public function faceRecognition(SessionInterface $session): Response
    {
        $Attemp = $session->get('Attemp');
        $Attemp--;
        $session->set('Attemp', $Attemp);
        
        if ($Attemp === 0) {
            $session->clear();
            // Ajoutez un message flash spécial pour la popup
            $this->addFlash('attempt_error', 'Nombre d\'essais dépassé. Vous serez redirigé dans 3 secondes.');
            return $this->render('user/ErrorComapring.html.twig', [
                'show_redirect_popup' => true
            ]);
        }
        
        return $this->render('user/face_recognition.html.twig');
    }
    //reset Password
    #[Route('/reset-password-request', name: 'app_reset_password_request')]
    public function requestResetPassword(Request $request, EntityManagerInterface $entityManager, UserRepository $userRepository): Response
    {
        if ($request->isMethod('POST')) {
            $email = $request->request->get('email');
            $user = $userRepository->findOneBy(['email' => $email]);
    
            if ($user) {
                // Generate token and set expiry
                $resetToken = bin2hex(random_bytes(32));
                $resetTokenExpiry = new \DateTime('+1 hour');
                
                // Store in database
                $user->setResetToken($resetToken);
                $user->setResetTokenExpiry($resetTokenExpiry);
                $entityManager->flush();
    
                // Send email
                try {
                    $mail = new PHPMailer(true);
                    $mail->SMTPDebug = SMTP::DEBUG_OFF;
                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'motezselmi.77@gmail.com';
                    $mail->Password = 'tghu xktr pllb juwq';
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                    $mail->Port = 587;
    
                    $mail->setFrom('motezselmi.77@gmail.com', 'Vehify');
                    $mail->addAddress($email);
    
                    $resetUrl = $this->generateUrl('app_reset_password', ['token' => $resetToken], UrlGeneratorInterface::ABSOLUTE_URL);
    
                    $mail->isHTML(true);
                    $mail->Subject = 'Reset Your Password';
                    $mail->Body = sprintf(
                        '<p>Please click <a href="%s">here</a> to reset your password. This link will expire in 1 hour.</p>',
                        $resetUrl
                    );
    
                    $mail->send();
                    $this->addFlash('success', 'If your email exists in our system, you will receive a password reset link.');
                    
                    // Always return same message to prevent email enumeration
                    return $this->redirectToRoute('app_user_new');
                    
                } catch (Exception $e) {
                    $this->addFlash('error', 'We could not send the reset email. Please try again later.');
                }
            } else {
                // Show same message whether user exists or not (security)
                $this->addFlash('success', 'If your email exists in our system, you will receive a password reset link.');
                return $this->redirectToRoute('app_user_new');
            }
        }
    
        return $this->render('user/reset_password_request.html.twig');
    }
    
    #[Route('/reset-password/{token}', name: 'app_reset_password')]
    public function resetPassword(
        Request $request, 
        string $token, 
        EntityManagerInterface $entityManager,
        UserRepository $userRepository,
        ValidatorInterface $validator
    ): Response {
        $user = $userRepository->findOneBy(['reset_token' => $token]);
        
        // Validate token
        if (!$user || $user->getResetTokenExpiry() < new \DateTime()) {
            $this->addFlash('error', 'Invalid or expired password reset link.');
            return $this->redirectToRoute('app_user_new');
        }
    
        if ($request->isMethod('POST')) {
            $password = $request->request->get('password');
            $confirmPassword = $request->request->get('confirm_password');
            
            // Basic validation
            if ($password !== $confirmPassword) {
                $this->addFlash('error', 'Passwords do not match.');
                return $this->redirectToRoute('app_reset_password', ['token' => $token]);
            }
            
            if (strlen($password) < 8) {
                $this->addFlash('error', 'Password must be at least 8 characters long.');
                return $this->redirectToRoute('app_reset_password', ['token' => $token]);
            }
    
            // Update password
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $user->setMotDePasse($hashedPassword);
            
            // Clear reset token
            $user->setResetToken(null);
            $user->setResetTokenExpiry(null);
            
            $entityManager->flush();
    
            $this->addFlash('success', 'Your password has been reset successfully. You can now login.');
            return $this->redirectToRoute('app_user_new');
        }
    
        return $this->render('user/reset_password.html.twig', [
            'token' => $token
        ]);
    }
}