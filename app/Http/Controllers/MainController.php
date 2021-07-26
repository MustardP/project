<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{

  public function sayHello(){

    return 'Hi!';
  }
  public function returnHome(){

    return view('welcome');

  }

    //
}
