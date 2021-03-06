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
    background-color: #0F3E80;
    color: white;
    padding: 8px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    width: 100px;
    position: absolute;
    bottom: 3%;
    left: 25%;
    text-align: center;
}

.wrapper1{
    float: left;
}

.routebtn2{
    background-color: #0F3E80;
    color: white;
    padding: 8px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    width: 100px;
    position: absolute;
    bottom: 3%;
    left: 47%;
    text-align: center;
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
    position: absolute;
    bottom: 3%;
    left: 68%;
    text-align: center;
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
        
    

document.write("<center><img src= '/images/"+map_id+"_regular_directions.png' alt='directions' style='width:900px;height:900px;'></center>");
  
  function Return() {
        window.location.href='/testMap?map_id=' + map_id+'&l='+l+'&m='+m;
}
       function Check(){
    window.location.href='/congrats?map_id=' + map_id+'&l='+l+'&m='+m;
    
}
    function Directions() {
        window.location.href='/mediumMap?map_id=' + map_id+'&l='+l+'&m='+m;

}
       
    </script>
    

    <TABLE BORDER="0">
<TR>
    <div class="wrapper1">
        <TD><a href="javascript: Check();" class="routebtn1">Check In</a>
    </div>
</TD>
    <div class="wrapper2">
        <TD><a href="javascript: Return();" class="routebtn2">All routes</a>
    </div>
</TD>
    <div class="wrapper3">
        <TD><a href="javascript: Directions();" class="routebtn3">Map</a>
    </div>
</TD>

</TR>

</TABLE>
    
    
</html>
@endsection