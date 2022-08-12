<?php

namespace App\Factory;

use App\MarkdownRule\EmMarkdownRule;
use App\MarkdownRule\StrongMarkdownRule;
use App\Service\MarkdownService;

class MarkdownServiceFactory
{
    public MarkdownService $service;

    public function __construct()
    {
        $this->service = new MarkdownService([
            new StrongMarkdownRule(),
            new EmMarkdownRule(),
        ]);
    }
}