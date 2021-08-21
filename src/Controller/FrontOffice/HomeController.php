<?php

declare(strict_types=1);

namespace  App\Controller\FrontOffice;

use App\Service\Http\Session;
use App\Service\Security\Token;
use App\View\View;

class HomeController
{
    private View $view;
    private Session $session;
    private Token $token;

    public function __construct(View $view, Session $session)
    {
        $this->view = $view;
        $this->session = $session;
    }

    public function displayHome(Token $token, Session $session): void
    {
        $this->view->render(['template' => 'home', 'csrfToken' => $token->generate()], 'FrontOffice');
    }
}
