<?php

namespace App\MarkdownRule;

class StrongMarkdownRule implements MarkdownRuleInterface
{

    const PATTERN = '/(\*{2}|_{2})(.+?)\1/';
    const TAG = 'strong';

    public function getPattern(): string
    {
        return self::PATTERN;
    }

    public function getTag(): string
    {
        return self::TAG;
    }
}