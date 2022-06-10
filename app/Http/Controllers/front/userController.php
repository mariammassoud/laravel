<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ConfirmsPasswords;

class userController extends Controller
{
  public function showadminname(){
    return "Ahmad";
  }
}
