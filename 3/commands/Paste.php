<?php

namespace commands;

class Paste extends EditCommand
{

    public function execute(string $text): string
    {
        $paste = $this->clipboard->get();
        $this->length = mb_strlen($paste);
        $this->end = $this->start + $this->length;
        return $this->mb_substr_paste($text, $paste);
    }

    public function unExecute(string $text): string
    {
        $cut = mb_substr($text, $this->start, $this->length);
        $this->clipboard->set($cut);
        return $this->mb_substr_cut($text);
    }
}