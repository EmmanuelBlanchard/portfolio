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
        }
        */
        /*
        var_dump($data,$data['lastname'],$data['firstname'],$data['email'],$data['message'],$data['agreeterms']);
        die();
        */

        if (!empty($data['lastname']) || !empty($data['firstname']) ||
        !empty($data['email']) || !empty($data['message']) ||
        !empty($data['agreeterms'])) {
            if (empty($data['lastname'])) {
                $this->session->setSessionMessage('erreur', 'Veuillez entrer un nom.');
                header('Location: index.php?action=contact');
                exit();
            } elseif (!preg_match('/\d/', $data['lastname'])) {
                $this->session->setSessionMessage('erreur', 'Le nom ne peut pas contenir un nombre.');
                header('Location: index.php?action=contact');
                exit();
            } elseif (!preg_match('/^[A-ZÀÂÄÇÉÈÊËÎÏÔÖÙÛÜŸÆŒ]{1}([a-zàâäçéèêëîïôöùûüÿæœðó])*[-\'\’\s]{0,1}([A-ZÀÂÄÇÉÈÊËÎÏÔÖÙÛÜŸÆŒ]{0,1}([a-zàâäçéèêëîïôöùûüÿæœðó]*)[-\'\’\s]{0,1})*$/', $data['lastname'])) {
                $this->session->setSessionMessage('erreur', 'La première lettre du nom doit être en majuscule.');
                header('Location: index.php?action=contact');
                exit();
            } elseif (empty($data['firstname'])) {
                $this->session->setSessionMessage('erreur', 'Veuillez entrer un prénom.');
                header('Location: index.php?action=contact');
                exit();
            } elseif (!preg_match('/\d/', $data['firstname'])) {
                $this->session->setSessionMessage('erreur', 'Le prénom ne peut pas contenir un nombre.');
                header('Location: index.php?action=contact');
                exit();
            } elseif (!preg_match('/^[A-ZÀÂÄÇÉÈÊËÎÏÔÖÙÛÜŸÆŒ]{1}([a-zàâäçéèêëîïôöùûüÿæœðó])*[-\'\’\s]{0,1}([A-ZÀÂÄÇÉÈÊËÎÏÔÖÙÛÜŸÆŒ]{0,1}([a-zàâäçéèêëîïôöùûüÿæœðó]*)[-\'\’\s]{0,1})*$/', $data['firstname'])) {
                $this->session->setSessionMessage('erreur', 'La première lettre du prénom doit être en majuscule.');
                header('Location: index.php?action=contact');
                exit();
            } elseif (empty($data['email'])) {
                $this->session->setSessionMessage('erreur', 'Veuillez entrer un e-mail.');
                header('Location: index.php?action=contact');
                exit();
            } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $this->session->setSessionMessage('erreur', 'L\'adresse e-mail est invalide.');
                header('Location: index.php?action=contact');
                exit();
            } elseif (empty($data['message'])) {
                $this->session->setSessionMessage('erreur', 'Veuillez entrer un message.');
                header('Location: index.php?action=contact');
                exit();
            } elseif (empty($data['agreeterms'])) {
                $this->session->setSessionMessage('erreur', 'Veuillez cocher la case : j\'accepte que les informations saisies soient exploitées dans le cadre de la demande de contact un message. afin d\envoyer le message');
                header('Location: index.php?action=contact');
                exit();
            } elseif (!filter_var($data['agreeterms'], FILTER_VALIDATE_INT)) {
                $this->session->setSessionMessage('erreur', 'La case a cocher est invalide.');
                header('Location: index.php?action=contact');
                exit();
            }
            $lastname = $this->sanitizeData($data['lastname']);
            $firstname = $this->sanitizeData($data['firstname']);
            $email = $this->sanitizeData($data['email']);
            $message = $this->sanitizeData($data['message']);
        } else {
            header('Location: index.php?action=error');
            exit();
        }
        header('Location: index.php?action=home');
        exit();
    }

    public function sanitizeData(string $data): ?string
    {
        return htmlspecialchars(trim($data));
    }
}
