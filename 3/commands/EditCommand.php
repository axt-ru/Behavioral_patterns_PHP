<?php

namespace commands;

abstract class EditCommand implements ICommand
{
    protected $start;
    protected $end;
    protected $length;
    protected $clipboard;

    public function __construct(int $start, int $end)
    {
        $this->clipboard = \Clipboard::getInstance();
        $this->start = $start;
        $this->end = $end;
        $this->length = $end - $start;
    }

    protected function mb_substr_paste($text, $paste = '') {
        return mb_substr($text, 0, $this->start) . $paste . mb_substr($text, $this->start);
    }

    protected function mb_substr_cut($text) {
        $strStart = mb_substr($text, 0, $this->start);
        $strEnd = mb_substr($text, $this->end);
        return $strStart . $strEnd;

    }
}