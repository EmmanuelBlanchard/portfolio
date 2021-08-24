<?php

declare(strict_types=1);

namespace App\Service\Http;

// Class permettant de gérer la variable super globale $_SESSION
class Session
{
    public function __construct()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
    }

    public function setSessionMessage(string $typeMessage, string $message): void
    {
        if (isset($_SESSION)) {
            $_SESSION[$typeMessage] = $message;
        }
    }

    public function getSessionMessage(string $typeMessage): ?string
    {
        if (isset($_SESSION[$typeMessage])) {
            $sessionMessage = $_SESSION[$typeMessage];
            unset($_SESSION[$typeMessage]);
            return $sessionMessage;
        }
        return null;
    }

    public function getMessageWithoutUnset(string $typeMessage): ?string
    {
        if (isset($_SESSION[$typeMessage])) {
            $sessionMessage = $_SESSION[$typeMessage];
            return $sessionMessage;
        }
        return null;
    }
}
