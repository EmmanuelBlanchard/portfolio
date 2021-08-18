<?php

declare(strict_types=1);

namespace App\Controller\FrontOffice;

use App\Controller\Error;
use App\Service\Http\Request;
use App\Service\Http\Session;
use App\Service\Security\Token;
use App\View\View;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

class ContactController
{
    private View $view;
    private Request $request;
    private Session $session;
    private Token $token;
    private Error $error;

    public function __construct(View $view, Session $session, Error $error)
    {
        $this->view = $view;
        $this->session = $session;
        $this->error = $error;
    }

    public function contact(array $data, Token $token, Request $request): void
    {
        /*
        if ($request->getPostItem('csrfToken') !== null) {
            if (!$token->verify($request->getPostItem('csrfToken'))) {
                $this->session->setSessionMessage('erreur', 'Votre message ne peut être envoyé !');
                header('Location: index.php?action=home');
                exit();
            }
        }*/

        if (!empty($data['lastname']) || !empty($data['firstname']) ||
        !empty($data['email']) || !empty($data['message']) ||
        !empty($data['agreeterms'])) {
            if (empty($data['lastname'])) {
                $this->session->setSessionMessage('erreur', 'Veuillez entrer un nom.');
                //header('Location: index.php?action=contact');
                //exit();
            }

            if (!preg_match('/\d/', $data['lastname'])) {
                $this->session->setSessionMessage('erreur', 'Le nom ne peut pas contenir un nombre.');
                //header('Location: index.php?action=contact');
                //exit();
            }

            if (!preg_match('/^[A-ZÀÂÄÇÉÈÊËÎÏÔÖÙÛÜŸÆŒ]{1}([a-zàâäçéèêëîïôöùûüÿæœðó])*[-\'\’\s]{0,1}([A-ZÀÂÄÇÉÈÊËÎÏÔÖÙÛÜŸÆŒ]{0,1}([a-zàâäçéèêëîïôöùûüÿæœðó]*)[-\'\’\s]{0,1})*$/', $data['lastname'])) {
                $this->session->setSessionMessage('erreur', 'La première lettre du nom doit être en majuscule.');
                //header('Location: index.php?action=contact');
                //exit();
            }

            if (empty($data['firstname'])) {
                $this->session->setSessionMessage('erreur', 'Veuillez entrer un prénom.');
                //header('Location: index.php?action=contact');
                //exit();
            }

            if (!preg_match('/\d/', $data['firstname'])) {
                $this->session->setSessionMessage('erreur', 'Le prénom ne peut pas contenir un nombre.');
                //header('Location: index.php?action=contact');
                //exit();
            }

            if (!preg_match('/^[A-ZÀÂÄÇÉÈÊËÎÏÔÖÙÛÜŸÆŒ]{1}([a-zàâäçéèêëîïôöùûüÿæœðó])*[-\'\’\s]{0,1}([A-ZÀÂÄÇÉÈÊËÎÏÔÖÙÛÜŸÆŒ]{0,1}([a-zàâäçéèêëîïôöùûüÿæœðó]*)[-\'\’\s]{0,1})*$/', $data['firstname'])) {
                $this->session->setSessionMessage('erreur', 'La première lettre du prénom doit être en majuscule.');
                //header('Location: index.php?action=contact');
                //exit();
            }

            if (empty($data['email'])) {
                $this->session->setSessionMessage('erreur', 'Veuillez entrer un e-mail.');
                //header('Location: index.php?action=contact');
                //exit();
            }

            if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $this->session->setSessionMessage('erreur', 'L\'adresse e-mail est invalide.');
                //header('Location: index.php?action=contact');
                //exit();
            }

            if (empty($data['message'])) {
                $this->session->setSessionMessage('erreur', 'Veuillez entrer un message.');
                //header('Location: index.php?action=contact');
                //exit();
            }

            if (empty($data['agreeterms'])) {
                $this->session->setSessionMessage('erreur', 'Veuillez cocher la case : j\'accepte que les informations saisies soient exploitées dans le cadre de la demande de contact un message. afin d\envoyer le message');
                //header('Location: index.php?action=contact');
                //exit();
            }

            if (!filter_var($data['agreeterms'], FILTER_VALIDATE_INT)) {
                $this->session->setSessionMessage('erreur', 'La case a cocher est invalide.');
                //header('Location: index.php?action=contact');
                //exit();
            }

            $lastname = $this->sanitizeData($data['lastname']);
            $firstname = $this->sanitizeData($data['firstname']);
            $email = $this->sanitizeData($data['email']);
            $message = $this->sanitizeData($data['message']);

            $message = wordwrap($message, 70, "\r\n");

            // Create an instance; passing `true` enables exceptions
            $mail = new PHPMailer(true);

            try {
                // Server settings
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;

                $mail->isSMTP();
                $mail->Host = "localhost";
                $mail->Port = 1025;

                /*
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'user@example.com';                     //SMTP username
                $mail->Password   = 'secret';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                */

                // Charset
                $mail->CharSet = "utf-8";

                // Recipients
                $mail->setFrom("{$email}", "{$lastname} {$firstname}");
                $mail->addAddress("johndoe@email.com");
                $mail->addCC("john@doe.com");

                //Attachments
                /*
                $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
                */

                // Content
                $mail->Subject = "E-mail de contact en provenance du site de portfolio";
                $mail->Body ="{$message}";
                /*
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Here is the subject';
                $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                */

                /*
                $mail->Body = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vehicula quam at leo convallis, ac dignissim felis viverra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin id nisl eu turpis iaculis gravida eget sed felis. In aliquet diam ut fringilla fermentum. Maecenas ac elit in felis sagittis luctus. Proin convallis luctus diam, in elementum lectus eleifend quis. Donec sit amet tellus nec nisl fermentum tempor vitae at tortor. Suspendisse orci sem, placerat non vulputate eu, semper pulvinar felis. Fusce eget venenatis elit. Sed sit amet commodo metus. Integer commodo eu ante et luctus. Fusce dictum magna facilisis viverra fringilla. Donec sem risus, iaculis ut augue consectetur, tincidunt tempor felis. Curabitur ut odio consequat, vulputate dui et, ullamcorper massa. Morbi commodo libero diam, id rhoncus tortor elementum non. ";
                */

                //To load the French version
                $mail->setLanguage('fr');

                // On envoie
                $mail->send();
                echo "Message envoyé";

                header('Location: index.php?action=home');
                exit();
            } catch (Exception $e) {
                echo "Message non envoyé. Erreur: {$mail->ErrorInfo}";
            } catch (Exception $e) {
                /* PHPMailer exception. */
                echo $e->errorMessage();
            } catch (\Exception $e) {
                /* PHP exception (note the backslash to select the global namespace Exception class). */
                echo $e->getMessage();
            }
        } else {
            header('Location: index.php?action=error');
            exit();
        }
        //header('Location: index.php?action=home');
        //exit();
    }

    public function sanitizeData(string $data): ?string
    {
        return htmlspecialchars(trim($data));
    }
}
