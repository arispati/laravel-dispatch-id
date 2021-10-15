<?php

namespace Arispati\LaravelDispatchId;

use Illuminate\Container\Container;
use Illuminate\Contracts\Bus\Dispatcher;
use Illuminate\Contracts\Queue\ShouldQueue;

class Event
{
    /**
     * Dispatch job
     *
     * @param ShouldQueue $job
     * @return integer
     */
    public static function dispatch(ShouldQueue $job): int
    {
        return static::dispatcher()->dispatch($job);
    }

    /**
     * Dispatcher
     *
     * @return Dispatcher
     */
    private static function dispatcher()
    {
        return Container::getInstance()->make(Dispatcher::class);
    }
}
