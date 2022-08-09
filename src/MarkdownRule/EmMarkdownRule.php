<?php

namespace App\MarkdownRule;

class EmMarkdownRule implements MarkdownRuleInterface
{

    public function getPattern(): string
    {
        return '/(\*|_)(.+?)\1/';
    }

    public function getTag(): string
    {
        return '<em>';
    }
}