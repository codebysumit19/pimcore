<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ProspectController extends FrontendController
{
    public function listAction(Request $request): Response
    {
        return $this->render('prospects/list.html.twig', [
            'title' => 'Prospect list',
        ]);
    }

    public function detailAction(Request $request): Response
    {
        return $this->render('prospects/detail.html.twig', [
            'title' => 'Prospect detail',
        ]);
    }
}
