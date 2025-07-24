<?php

namespace engine;

use Engine\DI\DI;

class Test
{
    private $di;

    /**
     * В конструктор передаётся и автоматичиески вызывается экземпляр класса DI контейнера
     */
    public function __construct(DI $di)
    {
        $this->di = $di;
    }

    /**
     * Методл класса тест, вытягивается по ключу из DI контейнера через Init
     */
    public function test()
    {
        echo 'Вызов метода';
    }
}
