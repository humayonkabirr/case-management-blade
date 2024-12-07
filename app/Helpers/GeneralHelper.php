<?php

use Illuminate\Support\Facades\Route;

if (!function_exists('isActive')) {
  function isActive($routeNames, $class = 'active') {
      $routeNames = (array) $routeNames; // Ensure $routeNames is an array
      return in_array(Route::currentRouteName(), $routeNames) ? $class : '';
  }
}
