<?php

use Illuminate\Container\Container;
use Illuminate\Support\Facades\Facade;
use Illuminate\View\Factory;

/** @var $container Container */
/** @var $events \TightenCo\Jigsaw\Events\EventBus */

// https://jigsaw.tighten.com/docs/event-listeners/

\Code16\JockoClient\Listeners::register($events);

function view(string $view, array $data = [])
{
    return Container::getInstance()->make(Factory::class)
        ->make($view, $data);
}

Facade::setFacadeApplication($container);

$container->bind('blade.compiler', 'bladeCompiler');

$container->bind(\Illuminate\Contracts\View\Factory::class, Factory::class);

