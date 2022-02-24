<?php

namespace commands;

interface ICommand {

    public function execute(string $text);
    public function unExecute(string $text);

}

