<?php

use commands\Copy;
use commands\Paste;
use commands\Cut;


spl_autoload_register(static function ($className) {
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    require __DIR__ . DIRECTORY_SEPARATOR . $file . '.php';
});

$text = "Пусть у нас текст, который мы получили из файла";
$word = new Word($text);
$word->editText(new Copy(0, 5));
$word->editText(new Paste(0, 0));
$word->editText(new Cut(17, 31));
$word->editText(new Paste(10, 0));

$word->undo(5);
