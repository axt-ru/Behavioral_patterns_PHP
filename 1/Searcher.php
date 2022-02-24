<?php

class Searcher implements \SplObserver
{
    public $name;
    public $email;
    public $experience;

    public function __construct($name, $email, $experience)
    {
        $this->name = $name;
        $this->email = $email;
        $this->experience = $experience;
    }

    public function update(SplSubject $subject)
    {
        echo "Отправляем резюме от ".$this->name.PHP_EOL;
    }
}