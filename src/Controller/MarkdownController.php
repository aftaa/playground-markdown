<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MarkdownController extends AbstractController
{
    /**
     * @Route("/markdown", name="app_markdown")
     */
    public function index(): Response
    {
        return $this->render('markdown/index.html.twig', [
            'controller_name' => 'MarkdownController',
        ]);
    }
}
