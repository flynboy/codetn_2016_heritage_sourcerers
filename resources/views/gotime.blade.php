@extends('layouts.app')
@include('includes.nav_bar')
@section('content')
    <div class="Background">


<!DOCTYPE html>

<html>
    <script> /*global localStorage*/ </script>
    
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes, minimum-scale=1.0, maximum-scale=1.0" />
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
.gobtn{
    background-color: #0F3E80;
    color: white;
    padding: 8px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    width: 250px;
    position: relative;
    top: 100;
}

.gobtn:hover, .gobtn:focus {
    background-color: #0F3E80;
    color: white;}

#start_selector {
    background-color: #A6A6A6;
    color: white;
    padding: 15px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    width: 250px;
    position: relative;
}

#start_selector:hover {
    background-color: #0F3E80 ;
    color: white;
}

 #start_selector:focus {
     background-color: #A6A6A6;
     color: white;
 }
 
 #location_selector {
    background-color: #A6A6A6;
    color: white;
    padding: 15px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    width: 250px;
    position: relative;
}

#location_selector:hover {
    background-color: #0F3E80 ;
    color: white;
}

 #location_selector:focus {
     background-color: #A6A6A6;
     color: white;
 }
#myInput1 {
   
    background-position: 14px 12px;
    background-repeat: no-repeat;
    font-size: 16px;
    padding: 14px 20px 12px 45px;
    border: none;
}



.current_selector {
position: relative;
top: 10px;
left: 0px;
}

.location_selector {
position: relative;
top: 15px;
left: 0px;
}

.selector-content {
    display: none;
    position: relative;
    background-color: #D1D1D1;
    max-width: 250px;
    overflow: none;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.selector-content a {
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    max-width: 250px;
    overflow: none;
}

.show {display:block;}


</style>
</head>
<body>

    
<h2>Where Are You?</h2>
    <div class="current_selector">
        <select id="start_selector" name="Check In!">
          
                <option value="NULL">Check In!</option>
                <option value="1">Commons</option>
                <option value="2">Theater</option>
                <option value="3">Gym</option>
                <option value="4">Fine Arts</option>
                <option value="5">Wing 1</option>
                <option value="6">Wing 2</option>
                <option value="7">Wing 3</option>
          
        </select>
    </div>



<br>
<h2>Where Are You Going?</h2>

    <div class="location_selector">
        <select id="location_selector" name="Find Location">
             <div class="selector-content">
                    <option value="NULL">Find Location!</option>
                    <option value="A">Commons</option>
                    <option value="B">Theater</option>
                    <option value="C">Gym</option>
                    <option value="D">Fine Arts</option>
                    <option value="E">Wing 1</option>
                    <option value="F">Wing 2</option>
                    <option value="G">Wing 3</option>
             </div>
        </select>
    </div>

<div id="result">
    
<script>

    function Map() {
        var l = document.getElementById("start_selector");
        var m = document.getElementById("location_selector");
        var map_id = l.options[l.selectedIndex].value + m.options[m.selectedIndex].value;
        //alert(map_id);
        window.location.href='/testMap?map_id='+map_id+'&l='+l.options[l.selectedIndex].value+'&m='+m.options[m.selectedIndex].value;
       //Provides some core functionality to the app, DO NOT TOUCH
    }   
    

</script>
    
</div>


<div class="dropdown">
    <div id="myInput">
        <a href="javascript: Map();" class="gobtn">GO!</a>
    </div>
</div>

</body>
</html>

@endsection


