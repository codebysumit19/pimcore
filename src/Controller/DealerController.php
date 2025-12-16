<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DealerController extends FrontendController
{
    public function listAction(Request $request): Response
    {
        return $this->render('dealers/list.html.twig', [
            'title' => 'Dealer list',
        ]);
    }

    public function detailAction(Request $request): Response
    {
        return $this->render('dealers/detail.html.twig', [
            'title' => 'Dealer detail',
        ]);
    }
}
