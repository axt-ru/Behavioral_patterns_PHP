<?php

class Clipboard
{
    private $data = [];
    private static $instance;

    public function set($data): void
    {
        echo "Вставлено в буфер: " . $data .PHP_EOL;
        $this->data[] = $data;
    }

    public function get()
    {
        $get = array_pop($this->data);
        echo "Взято из буфера: " . $get . PHP_EOL;
        return $get;
    }

    public static function getInstance()
    {
        if (!static::$instance) {
            static::$instance = new self();
        }
        return static::$instance;
    }

    private function __construct()
    {
    }
    public function __clone() {}
    private function __wakeup() {}
}