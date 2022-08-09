<?php

namespace App\Service;

use App\MarkdownRule\MarkdownRuleInterface;

class MarkdownService
{
    /**
     * @var MarkdownRuleInterface[]
     */
    private array $rules = [];

    /**
     * @param MarkdownRuleInterface[] $rules
     */
    public function __construct(array $rules)
    {
        $this->rules = $rules;
    }

    /**
     * @param string $text
     * @return string
     */
    public function applyMarkdown(string $text): string
    {
        foreach ($this->rules as $rule) {
            if (!$rule instanceof MarkdownRuleInterface) {
                continue;
            }
            $tag = $rule->getTag();
            $text = preg_replace($rule->getPattern(), "<$tag>\\2</$tag>", $text);
        }
        return $text;
    }
}