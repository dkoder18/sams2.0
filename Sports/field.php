<?php

$file = fopen("../data.csv", 'r') or die("Unable to open file!"); // Opens the file, or returns error


$out=<<<EOD
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col"><p class="text-center">First Name</p></th>
      <th scope="col"><p class="text-center">Last Name</p></th>
      <th scope="col"><p class="text-center">Sport</p></th>
      <th scope="col"><p class="text-center">Age</p></th>
      <th scope="col"><p class="text-center">Gender</p></th>
      <th scope="col"><p class="text-center">City</p></th>
      <th scope="col"><p class="text-center">More Info</p></th>
    </tr>
  </thead>
  <tbody>
EOD;

$headers=[];
$data = fgetcsv($file);
for($i=0; $i<count($data); $i++){
    array_push($headers, $data[$i]);
}



while (($data = fgetcsv($file)) !== FALSE) {
    // echo "word " . $data[1]. "<br/>";
    $fname="";
    $lname="";
    $sport="<ul class=\"list-group\">";
    $age="";
    $gender="";
    $city="";
    $id="";
    for($i=0; $i<count($data); $i++){
        if($i==0){
            $id=$data[$i];
        }
        if($headers[$i]=="fname"){
            $fname= $data[$i];
        }
        if($headers[$i]=="lname"){
            $lname= $data[$i];
        }
        if($headers[$i]=="age"){
            $age= $data[$i];
        }
        if($headers[$i]=="gender"){
            $gender= $data[$i];
        }
        if($headers[$i]=="city"){
            $city= $data[$i];
        }
        if($headers[$i]=="archery" || $headers[$i]=="fencing" || $headers[$i]=="field" || $headers[$i]=="swim" || $headers[$i]=="tableTennis" || $headers[$i]=="teams" || $headers[$i]=="track" || $headers[$i]=="weightlifting" || $headers[$i]=="other"){
            if($data[$i]=="1"){
                $sport.="<li class=\"list-group-item\"><p class=\"text-center\">$headers[$i]</p></li>";
            }
        }

    }
    $sport.="</ul>";
    $row = <<<EOD
    <tr>
    <td><p class="text-center">$fname</p></td>
    <td><p class="text-center">$lname</p></td>
    <td>$sport</td>
    <td><p class="text-center">$age</p></td>
    <td><p class="text-center">$gender</p></td>
    <td><p class="text-center">$city</p></td>
    <td><p class="text-center"><a id="infoBtn" class="btn btn-info" href="https://web.njit.edu/~jsp74/sams2.0/masterpage/athleteRecords.php?id=$id" role="button">Info</a></p></td>
  </tr>
EOD;

    $out.=$row;
}

$out.=<<<EOD
    </tbody>
</table>
EOD;

// echo $out;
?>


<!DOCTYPE html>
<html>
<head>
    <title>USA</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Do+Hyeon" rel="stylesheet">
    
    <style>
        
        /******************************* Page GRID LAYOUT FORMATE CSS *******************************/
        
        .item1 { 
            grid-area: header; 
        }
        
        .item2 { 
            grid-area: menu; 
        }
        
        .item3 { 
            grid-area: main; 
        }
        
        .item4 { 
            grid-area: right; 
        }
        
        .item5 { 
            grid-area: footer; 
        }

        .grid-container {
            display: grid;
            grid-template-areas:
            'header header header header header header'
            'menu main main main right right'
            'menu footer footer footer footer footer';
            grid-gap: 10px;
            padding: 10px;
        }
        
        .grid-container > div {
            text-align: center;
            padding: 20px 0;
            font-size: 30px;
        }
        
        /******************************* Page Title Start Here *******************************/
        
        body{
            background-image: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%);
        }
        
        .jumbotron{
            background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);
            box-shadow: inset 0px 0px 5px 1px rgba(0,0,0,0.3);
            margin-bottom: 0;
        }
        
        .heading{
            text-align: center;
            font-weight: bold;
            font-family: 'Do Hyeon', sans-serif;
            
        }
        
        .navbar{
            border-radius: 0 !important;
        }
        
        /******************************* DropDown Menu Start Here *******************************/
        
        .btn{
            width: 280px;
            height: 60px;
            font-size: 16px;
            border-radius: 5px;
            font-weight: bold;
            margin-top: 10px;
        }
        
        .row .btn a{
            color: white;
            text-decoration: none;
        }

        
        .list-group-item{
            padding: 0px;
            background: inherit;
            /* border-radius: 10px; */
        }
        .list-group{
            /* border-radius: inherit; */
            margin: 0px;
        }
        #infoBtn{
            height: 2em;
            width: 4em;
        }


    </style>
    
    </head>
    
    <body>
        
        <div class = "jumbotron">
            <div class = "heading">
                <h2 id = "title1">Sports Available Management Software</h2>
                <h3 id = "title2">Adaptive Sports USA 2017 Junior Nationals</h3>
            </div>
        </div>
        
        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
                <a class="navbar-brand"  href="SAMShome.php"  style="color: #B3DA2E;">Dashboard</a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
            </div>

            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">

                    <!-- ALll nav-pages under this nav-bar is moved to masterpage folder -->
                    <!-- Pages commeted out will be taken care og eventually as the project moves forward -->

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Master Page <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <!-- <li><a id = "master_file" href="masterpage/masterfile.html">Master Help File</a></li>
                            <li><a id = "how_to" href="masterpage/howto.html">How to do it</a></li> -->
                            <li><a id = "register_form" href = "masterpage/registrationform.php">Registration Form</a></li>
                            <li><a id = "find_register" href = "masterpage/findregistration.html">Find All Registration</a></li>
                            <li><a id = "setup_pref" href = "masterpage/setupmaster.php">Setup Master Preferences</a></li>
                            <!-- <li><a id = "athlete_perform_record" href = "masterpage/athleteperform.html">Athlete Performance Records</a></li>
                            <li><a id = "qualifying_std" href = "masterpage/qualifyingstand.html">Qualifying Standards</a></li>
                            <li><a id = "set_relay" href = "masterpage/setrelay.html">Set Relay Points</a></li>
                            <li><a id = "see_credit" href = "masterpage/seecreditscreen.html">See Credit Screen</a></li>
                            <li><a id = "photo_database" href = "masterpage/photodatabase.html">Photo Database</a></li>
                            <li><a id = "classification" href = "masterpage/classificationfile.html">Classification file</a></li>
                            <li><a id = "Implements" href = "masterpage/implementsusedfile.html">Implements used file</a></li>
                            <li><a id = "pentathion" href = "masterpage/performancepointssetup.html">Performance Points Setup</a></li> -->
                        </ul>
                    </li>

                    <!-- ALll nav-pages under this nav-bar is moved to resultpage folder -->

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Result International Format <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a id = "extrackfield" href="resultpage/exporttrack.html">Export Track &amp; Field</a></li>
                            <li><a id = "exswimming" href="resultpage/exportswimming.html">Export Swimming</a></li>
                        </ul>
                    </li>

                    <!-- ALll nav-pages under this nav-bar is moved to preferences folder -->

                    <!-- <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Preferences <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a id = "backup" href="preferences/backuppreferences.html">Backup Preferences</a></li>
                            <li><a id = "restore" href="preferences/restorepreferences.html">Restore Preferences</a></li>
                        </ul>
                    </li> -->

                    <!-- All the Sports -->

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sports <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a id = "archery" href="#">Archery</a></li>
                            <li><a id = "fencing" href="#">Fencing</a></li>
                            <li><a id = "field" href="#">Field</a></li>
                            <li><a id = "swimming" href="#">Swimming</a></li>
                            <li><a id = "tabletennis" href="#">Table Tennis</a></li>
                            <li><a id = "teamsports" href="#">Team Sports</a></li>
                            <li><a id = "track" href="#">Track</a></li>
                            <li><a id = "other" href="#">Other Sports</a></li>
                        </ul>
                    </li>
                    
                </ul>

                <ul class="nav navbar-nav navbar-right dropdown">
                    <li>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Profile <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="login/logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        
        <div style="padding: 30px;">
        <?php
            echo $out;
        ?>
</div>

       
    </body>
</html>
