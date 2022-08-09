<?php

namespace App\Controller;

use App\Form\MarkdownType;
use App\MarkdownRule\EmMarkdownRule;
use App\MarkdownRule\StrongMarkdownRule;
use App\Service\MarkdownService;
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
    public function result(Request $request): Response
    {
        $markdownService = new MarkdownService([
            new EmMarkdownRule(),
            new StrongMarkdownRule(),
        ]);

        $text = $request->get('text', '');
        $text = $markdownService->applyMarkdown($text);
        return new Response($text);
    }
}
