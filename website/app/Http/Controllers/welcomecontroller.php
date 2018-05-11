<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomecontroller extends Controller
{
  public function index(){
    view('pages.home');
  }
}
