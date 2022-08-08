<?php

namespace App\Controller;

use App\Form\MarkdownType;
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
        $form = $this->createForm(MarkdownType::class);

        return $this->render('markdown/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
