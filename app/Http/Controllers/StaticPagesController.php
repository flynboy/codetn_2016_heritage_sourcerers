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
  public function gotime()
  {
    return view('gotime');
  }
  public function testMap()
  {
    return view('testMap');
  }
  
  public function help()
  {
    return view('help');
  }
 public function myProgress()
 {
   return view('myProgress');
 }
  public function addPoints()
  {
  return view('addPoints');
  }
  public function longMap()
  {
    return view('longestMap');
  }
   public function mediumMap()
  {
    return view('mediumMap');
  }
   public function shortMap()
  {
    return view('shortestMap');
  }
   public function check()
  {
    return view('check');
  }
  public function directionsShort()
  {
  return view('directionsShort');
  }
    public function directionsMedium()
  {
  return view('directionsMedium');
  }
    public function directionsLong()
  {
  return view('directionsLong');
  }
    public function congrats()
    {
      return view('congrats');
    }
}

