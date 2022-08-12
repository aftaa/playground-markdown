<?php

namespace App\Controller;

use App\Factory\MarkdownServiceFactory;
use App\Form\MarkdownType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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
    /**
     * @Route("/markdown/result", name="app_markdown_result")
     */
    public function result(Request $request, MarkdownServiceFactory $factory): Response
    {
        $text = $request->query->get('text', '');
        $text = $factory->service->applyMarkdown($text);
        return new Response($text);
    }
}
