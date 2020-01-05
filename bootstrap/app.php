<?php

use Illuminate\Foundation\Application;
use Illuminate\Contracts\Http\Kernel;

$app = new Application($_ENV['APP_BASE_PATH'] ?? dirname(__DIR__));

initIocContainerInstances($app);

return $app;

function initIocContainerInstances(Application $app): void
{
    $app->singleton(Kernel::class, App\Http\Kernel::class);
    $app->singleton(Illuminate\Contracts\Console\Kernel::class, App\Console\Kernel::class);
    $app->singleton(Illuminate\Contracts\Debug\ExceptionHandler::class, App\Exceptions\Handler::class);
}
