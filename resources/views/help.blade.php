@extends('layouts.app')
@include('includes.nav_bar')
@section('content')
<!DOCTYPE html>
<html>
   
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   
<style type = 'text/css'>
    body {
        background-image: url(/images/background.jpg);
    background-repeat: no-repeat;
    background-position: center;
    background-size: 150%;
    }
    a {
color: #CC0000;
}
a:hover {
color: #191970;
}
    
</style>
</head>
<body>
    <h2><strong>Contact Us for Help!</strong></h2>
    
    <h3><strong>School Address:</strong></h3>
    <p>3741 East Lamar Alexander Parkway</p>
    
    <h3><strong>Phone:</strong></h3>
    <p>(865) 984 - 8110</p>
    
    <h3><strong><a href="http://www.blountk12.org/heritage-hs/">HHS Website</a><style="color: #CC0000"></strong></h3>
    
    <h3><strong>Team Email:</strong></h3>
    <p>sourcerers_codetn@gmail.com</p>
</body>
</html>

@endsection