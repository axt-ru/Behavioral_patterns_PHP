<?php

use commands\ICommand;

class Word
{
    private $text;
    private $commands = [];
    private $current = 0;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function editText(ICommand $command)
    {
        $this->text = $command->execute($this->text);
        echo $this->text . PHP_EOL;
        $this->commands[] = $command;
        $this->current++;
    }

    public function redo($levels)
    {
        echo "Повторить $levels операций" .PHP_EOL;

        for ($i = 0; $i < $levels; $i++)
        {
            if($this->current < count($this->commands) - 1){
                $this->text = $this->commands[$this->current++]->execute($this->text);
            }
        }
    }

    public function undo($levels)
    {
        echo "Отменить $levels операций" .PHP_EOL;

        for ($i = 0; $i < $levels; $i++)
        {
            if($this->current > 0) {
                $this->text = $this->commands[--$this->current]->unExecute($this->text);
            }
        }
    }

}
