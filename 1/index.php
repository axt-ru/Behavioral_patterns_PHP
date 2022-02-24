<?php

spl_autoload_register(static function ($className) {
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    require __DIR__ . DIRECTORY_SEPARATOR . $file . '.php';
});

$hunter= new HandHunter();

$user1 = new Searcher("Вова", "vova@ya.ru", 8);
$user2 = new Searcher("Саша", "sasha@ya.ru", 3);
$user3 = new Searcher("Петя", "petr@ya.ru", 7);
$user4 = new Searcher("Гарик", "igor@ya.ru", 4);

$hunter->attach($user1);
$hunter->attach($user2);
$hunter->attach($user3);
$hunter->attach($user4);

$hunter->detach($user4);

$hunter->vacancyAppeared();