<?php

namespace engine;

use Engine\DI\DI;

class Init
{
    private $di;

    /**
     * Передаём экземпляр класса DI и автоватически записываем его в переменную @private $di.
     * $this->di = $di->get('test'); проверям наличие и получаем ключ 'test', и запизываем её в @private $di.
     */
    public function __construct(DI $di)
    {
        $this->di = $di;
        $this->di = $di->get('test');
    }

    /**
     * Вытягивает и возвращает из DI-контейнера метод класса
     */
    public function get(){
        return $this->di->test();
    }
}
