<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        // Usamos el motor de plantillas View Renderer
        $renderer = service('renderer');

        return $renderer->render('home');
    }
}
