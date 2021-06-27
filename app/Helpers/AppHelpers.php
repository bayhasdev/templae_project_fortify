<?php

namespace App\Helpers;

use Illuminate\Support\Str;

class AppHelpers
{
  static function isCurrentUrl($path, bool $namedRoute = true)
  {
    if ($namedRoute) {
      $path = route($path, [], false);
      $path =   Str::replaceFirst('/', '', $path);
    }
    return  request()->is($path);
  }
}
