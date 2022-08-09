<?php

namespace App\MarkdownRule;

interface MarkdownRuleInterface
{
    public function getPattern(): string;

    public function getTag(): string;
}