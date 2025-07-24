<?php

require_once 'engine\DI\DI.php';
require_once 'engine\Test.php';
require_once 'engine\Init.php';

/**
 * Экземпляр класса DI-контейнера
 */
$di = new engine\DI\DI();

/**
 * В переменную $test помещается объект класса Test которому в конструктор передаётся экземпляр класса DI.
 * В  DI контейнер $di->set('test', $test); помещается объект класса Test по ключу test.
 */
$test = new engine\Test($di);
$di->set('test', $test);

/**
 * Создаём экземпляр класса Init() в конструктор которого передаём экземпляр DI-контейнера.
 * С помощью $init->get() вызываем метод test() класса Test.
 */
$init = new engine\Init($di);
$init->get();
