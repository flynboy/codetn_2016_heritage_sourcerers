@extends('layouts.app')
@include('includes.nav_bar')
@section('content')

<html>
    <style type = 'text/css'>
    .Congrats{
    width:auto;
    max-width: 50%; 
    height:auto; 
    max-height:50%; 
    z-index:200;
}
body {
    background-image: url(/images/background.jpg);
    background-repeat: no-repeat;
    background-position: center;
    background-size: 200%;
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
document.write("<center><img src= '/images/"+m+".png' alt='CONGRATS!' class='Congrats'></center>");



</script>
