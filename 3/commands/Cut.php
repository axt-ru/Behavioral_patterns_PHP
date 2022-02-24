<?php

namespace commands;

class Cut extends EditCommand
{

    public function execute(string $text): string
    {
        $cut = mb_substr($text, $this->start, $this->length);
        $this->clipboard->set($cut);
        return $this->mb_substr_cut($text);
    }

    public function unExecute(string $text): string
    {
        $paste = $this->clipboard->get();
        return $this->mb_substr_paste($text, $paste);
    }
}
