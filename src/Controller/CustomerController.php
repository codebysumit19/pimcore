<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomerController extends FrontendController
{
    public function listAction(Request $request): Response
    {
        return $this->render('customers/list.html.twig', [
            'title' => 'Customer list',
        ]);
    }

    public function detailAction(Request $request): Response
    {
        return $this->render('customers/detail.html.twig', [
            'title' => 'Customer detail',
        ]);
    }
}
