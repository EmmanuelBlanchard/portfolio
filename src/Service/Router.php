<?php

declare(strict_types=1);

namespace  App\Service;

use App\Controller\Error;
use App\Controller\FrontOffice\ContactController;
use App\Controller\FrontOffice\HomeController;
use App\Service\Database;
use App\Service\Http\Request;
use App\Service\Http\Session;
use App\Service\Security\AccessControl;
use App\Service\Security\Token;
use App\View\View;

// Cette classe router est un exemple très basique. Cette façon de faire n'est pas optimale
class Router
{
    private Database $database;
    private View $view;
    private HomeController $homeController;
    private ContactController $contactController;
    private Request $request;
    private Session $session;
    private AccessControl $accesscontrol;
    private Token $token;
    private Error $error;

    public function __construct()
    {
        // Dépendances
        $this->database = new Database();
        $this->view = new View();
        $this->request = new Request();
        $this->session = new Session();
        $this->accesscontrol = new AccessControl($this->session);
        $this->token = new Token($this->session);
        $this->error = new Error($this->session, $this->view);

        // Injection des dépendances
        $this->homeController = new HomeController($this->view, $this->session, $this->error);
        $this->contactController = new ContactController($this->view, $this->session, $this->error);
    }

    public function run(): void
    {
        $action = $this->request->getGetItem('action') ?? 'home';

        // Déterminer sur quelle route nous sommes // Attention algorithme naïf
        if ($action === 'home') {
            // route http://localhost:8000/?action=home
            $this->homeController->displayHome();
        } elseif ($action=== 'contact' && ($this->request->getPost() !== null)) {
            // route http://localhost:8000/?action=contact
            $this->contactController->contact($this->request->getPost(), $this->token, $this->request);
        } else {
            $this->error->display('Erreur 404', 'Cette page n\'existe pas !', 'FrontOffice');
        }
    }
}
