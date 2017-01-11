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

.wrapper1 {
    background-color: #0F3E80;
    color: white;
    padding: 8px;
    font-size: 16px;
    width: 100px;
    border: none;
    cursor: pointer;
    text-align: center;
    position: absolute;
    bottom: 3%;
    left: 25%;
}



.routebtn2{
    background-color: #0F3E80;
    color: white;
    padding: 8px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    width: 100px;
    text-align: center;
    position: absolute;
    bottom: 3%;
    left: 47%;
}

.wrapper2{
    float: center;
}


.routebtn3{
    background-color: #0F3E80;
    color: white;
    padding: 8px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    width: 100px;
    text-align: center;
    position: absolute;
    bottom: 3%;
    left: 68%;
}

.wrapper3{
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
var m = getQueryVariable('m');
    
    

document.write("<center><img src= '/images/"+map_id+"_long.jpg' alt='Map' style='width:900px;height:900px;'></center>");
  
  
   function long() {
            window.location.href='/directionsLong?map_id=' + map_id+'&l='+l+'&m='+m;
            
        }
  
  
  
  
  function Return() {
        window.location.href='/testMap?map_id=' + map_id+'&l='+l+'&m='+m;
            
}
       function Check(){
    window.location.href='/congrats?map_id=' + map_id+'&l='+l+'&m='+m;
}
    function Directions() {
        window.location.href='/directionsLong?map_id=' + map_id+'&l='+l+'&m='+m;
            
    }
    
    </script>
  
    <TABLE BORDER="0">
<TR>
    <div class="wrapper1">
        <TD><form action="/addPoints?m=<?php echo $_GET['m']; ?>" method="post"><?php echo Form::token(); ?><input type="submit" class="wrapper1"></form>
    </div>
</TD>
    <div class="wrapper2">
        <TD><a href="javascript: Return();" class="routebtn2">All routes</a>
    </div>
</TD>
    <div class="wrapper3">
        <TD><a href="javascript: Directions();" class="routebtn3">Directions</a>
    </div>
</TD>
</TR>

</TABLE>
    
</html>
@endsection