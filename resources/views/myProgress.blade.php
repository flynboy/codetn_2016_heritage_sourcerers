@extends('layouts.app')
@include('includes.nav_bar')
@section('content')
<!DOCTYPE html>
<html>
    
<head>
    <script src="js/jquery-1.11.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   
<style>
    body {
    background-image: url(/images/progress.png);
    background-repeat: no-repeat;
    background-position: center;
    background-color: white;
    background-size: 119% 105%;
    height: 100%;
    background-color: black;
    
}
    .points {
        position: absolute;
        bottom: 11.5%;
        left: 34%;
        font-size: 35px;
        color: white;
    }
</style>
</head>
<body>

    
 <html>
<body>
  
<div class="points">  
<?php
$id = Auth::user()->id;

$username="flynboy";
$password="";
$database="c9";
$server="localhost";
$con=mysqli_connect($server, $username, $password);
@mysqli_select_db($con,  $database) or die( "Unable to select database");
//Selects the table: usersGoPoints
$query="SELECT * FROM usersGoPoints WHERE userId = ".$id."; " ;

$result = $con->query($query);

if ($result && $result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["points"];
    }
} else {
    echo "0 results";
}

mysqli_close($con);
?>


    
    
</form>




<?php

//Just a few comments to help me remember MYSQL commands:
//UPDATE usersGoPoints SET points='number';



?>
</div>

</body>

</html>


@endsection
