<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\hhsBlueprints;

class hhsBlueprintsController extends Controller
{
  public function hhsBlueprints()
  {
    return view('hhsBlueprints', ['Routes'=>hhsBlueprints::all()]);
  }
  
  public function createOne()
  {
     hhsBlueprints::create(array(
        'route'=>'2',
        'time'=>7,
        'location'=>'V-105',
        'prizes'=>'NULL'
      ));
      
      return view('hhsBlueprints', ['Routes'=>hhsBlueprints::all()]);
  }
 //http://laravel.io/forum/11-07-2014-how-to-post-a-form-to-a-controller-and-validate-it
  
   public function dataNew()
  {
     hhsBlueprints::create(array(
        'route'=>Input::get('route'),
        'time'=>Input::get('time'),
        'location'=>Input::get('location'),
        'prizes'=>Input::get('prizes'),
        'submit'=>Input::post('hhsBlueprints'),
      ));
      
      return view('admin', ['message'=>'Data Saved Succefully to Database!']);
  }
}