@extends('layouts.app')
@include('includes.nav_bar')
@section('content')
<html>
    <style type = 'text/css'>
    .Congrats{
    width: auto;
    max-width: 75%; 
    height:auto; 
    max-height: 75%; 
    z-index:200;
    position: absolute;
    left: 40%;
}
body {
    background-image: url(/images/background.jpg);
    background-repeat: no-repeat;
    background-position: center;
    background-size: 200%;
    background-color: black;
}
</style>
<body>
<script>
function getQueryVariable(key) {
    var query = window.location.search.substring(1);
    var vars = query.split('&');
    for (var i = 0; i < vars.length; i++) {
        var pair = vars[i].split("=");
        if (decodeURIComponent(pair[0])== key) {
            return decodeURIComponent(pair[1]);
        }
    }
}

var l = getQueryVariable('l');
var m = getQueryVariable('m');
document.write("<center><img src= '/images/"+m+"_long.png' alt='CONGRATS!' class='Congrats'></center>");



</script>

<?php
//Connection info for mysql

$id = Auth::user()->id;

$username="flynboy";
$password="";
$database="c9";
$server="localhost";
$con=mysqli_connect($server, $username, $password);
@mysqli_select_db($con,  $database) or die( "Unable to select database");
//Selects the table: usersGoPoints
//$query="SELECT * FROM usersGoPoints";
//$result=mysqli_query($con,"SELECT * FROM usersGoPoints");
//$sql = "SELECT points FROM usersGoPoints";


$update = "UPDATE usersGoPoints SET points = points + 1 WHERE userId = ".$id."; " ;
$result = $con->query($update);


if($con->affected_rows<1){
    $addUser = "insert into usersGoPoints(points,userId) values(1,".$id.");";
    $result =mysqli_query($con,$addUser);
}


?>
<script>
     //window.location.href='/myProgress';
</script>

</body>
</html>