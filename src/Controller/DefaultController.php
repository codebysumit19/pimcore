<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends FrontendController
{
    /**
     * This is called for simple pages that just need a template.
     * By default Pimcore maps it to /templates/default/default.html.twig
     * if you configure it as the documents.default_controller.
     */
    public function defaultAction(Request $request): Response
    {
        // Add any variables you want to pass to the template here.
        return $this->render('default/default.html.twig', [
            'foo' => 'bar',
        ]);
    }
}
