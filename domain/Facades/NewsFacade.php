<?php

namespace domain\Facades;

use domain\Services\NewsService;
use Illuminate\Support\Facades\Facade;

class NewsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return NewsService::class;
    }
}
