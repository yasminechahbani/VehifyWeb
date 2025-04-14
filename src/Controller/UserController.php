<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\LoginType;
use App\Form\UserType;
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

    #[Route( 'user/new' , name: 'app_user_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, UserRepository $userRepository,SessionInterface $session): Response
    {
        $user = new User();
        $user->setStatus("invalide");
        $user->setRole("USER");

        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        // Handle login form
        $loginForm = $this->createForm(LoginType::class);
        $loginForm->handleRequest($request);

        // Check which form was submitted
        if ($form->isSubmitted() && $form->isValid()) {
            // Registration form processing
            $email = $form->get('email')->getData();
            $password = $form->get('mot_de_passe')->getData();

            if ($userRepository->chercherEmail($email)) {
                $this->addFlash('error', 'Cet email est déjà utilisé.');
                return $this->redirectToRoute('app_user_new');
            }

            $hash = password_hash($password, PASSWORD_DEFAULT);
            $user->setMotDePasse($hash);

            $entityManager->persist($user);
            $entityManager->flush();
            $this->addFlash('success', 'Inscription réussie!');
            return $this->redirectToRoute('app_user_new');

            //verification de page login

        } elseif ($loginForm->isSubmitted()) {
            $email = $loginForm->get('email')->getData();
            $password = $loginForm->get('mot_de_passe')->getData();

            if ($email && $password) {
                $recaptchaResponse = $request->request->get('g-recaptcha-response');

                if (empty($recaptchaResponse)) {
                    $this->addFlash('error', 'Veuillez valider le reCAPTCHA');
                    return $this->redirectToRoute('app_user_new');
                }





                $user = $userRepository->ChercherUserSelonEmailAndPassword($email, $password);
                if ($user != null) {
                    if ($user && $user->getStatus() === "active") {
                        //Session
                        $session->set('id', $user->getId());
                        $session->set('nom', $user->getNom());
                        $session->set('prenom', $user->getPrenom());
                        $session->set('email', $user->getEmail());
                        $session->set('status', $user->getStatus());
                        $session->set('role', $user->getStatus());
                        $nom = $user->getNom();
                        $prenom = $user->getPrenom();
                        return $this->render('welcomePage/welcome.html.twig', [
                            'nom' => $nom,
                            'prenom' => $prenom,
                        ]);
                    } else {
                        $this->addFlash('error', 'Compte Non Validé');
                        $code = $this->generateOtp();
                        $this->sendEmail($user->getEmail(), $code);
                        $session->set('code', $code);
                        return $this->redirectToRoute('app_user_verifier');

                    }
                } else {
                    $this->addFlash('error', 'identifiants incorrects.');

                }
            }else
            {
                $this->addFlash('error', 'identifiants incorrects.');
            }
        }

            return $this->render('user/new.html.twig', [
                'form' => $form->createView(),
                'loginForm' => $loginForm->createView(),
                'recaptcha_site_key' => $_ENV['GOOGLE_RECAPTCHA_SITE_KEY'],
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
    public function edit(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    #[Route('user/{id}', name: 'app_user_delete', methods: ['POST'])]
    public function delete(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
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
            return $this->redirectToRoute('app_user_new');
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
            $mail->Username = 'bochriff.21@gmail.com';
            $mail->Password = 'yosa jnid xppp qosf';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Changed to STARTTLS for port 587
            $mail->Port = 587;

            // Important security note:
            // Consider using app-specific password or moving credentials to .env file
            // $mail->Password = $_ENV['GMAIL_APP_PASSWORD'];

            // Recipients
            $mail->setFrom('bochriff.21@gmail.com', 'Your Application Name'); // Changed to actual sender
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
}
