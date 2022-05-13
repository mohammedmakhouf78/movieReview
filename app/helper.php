<?php

use Illuminate\Support\Facades\Route;

if(! function_exists("currentRoute"))
{
    function currentRoute($route)
    {
        return  Route::currentRouteName() == $route;
    }
}