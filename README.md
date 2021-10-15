# Laravel Dispatch Id
Laravel package to get the job id after dispatch

## Description
This package is very useful when you need the job id after dispatch and use it for other logic

## How to Install
- Install with composer
```bash
composer require arispati/laravel-dispatch-id
```

## How to Use
- Using class
```php
use Arispati\LaravelDispatchId\Event;
use App\Jobs\TestJob;

// Basic dispatch
$jobId = Event::dispatch(new TestJob());

// Advanced dispatch
$job = (new TestJob())->delay(now()->addMinutes(10))
    ->onConnection('connection')
    ->onQueue('queue');
$jobId = Event::dispatch($job);
```
- Using helper function
```php
use App\Jobs\TestJob;

// Basic dispatch
$jobId = dispatch_id(new TestJob());

// Advanced dispatch
$job = (new TestJob())->delay(now()->addMinutes(10))
    ->onConnection('connection')
    ->onQueue('queue');
$jobId = dispatch_id($job);
```