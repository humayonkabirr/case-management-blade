<?php

use App\Models\ActivityLog;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

function __isActive($routeNames, $class = 'active')
{
  $routeNames = (array) $routeNames; // Ensure $routeNames is an array
  return in_array(Route::currentRouteName(), $routeNames) ? $class : '';
}

function __activity($action, $model = null, $before = null, $after = null, $status = 1, $userId = null)
{
  // Ensure the model is an object before calling get_class()
  $modelName = is_object($model) ? get_class($model) : null;

  // Get the old data (before) and new data (after) if the model is provided
  $beforeData = $before ?? ($model ? $model->getOriginal() : null); // Get original data (old)
  $afterData = $after ?? ($model ? $model->getAttributes() : null); // Get current data (new)

  // Retrieve the controller and function name
  $routeAction = Route::currentRouteAction(); // e.g., App\Http\Controllers\UserController@update
  $controller = class_basename(explode('@', $routeAction)[0]); // Extract the controller name
  $method = explode('@', $routeAction)[1] ?? null; // Extract the method name

  // Log the activity
  ActivityLog::create([
    'user_id' => $userId ?? auth()->id(),
    'url' => Request::fullUrl(),
    'action' => $action,
    'model' => $modelName,
    'controller' => $controller,
    'method' => $method,
    'before' => $beforeData ?? null,
    'after' => $afterData ?? null,
    'device' => Request::header('User-Agent'),
    'ip' => Request::ip(),
    'user_agent' => Request::header('User-Agent'),
    'status' => $status,
  ]);
}
