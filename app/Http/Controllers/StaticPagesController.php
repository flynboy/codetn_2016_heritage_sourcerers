<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StaticPagesController extends Controller
{
  public function welcome()
  {
    return view('welcome');
  }
}
