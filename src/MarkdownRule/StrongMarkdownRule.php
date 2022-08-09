<?php

namespace App\MarkdownRule;

class StrongMarkdownRule implements MarkdownRuleInterface
{

    public function getPattern(): string
    {
        return '/(\*\*|__)(.+?)\1/';
    }

    public function getTag(): string
    {
        return 'strong';
    }
}