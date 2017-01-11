@extends('layouts.app')

@section('content')
<head>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 <style type="text/css">
   
 body {
    background-image: url(/images/mainlogo.jpg);
    background-repeat: no-repeat;
    background-position: center;
    background-size: 100% 105%;
}
.btn1{
  display: inline-block;
  background-color: #FF4040;
  color: white;
  cursor: pointer; 
  white-space: nowrap; 
  width: 125px;
  font-size: 28px;
  position:absolute; 
  left: 20%; 
  top: 50%; 
  border-radius: 4px;
  -webkit-user-select: none; 
  -moz-user-select: none; 
  -ms-user-select: none; 
  user-select: none;
}
.btn2{
  background-color: white;
  color: black;
  display: inline-block;
  font-weight: normal;  
  cursor: pointer; 
  background-image: none; 
  border: 1px solid transparent; 
  white-space: nowrap; 
  width: 125px;
  font-size: 24px;
  border-radius: 4px; 
  Position: absolute; 
  left: 21.6%; 
  bottom: 25%;
  -webkit-user-select: none; 
  -moz-user-select: none; 
  -ms-user-select: none; 
  user-select: none;
}

</style>
</head>
<body>
  
    
    
    
  <div id='Login' >
    <div class="btn1">
    <a href="{{ secure_url('/login') }}" class="btn1"><i class="fa fa-btn fa-sign-in"></i> Login</a>
    </div>
  </div>
  <div id='Register'>
    <div class="btn2">
    <a href="{{ secure_url('/register') }}"><i class="fa fa-btn fa-user"></i>Register</a>
  </div>
  </div>
  
  </body>
@endsection
