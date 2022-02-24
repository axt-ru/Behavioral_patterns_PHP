<?php

namespace commands;

class Copy extends EditCommand
{

    public function execute(string $text): string
    {
        $copy = mb_substr($text, $this->start, $this->length);
        $this->clipboard->set($copy);
        return $text;
    }

    public function unExecute(string $text): string
    {
        $this->clipboard->get();
        return $text;
    }
}