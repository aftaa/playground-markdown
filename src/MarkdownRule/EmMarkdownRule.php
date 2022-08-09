<?php

namespace App\MarkdownRule;

class EmMarkdownRule implements MarkdownRuleInterface
{

    const PATTERN = '/(\*|_)(.+?)\1/';
    const TAG = 'em';

    public function getPattern(): string
    {
        return self::PATTERN;
    }

    public function getTag(): string
    {
        return self::TAG;
    }
}