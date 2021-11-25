<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
  public function swap($lang){
    app()->setLocale($lang);
    return view('formulario');
  }
}
