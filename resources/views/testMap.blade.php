@extends('layouts.app')
@include('includes.nav_bar')
@section('content')

<html>
    
    <head>
        <title>Directions</title>
    </head>
<style type="text/css">
    
body {
    background-image: url(/images/background.jpg);
    background-repeat: no-repeat;
    background-position: center;
    background-size: 150%;
}
.routebtn1{
    background-color: #20D419;
    color: white;
    padding: 8px;
    font-size: 16px;
    width: 200px;
    border: none;
    cursor: pointer;
    position: absolute;
    bottom: 1%;
    left: 25%;
    text-align: center;
}

.wrapper1 {
    float: left;
}
.routebtn2{
    background-color: #DE1BCE;
    color: white;
    padding: 8px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    width: 200px;
    position: absolute;
    bottom: 1%;
    left: 43%;
    text-align: center;
}

.wrapper2 {
    float: center;
}
.routebtn3{
    background-color: #D90F0F;
    color: white;
    padding: 8px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    width: 200px;
    position: absolute;
    bottom: 1%;
    left: 61%;
    text-align: center;
}

.wrapper3 {
    float: right;
}
.Map{
    width:auto;
    max-width: 50%; 
    height:auto; 
    max-height:50%; 
    z-index:200;
}

.routebtn:hover, .routebtn:focus {
    background-color: #0F3E80;
    color: white;
    
}
</style>

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

var map_id = getQueryVariable('map_id');
var l = getQueryVariable('l');
var m = getQueryVariable('m')


document.write("<center><img src= '/images/"+map_id+"_all.jpg' alt='Map' class='Map'></center>");
  
    </script>
    
        <script>
        function short() {
            window.location.href='/shortestMap?map_id=' + map_id+'&l='+l+'&m='+m;
            
        }
        function standard() {
            window.location.href='/mediumMap?map_id=' + map_id+'&l='+l+'&m='+m;
        }
        
        function longest() {
            window.location.href='/longestMap?map_id=' + map_id+'&l='+l+'&m='+m;
        }
    
    </script>
    

<div class="wrapper1">  
    <a href="javascript: short();" class="routebtn1">Shortest Route</a>
</div>

<div class="wrapper2">
    <a href="javascript: standard();" class="routebtn2">Standard Route</a>
</div>

<div class="wrapper3">
    <a href="javascript: longest();" class="routebtn3">Longest Route</a>
</div>
    
</html>
@endsection