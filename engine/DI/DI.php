<?php

namespace engine\DI;

class DI
{
    /**
     * В данном контейнере хранятся зависимости DI контейнера
     */
    private $container = [];

    /**
     * Эта функция добавляет зависимость в контейнер, т.е. @var $container
     */
    public function set(string $key, $value)
    {
        $this->container[$key] = $value;
        return $this;
    }

    /**
     * Эта функция возвращает зависимость по ключу т.е. @var $key
     * из DI контейнера т.е. @var $container
     */
    public function get(string $key){
        return $this->has($key);
    }

    /**
     * Проверяет наличме ключа, если есть, возвращает
     */
    public function has(string $key){
        return $this->container[$key] ?? null;
    }
}
