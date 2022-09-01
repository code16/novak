<?php

use Illuminate\Container\Container;
use Illuminate\View\Factory;

/** @var $container Container */
/** @var $events \TightenCo\Jigsaw\Events\EventBus */

/**
 * You can run custom code at different stages of the build process by
 * listening to the 'beforeBuild', 'afterCollections', and 'afterBuild' events.
 *
 * For example:
 *
 * $events->beforeBuild(function (Jigsaw $jigsaw) {
 *     // Your code here
 * });
 */


\Code16\JockoClient\Listeners::register($events);

function view(string $view, array $data = [])
{
    return Container::getInstance()->make(Factory::class)
        ->make($view, $data);
}
