<?php

namespace App\Service;

class MarkdownService
{
    public function applyMarkdown(string $text)
    {
        dump($text);
        $text = preg_replace([
            '/(\*|_)(.+?)\1/'
        ], '<em>\2</em>', $text);
        return $text;
    }
}