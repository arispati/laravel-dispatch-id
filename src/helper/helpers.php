<?php

use Arispati\LaravelDispatchId\Event;
use Illuminate\Contracts\Queue\ShouldQueue;

if (! function_exists('dispatch_id')) {
    /**
     * Dispatch a job and get the job id
     *
     * @param ShouldQueue $job
     * @return integer
     */
    function dispatch_id(ShouldQueue $job): int
    {
        return Event::dispatch($job);
    }
}
