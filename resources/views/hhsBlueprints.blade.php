@extends('layouts.app')

@section('content')
    <div id='welcome'>
    <h1>Database</h1>
    
    <ul>
        <?php
foreach ($Routes as $route) {
echo '<li>' . $route->route . '</li>';
echo '<li>' . $route->time . '</li>';
echo '<li>' . $route->location . '</li>';
echo '<li>' . $route->Name . '</li>';
      }
      ?>
    </ul>
  </div>
@endsection

font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size: 14px;
    line-height: 1.428571429;
    color: #333333;
    background-color: #fff;
    text-align: -webkit-center;
    