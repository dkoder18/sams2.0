<?php
     include( "./../login/functions.php" );
     session_start();     
     gatekeeper("./../login/login.php");
?>

<!DOCTYPE html>
<html>
     <head>
          <meta name="viewport" content="width=device-width, initial-scale=1">
          
          <!-- Latest compiled and minified CSS -->
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

          <!-- jQuery library -->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

          <!-- Latest compiled JavaScript -->
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          
          <style>
               
               .navbar{
                    margin-bottom: 10;
                    border-radius: 0 !important;
               }
               
               .jumbotron{
                    border-radius: 0 !important;
                    background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);
                    color: white;
                    margin-bottom: 0;
               }
               
               #subbtn{
                    width: 150px;
                    height: 40px;
                    background-color: #00C229;
                    color: white;
                    border-radius: 5px;
                    font-size: 25px;
                    font-weight: bold;
                    border: none;
                    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
               }
               
               #resetbtn{
                    width: 150px;
                    height: 40px;
                    background-color: #C24400;
                    color: white;
                    border-radius: 5px;
                    font-size: 25px;
                    font-weight: bold;
                    border: none;
                    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
               }
               
               .well{
                    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
               }
               
               hr{
                    border: 1px solid #009BC1;
               }

               #center{
                    display: block;   
                    margin: 25px;  
                    clear: both;  
                    width: 12%;
                    height: 50px;
                    font-size: 18px;
                    margin-left: 44%;
               }

               /* Submit button */
               #half-right{
                    display: block;   
                    margin: 25px;  
                    clear: both;  
                    width: 24%;
                    height: 50px;
                    font-size: 18px;
                    float: right
               }

               /* Update button */
               #half-left{
                    display: block;
                    background-color: #303639;
                    color: white; 
                    margin: 25px;  
                    clear: both;  
                    width: 24%;
                    height: 50px;
                    font-size: 18px;
                    float: left
               }

               .selectbox {  
                    float:left;  
                    text-align: center;
               } 

               .opt2 {  
                    float:left;  
                    text-align: center;  
                    margin: 70px;  
               }

               .opt3 {
                    float:center;
                    text-align:left;
                    padding: 10px;
                    font-size: 15px;
                    border-radius: 8px;
                    /*border: 1px solid black;*/
                    margin:1%;
                    position:center;

               }

               .selectbox select {  
                    width: 260px;  
                    height: 260px;
                    padding: 10px;
                    font-size: 20px;
                    border-radius: 8px;
                    border: 1px solid black;
                    margin-left: 70px;
               }

               .container{
                    align-self: center !important;
               }

               #form1_submit{
                    display:inline-block;
                    padding:0.7em 1.7em;
                    margin:0 0.3em 0.3em 0;
                    border-radius:0.2em;
                    box-sizing: border-box;
                    text-decoration:none;
                    font-family:'Roboto',sans-serif;
                    font-weight:400;
                    color:#FFFFFF;
                    background-color:#3369ff;
                    box-shadow:inset 0 -0.6em 1em -0.35em rgba(0,0,0,0.17),inset 0 0.6em 2em -0.3em rgba(255,255,255,0.15),inset 0 0 0em 0.05em rgba(255,255,255,0.12);
                    text-align:center;
                    position:relative;
               }

               #form1_submit:active{
                    box-shadow:inset 0 0.6em 2em -0.3em rgba(0,0,0,0.15),inset 0 0 0em 0.05em rgba(255,255,255,0.12);
               }
               
               @media all and (max-width:30em){
                    #form1_submit{
                         display: block;
                         margin: 0.4em auto;
                    }
               }

               /* edittable Table */
               .pt-3-half {
                    padding-top: 1.4rem;
               }
               /* edittable table */
               
          </style>
     </head>

     <body>
          <!-- <nav class="navbar navbar-inverse">
               <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>                        
                    </button>
               </div>

               <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                         <li class="active"><a href="./../SAMShome.php">Dashboard</a></li>
                    </ul>
               </div>
          </nav> -->

          <div class = "jumbotron">
               <strong class="text-center"><h1>Swimming Event Preferences</h1></strong>
          </div>

          <nav class="navbar navbar-inverse">
               <div class="navbar-header">
                    <a class="navbar-brand"  href="./../SAMShome.php"  style="color: #B3DA2E;">Dashboard</a>
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
                              <li><a id = "register_form" href = "./../masterpage/registrationform.php">Registration Form</a></li>
                              <li><a id = "find_register" href = "./../masterpage/findregistration.php">Find All Registration</a></li>
                              <li><a id = "setup_pref" href = "./../masterpage/setupmaster.php">Setup Master Preferences</a></li>
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
                              <li><a id = "extrackfield" href="./../resultpage/exporttrack.html">Export Track &amp; Field</a></li>
                              <li><a id = "exswimming" href="./../resultpage/exportswimming.html">Export Swimming</a></li>
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
                              <li><a id = "archery" href="sportsTable.php?sport=archery">Archery</a></li>
                              <li><a id = "fencing" href="sportsTable.php?sport=fencing">Fencing</a></li>
                              <li><a id = "field" href="sportsTable.php?sport=field">Field</a></li>
                              <li><a id = "swimming" href="sportsTable.php?sport=swim">Swimming</a></li>
                              <li><a id = "tabletennis" href="sportsTable.php?sport=tableTennis">Table Tennis</a></li>
                              <li><a id = "teamsports" href="sportsTable.php?sport=teams">Team Sports</a></li>
                              <li><a id = "track" href="sportsTable.php?sport=track">Track</a></li>
                              <li><a id = "weightlifting" href="sportsTable.php?sport=weightlifting">Weightlifting</a></li>
                              <li><a id = "other" href="sportsTable.php?sport=other">Other Sports</a></li>
                         </ul>
                         </li>
                         
                    </ul>

                    <ul class="nav navbar-nav navbar-right dropdown">
                         <li>
                         <a class="dropdown-toggle" data-toggle="dropdown" href="#">Profile <span class="caret"></span></a>
                         <ul class="dropdown-menu">
                              <li><a href="./../login/logout.php">Logout</a></li>
                         </ul>
                         </li>
                    </ul>
               </div>
          </nav>

          <div class = "container">
               <div class="col-sm-12 well">

                    <form name = "athregform" class = "form1" action = "" method="POST">

                         <h3>Basic Information</h3><hr>
                         <div class="col-sm-12">
                              <div class="row">
                                   <div class="col-sm-4 form-group">
                                        <label>Venue Name:</label>
                                        <input type="text" class="form-control" id="venueName" name="venueName" required>
                                   </div>

                                   <div class="form-group col-md-4">
                                        <label>Venue Location:</label>
                                        <input type="text" class="form-control" id="locationName" name="locationName">
                                   </div>
                              </div>
          
                              <div class = "row">
                                   <div class="col-sm-2 form-group">
                                        <label>Total Active Events:</label>
                                        <input type="number" class="form-control" id="activeEvents" name="activeEvents" disabled>
                                   </div>
                                   <div class="col-sm-4 form-group">
                                        <label>Currect Record Level:</label>
                                        <input type="text" class="form-control" id="crl" name="crl" required>
                                   </div>
                              </div>
                         </div>

                         <h3>Events</h3><hr>
                         <!-- Editable table -->
                         <div class="card">
                              <div class="card-body">
                                   <div id="table" class="table-editable">
                                   <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"><i class="fas fa-plus fa-2x"
                                             aria-hidden="true"></i></a></span>
                                   <table class="table table-bordered table-responsive-md table-striped text-center">
                                        <tr>
                                             <th class="text-center">Event #</th>
                                             <th class="text-center">Event Name</th>
                                             <th class="text-center">type pool</th>
                                             <th class="text-center">Max Per Heat</th>
                                             <th class="text-center">Promote Time Only</th>
                                             <th class="text-center">Seed Method</th>
                                             <th class="text-center">relay</th>
                                             <th class="text-center">Team Scoring</th>
                                             <th class="text-center">Event Date</th>
                                             <th class="text-center">Remove</th>
                                        </tr>
                                        <tr>
                                             <td id="event1" class="pt-3-half" contenteditable="true">Event 1</td>
                                             <td id="event1name" class="pt-3-half" contenteditable="true">4 x 25 Yd medley</td>
                                             <td id="event1type" class="pt-3-half" contenteditable="true">YD</td>
                                             <td id="event1heat" class="pt-3-half" contenteditable="true">3</td>
                                             <td id="event1promotetime" class="pt-3-half" contenteditable="true">No</td>
                                             <td id="event1seed" class="pt-3-half" contenteditable="true">lanes/2</td>
                                             <td id="event1relay" class="pt-3-half" contenteditable="true">first</td>
                                             <td id="event1scoring" class="pt-3-half" contenteditable="true">Yes</td>
                                             <td id="event1date" class="pt-3-half" contenteditable="true">26-JUL-18</td>
                                             <td>
                                                  <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                                             </td>
                                        </tr>
                                        <tr>
                                             <td id="event2" class="pt-3-half" contenteditable="true">Event 2</td>
                                             <td id="event2name" class="pt-3-half" contenteditable="true">200 Yd free</td>
                                             <td id="event2type" class="pt-3-half" contenteditable="true">YD</td>
                                             <td id="event2heat" class="pt-3-half" contenteditable="true">8</td>
                                             <td id="event2promotetime" class="pt-3-half" contenteditable="true">No</td>
                                             <td id="event2seed" class="pt-3-half" contenteditable="true">lanes</td>
                                             <td id="event2relay" class="pt-3-half" contenteditable="true"></td>
                                             <td id="event2scoring" class="pt-3-half" contenteditable="true">Yes</td>
                                             <td id="event2date" class="pt-3-half" contenteditable="true">26-JUL-18</td>
                                             <td>
                                                  <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                                             </td>
                                        </tr>
                                        <tr>
                                             <td id="event3" class="pt-3-half" contenteditable="true">Event 3</td>
                                             <td id="event3name" class="pt-3-half" contenteditable="true">25 Yd free</td>
                                             <td id="event3type" class="pt-3-half" contenteditable="true">YD</td>
                                             <td id="event3heat" class="pt-3-half" contenteditable="true">8</td>
                                             <td id="event3promotetime" class="pt-3-half" contenteditable="true">No</td>
                                             <td id="event3seed" class="pt-3-half" contenteditable="true">lanes</td>
                                             <td id="event3relay" class="pt-3-half" contenteditable="true"></td>
                                             <td id="event3scoring" class="pt-3-half" contenteditable="true">Yes</td>
                                             <td id="event3date" class="pt-3-half" contenteditable="true">26-JUL-18</td>
                                             <td>
                                                  <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                                             </td>
                                        </tr>
                                        <tr>
                                             <td id="event4" class="pt-3-half" contenteditable="true">Event 4</td>
                                             <td id="event4name" class="pt-3-half" contenteditable="true">3 x 25 Yd IM</td>
                                             <td id="event4type" class="pt-3-half" contenteditable="true">YD</td>
                                             <td id="event4heat" class="pt-3-half" contenteditable="true">8</td>
                                             <td id="event4promotetime" class="pt-3-half" contenteditable="true">No</td>
                                             <td id="event4seed" class="pt-3-half" contenteditable="true">lanes</td>
                                             <td id="event4relay" class="pt-3-half" contenteditable="true"></td>
                                             <td id="event4scoring" class="pt-3-half" contenteditable="true">Yes</td>
                                             <td id="event4date" class="pt-3-half" contenteditable="true">26-JUL-18</td>
                                             <td>
                                                  <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                                             </td>
                                        </tr>
                                        <tr>
                                             <td id="event5" class="pt-3-half" contenteditable="true">Event 5</td>
                                             <td id="event5name" class="pt-3-half" contenteditable="true">4 x 25 Yd IM</td>
                                             <td id="event5type" class="pt-3-half" contenteditable="true">YD</td>
                                             <td id="event5heat" class="pt-3-half" contenteditable="true">8</td>
                                             <td id="event5promotetime" class="pt-3-half" contenteditable="true">No</td>
                                             <td id="event5seed" class="pt-3-half" contenteditable="true">lanes</td>
                                             <td id="event5relay" class="pt-3-half" contenteditable="true"></td>
                                             <td id="event5scoring" class="pt-3-half" contenteditable="true">Yes</td>
                                             <td id="event5date" class="pt-3-half" contenteditable="true">26-JUL-18</td>
                                             <td>
                                                  <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                                             </td>
                                        </tr>
                                        <tr>
                                             <td id="event6" class="pt-3-half" contenteditable="true">Event 6</td>
                                             <td id="event6name" class="pt-3-half" contenteditable="true">50 Yd free</td>
                                             <td id="event6type" class="pt-3-half" contenteditable="true">YD</td>
                                             <td id="event6heat" class="pt-3-half" contenteditable="true">8</td>
                                             <td id="event6promotetime" class="pt-3-half" contenteditable="true">No</td>
                                             <td id="event6seed" class="pt-3-half" contenteditable="true">lanes</td>
                                             <td id="event6relay" class="pt-3-half" contenteditable="true"></td>
                                             <td id="event6scoring" class="pt-3-half" contenteditable="true">Yes</td>
                                             <td id="event6date" class="pt-3-half" contenteditable="true">26-JUL-18</td>
                                             <td>
                                                  <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                                             </td>
                                        </tr>
                                        <tr>
                                             <td id="event7" class="pt-3-half" contenteditable="true">Event 7</td>
                                             <td id="event7name" class="pt-3-half" contenteditable="true">50 Yd breast</td>
                                             <td id="event7type" class="pt-3-half" contenteditable="true">YD</td>
                                             <td id="event7heat" class="pt-3-half" contenteditable="true">8</td>
                                             <td id="event7promotetime" class="pt-3-half" contenteditable="true">No</td>
                                             <td id="event7seed" class="pt-3-half" contenteditable="true">lanes</td>
                                             <td id="event7relay" class="pt-3-half" contenteditable="true"></td>
                                             <td id="event7scoring" class="pt-3-half" contenteditable="true">Yes</td>
                                             <td id="event7date" class="pt-3-half" contenteditable="true">26-JUL-18</td>
                                             <td>
                                                  <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                                             </td>
                                        </tr>
                                        <tr>
                                             <td id="event8" class="pt-3-half" contenteditable="true">Event 8</td>
                                             <td id="event8name" class="pt-3-half" contenteditable="true">25 Yd breast</td>
                                             <td id="event8type" class="pt-3-half" contenteditable="true">YD</td>
                                             <td id="event8heat" class="pt-3-half" contenteditable="true">8</td>
                                             <td id="event8promotetime" class="pt-3-half" contenteditable="true">No</td>
                                             <td id="event8seed" class="pt-3-half" contenteditable="true">lanes</td>
                                             <td id="event8relay" class="pt-3-half" contenteditable="true"></td>
                                             <td id="event8scoring" class="pt-3-half" contenteditable="true">Yes</td>
                                             <td id="event8date" class="pt-3-half" contenteditable="true">26-JUL-18</td>
                                             <td>
                                                  <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                                             </td>
                                        </tr>
                                        <tr>
                                             <td id="event9" class="pt-3-half" contenteditable="true">Event 9</td>
                                             <td id="event9name" class="pt-3-half" contenteditable="true">50 Yd back</td>
                                             <td id="event9type" class="pt-3-half" contenteditable="true">YD</td>
                                             <td id="event9heat" class="pt-3-half" contenteditable="true">8</td>
                                             <td id="event9promotetime" class="pt-3-half" contenteditable="true">No</td>
                                             <td id="event9seed" class="pt-3-half" contenteditable="true">lanes</td>
                                             <td id="event9relay" class="pt-3-half" contenteditable="true"></td>
                                             <td id="event9scoring" class="pt-3-half" contenteditable="true">Yes</td>
                                             <td id="event9date" class="pt-3-half" contenteditable="true">26-JUL-18</td>
                                             <td>
                                                  <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                                             </td>
                                        </tr>
                                        <tr>
                                             <td id="event10" class="pt-3-half" contenteditable="true">Event 10</td>
                                             <td id="event10name" class="pt-3-half" contenteditable="true">25 Yd back</td>
                                             <td id="event10type" class="pt-3-half" contenteditable="true">YD</td>
                                             <td id="event10heat" class="pt-3-half" contenteditable="true">8</td>
                                             <td id="event10promotetime" class="pt-3-half" contenteditable="true">No</td>
                                             <td id="event10seed" class="pt-3-half" contenteditable="true">lanes</td>
                                             <td id="event10relay" class="pt-3-half" contenteditable="true"></td>
                                             <td id="event10scoring" class="pt-3-half" contenteditable="true">Yes</td>
                                             <td id="event10date" class="pt-3-half" contenteditable="true">26-JUL-18</td>
                                             <td>
                                                  <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                                             </td>
                                        </tr>
                                        <tr>
                                             <td id="event11" class="pt-3-half" contenteditable="true">Event 11</td>
                                             <td id="event11name" class="pt-3-half" contenteditable="true">50 Yd fly</td>
                                             <td id="event11type" class="pt-3-half" contenteditable="true">YD</td>
                                             <td id="event11heat" class="pt-3-half" contenteditable="true">8</td>
                                             <td id="event11promotetime" class="pt-3-half" contenteditable="true">No</td>
                                             <td id="event11seed" class="pt-3-half" contenteditable="true">lanes</td>
                                             <td id="event11relay" class="pt-3-half" contenteditable="true"></td>
                                             <td id="event11scoring" class="pt-3-half" contenteditable="true">Yes</td>
                                             <td id="event11date" class="pt-3-half" contenteditable="true">26-JUL-18</td>
                                             <td>
                                                  <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                                             </td>
                                        </tr>
                                        <tr>
                                             <td id="event12" class="pt-3-half" contenteditable="true">Event 12</td>
                                             <td id="event12name" class="pt-3-half" contenteditable="true">100 Yd free</td>
                                             <td id="event12type" class="pt-3-half" contenteditable="true">YD</td>
                                             <td id="event12heat" class="pt-3-half" contenteditable="true">8</td>
                                             <td id="event12promotetime" class="pt-3-half" contenteditable="true">No</td>
                                             <td id="event12seed" class="pt-3-half" contenteditable="true">lanes</td>
                                             <td id="event12relay" class="pt-3-half" contenteditable="true"></td>
                                             <td id="event12scoring" class="pt-3-half" contenteditable="true">Yes</td>
                                             <td id="event12date" class="pt-3-half" contenteditable="true">26-JUL-18</td>
                                             <td>
                                                  <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                                             </td>
                                        </tr>
                                        <tr>
                                             <td id="event13" class="pt-3-half" contenteditable="true">Event 13</td>
                                             <td id="event13name" class="pt-3-half" contenteditable="true">25 Yd fly</td>
                                             <td id="event13type" class="pt-3-half" contenteditable="true">YD</td>
                                             <td id="event13heat" class="pt-3-half" contenteditable="true">8</td>
                                             <td id="event13promotetime" class="pt-3-half" contenteditable="true">No</td>
                                             <td id="event13seed" class="pt-3-half" contenteditable="true">lanes</td>
                                             <td id="event13relay" class="pt-3-half" contenteditable="true"></td>
                                             <td id="event13scoring" class="pt-3-half" contenteditable="true">Yes</td>
                                             <td id="event13date" class="pt-3-half" contenteditable="true">26-JUL-18</td>
                                             <td>
                                                  <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                                             </td>
                                        </tr>
                                        <tr>
                                             <td id="event14" class="pt-3-half" contenteditable="true">Event 14</td>
                                             <td id="event14name" class="pt-3-half" contenteditable="true">4 x 25 Yd free</td>
                                             <td id="event14type" class="pt-3-half" contenteditable="true">YD</td>
                                             <td id="event14heat" class="pt-3-half" contenteditable="true">3</td>
                                             <td id="event14promotetime" class="pt-3-half" contenteditable="true">No</td>
                                             <td id="event14seed" class="pt-3-half" contenteditable="true">lanes/2</td>
                                             <td id="event14relay" class="pt-3-half" contenteditable="true">first</td>
                                             <td id="event14scoring" class="pt-3-half" contenteditable="true">Yes</td>
                                             <td id="event14date" class="pt-3-half" contenteditable="true">26-JUL-18</td>
                                             <td>
                                                  <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                                             </td>
                                        </tr>
                                        <tr>
                                             <td id="event15" class="pt-3-half" contenteditable="true">Event 15</td>
                                             <td id="event15name" class="pt-3-half" contenteditable="true">4 x 25 Yd free</td>
                                             <td id="event15type" class="pt-3-half" contenteditable="true">YD</td>
                                             <td id="event15heat" class="pt-3-half" contenteditable="true">3</td>
                                             <td id="event15promotetime" class="pt-3-half" contenteditable="true">No</td>
                                             <td id="event15seed" class="pt-3-half" contenteditable="true">lanes/2</td>
                                             <td id="event15relay" class="pt-3-half" contenteditable="true">second</td>
                                             <td id="event15scoring" class="pt-3-half" contenteditable="true">Yes</td>
                                             <td id="event15date" class="pt-3-half" contenteditable="true">26-JUL-18</td>
                                             <td>
                                                  <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                                             </td>
                                        </tr>
                                        <tr>
                                             <td id="event16" class="pt-3-half" contenteditable="true">Event 16</td>
                                             <td id="event16name" class="pt-3-half" contenteditable="true">3 x 50 M IM</td>
                                             <td id="event16type" class="pt-3-half" contenteditable="true">LC</td>
                                             <td id="event16heat" class="pt-3-half" contenteditable="true">8</td>
                                             <td id="event16promotetime" class="pt-3-half" contenteditable="true">No</td>
                                             <td id="event16seed" class="pt-3-half" contenteditable="true">lanes</td>
                                             <td id="event16relay" class="pt-3-half" contenteditable="true"></td>
                                             <td id="event16scoring" class="pt-3-half" contenteditable="true">Yes</td>
                                             <td id="event16date" class="pt-3-half" contenteditable="true">26-JUL-18</td>
                                             <td>
                                                  <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                                             </td>
                                        </tr>
                                        <tr>
                                             <td id="event17" class="pt-3-half" contenteditable="true">Event 17</td>
                                             <td id="event17name" class="pt-3-half" contenteditable="true">4 x 50 M IM</td>
                                             <td id="event17type" class="pt-3-half" contenteditable="true">LC</td>
                                             <td id="event17heat" class="pt-3-half" contenteditable="true">8</td>
                                             <td id="event17promotetime" class="pt-3-half" contenteditable="true">No</td>
                                             <td id="event17seed" class="pt-3-half" contenteditable="true">lanes</td>
                                             <td id="event17relay" class="pt-3-half" contenteditable="true"></td>
                                             <td id="event17scoring" class="pt-3-half" contenteditable="true">Yes</td>
                                             <td id="event17date" class="pt-3-half" contenteditable="true">26-JUL-18</td>
                                             <td>
                                                  <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                                             </td>
                                        </tr>
                                        <tr>
                                             <td id="event18" class="pt-3-half" contenteditable="true">Event 18</td>
                                             <td id="event18name" class="pt-3-half" contenteditable="true">100 M free</td>
                                             <td id="event18type" class="pt-3-half" contenteditable="true">LC</td>
                                             <td id="event18heat" class="pt-3-half" contenteditable="true">8</td>
                                             <td id="event18promotetime" class="pt-3-half" contenteditable="true">No</td>
                                             <td id="event18seed" class="pt-3-half" contenteditable="true">lanes</td>
                                             <td id="event18relay" class="pt-3-half" contenteditable="true"></td>
                                             <td id="event18scoring" class="pt-3-half" contenteditable="true">Yes</td>
                                             <td id="event18date" class="pt-3-half" contenteditable="true">26-JUL-18</td>
                                             <td>
                                                  <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                                             </td>
                                        </tr>
                                        <tr>
                                             <td id="event19" class="pt-3-half" contenteditable="true">Event 19</td>
                                             <td id="event19name" class="pt-3-half" contenteditable="true">50 M breast</td>
                                             <td id="event19type" class="pt-3-half" contenteditable="true">LC</td>
                                             <td id="event19heat" class="pt-3-half" contenteditable="true">8</td>
                                             <td id="event19promotetime" class="pt-3-half" contenteditable="true">No</td>
                                             <td id="event19seed" class="pt-3-half" contenteditable="true">lanes</td>
                                             <td id="event19relay" class="pt-3-half" contenteditable="true"></td>
                                             <td id="event19scoring" class="pt-3-half" contenteditable="true">Yes</td>
                                             <td id="event19date" class="pt-3-half" contenteditable="true">26-JUL-18</td>
                                             <td>
                                                  <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                                             </td>
                                        </tr>
                                        <tr>
                                             <td id="event20" class="pt-3-half" contenteditable="true">Event 20</td>
                                             <td id="event20name" class="pt-3-half" contenteditable="true">100 M breast</td>
                                             <td id="event20type" class="pt-3-half" contenteditable="true">LC</td>
                                             <td id="event20heat" class="pt-3-half" contenteditable="true">8</td>
                                             <td id="event20promotetime" class="pt-3-half" contenteditable="true">No</td>
                                             <td id="event20seed" class="pt-3-half" contenteditable="true">lanes</td>
                                             <td id="event20relay" class="pt-3-half" contenteditable="true"></td>
                                             <td id="event20scoring" class="pt-3-half" contenteditable="true">Yes</td>
                                             <td id="event20date" class="pt-3-half" contenteditable="true">26-JUL-18</td>
                                             <td>
                                                  <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                                             </td>
                                        </tr>
                                        <tr>
                                             <td id="event21" class="pt-3-half" contenteditable="true">Event 21</td>
                                             <td id="event21name" class="pt-3-half" contenteditable="true">50 M free</td>
                                             <td id="event21type" class="pt-3-half" contenteditable="true">LC</td>
                                             <td id="event21heat" class="pt-3-half" contenteditable="true">8</td>
                                             <td id="event21promotetime" class="pt-3-half" contenteditable="true">No</td>
                                             <td id="event21seed" class="pt-3-half" contenteditable="true">lanes</td>
                                             <td id="event21relay" class="pt-3-half" contenteditable="true"></td>
                                             <td id="event21scoring" class="pt-3-half" contenteditable="true">Yes</td>
                                             <td id="event21date" class="pt-3-half" contenteditable="true">26-JUL-18</td>
                                             <td>
                                                  <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                                             </td>
                                        </tr>
                                        <tr>
                                             <td id="event22" class="pt-3-half" contenteditable="true">Event 22</td>
                                             <td id="event22name" class="pt-3-half" contenteditable="true">50 M back</td>
                                             <td id="event22type" class="pt-3-half" contenteditable="true">LC</td>
                                             <td id="event22heat" class="pt-3-half" contenteditable="true">8</td>
                                             <td id="event22promotetime" class="pt-3-half" contenteditable="true">No</td>
                                             <td id="event22seed" class="pt-3-half" contenteditable="true">lanes</td>
                                             <td id="event22relay" class="pt-3-half" contenteditable="true"></td>
                                             <td id="event22scoring" class="pt-3-half" contenteditable="true">Yes</td>
                                             <td id="event22date" class="pt-3-half" contenteditable="true">26-JUL-18</td>
                                             <td>
                                                  <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                                             </td>
                                        </tr>
                                        <tr>
                                             <td id="event23" class="pt-3-half" contenteditable="true">Event 23</td>
                                             <td id="event23name" class="pt-3-half" contenteditable="true">100 M back</td>
                                             <td id="event23type" class="pt-3-half" contenteditable="true">LC</td>
                                             <td id="event23heat" class="pt-3-half" contenteditable="true">8</td>
                                             <td id="event23promotetime" class="pt-3-half" contenteditable="true">No</td>
                                             <td id="event23seed" class="pt-3-half" contenteditable="true">lanes</td>
                                             <td id="event23relay" class="pt-3-half" contenteditable="true"></td>
                                             <td id="event23scoring" class="pt-3-half" contenteditable="true">Yes</td>
                                             <td id="event23date" class="pt-3-half" contenteditable="true">26-JUL-18</td>
                                             <td>
                                                  <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                                             </td>
                                        </tr>
                                        <tr>
                                             <td id="event24" class="pt-3-half" contenteditable="true">Event 24</td>
                                             <td id="event24name" class="pt-3-half" contenteditable="true">50 M fly</td>
                                             <td id="event24type" class="pt-3-half" contenteditable="true">LC</td>
                                             <td id="event24heat" class="pt-3-half" contenteditable="true">8</td>
                                             <td id="event24promotetime" class="pt-3-half" contenteditable="true">No</td>
                                             <td id="event24seed" class="pt-3-half" contenteditable="true">lanes</td>
                                             <td id="event24relay" class="pt-3-half" contenteditable="true"></td>
                                             <td id="event24scoring" class="pt-3-half" contenteditable="true">Yes</td>
                                             <td id="event24date" class="pt-3-half" contenteditable="true">26-JUL-18</td>
                                             <td>
                                                  <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                                             </td>
                                        </tr>
                                        <tr>
                                             <td id="event25" class="pt-3-half" contenteditable="true">Event 25</td>
                                             <td id="event25name" class="pt-3-half" contenteditable="true">100 M fly</td>
                                             <td id="event25type" class="pt-3-half" contenteditable="true">LC</td>
                                             <td id="event25heat" class="pt-3-half" contenteditable="true">8</td>
                                             <td id="event25promotetime" class="pt-3-half" contenteditable="true">No</td>
                                             <td id="event25seed" class="pt-3-half" contenteditable="true">lanes</td>
                                             <td id="event25relay" class="pt-3-half" contenteditable="true"></td>
                                             <td id="event25scoring" class="pt-3-half" contenteditable="true">Yes</td>
                                             <td id="event25date" class="pt-3-half" contenteditable="true">26-JUL-18</td>
                                             <td>
                                                  <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                                             </td>
                                        </tr>
                                        <tr>
                                             <td id="event26" class="pt-3-half" contenteditable="true">Event 26</td>
                                             <td id="event26name" class="pt-3-half" contenteditable="true">4 x 50 M free</td>
                                             <td id="event26type" class="pt-3-half" contenteditable="true">LC</td>
                                             <td id="event26heat" class="pt-3-half" contenteditable="true">3</td>
                                             <td id="event26promotetime" class="pt-3-half" contenteditable="true">No</td>
                                             <td id="event26seed" class="pt-3-half" contenteditable="true">lanes/2</td>
                                             <td id="event26relay" class="pt-3-half" contenteditable="true">first</td>
                                             <td id="event26scoring" class="pt-3-half" contenteditable="true">Yes</td>
                                             <td id="event26date" class="pt-3-half" contenteditable="true">26-JUL-18</td>
                                             <td>
                                                  <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                                             </td>
                                        </tr>
                                        <tr>
                                             <td id="event27" class="pt-3-half" contenteditable="true">Event 27</td>
                                             <td id="event27name" class="pt-3-half" contenteditable="true">4 x 50 M medley</td>
                                             <td id="event27type" class="pt-3-half" contenteditable="true">LC</td>
                                             <td id="event27heat" class="pt-3-half" contenteditable="true">3</td>
                                             <td id="event27promotetime" class="pt-3-half" contenteditable="true">No</td>
                                             <td id="event27seed" class="pt-3-half" contenteditable="true">lanes/2</td>
                                             <td id="event27relay" class="pt-3-half" contenteditable="true">first</td>
                                             <td id="event27scoring" class="pt-3-half" contenteditable="true">Yes</td>
                                             <td id="event27date" class="pt-3-half" contenteditable="true">26-JUL-18</td>
                                             <td>
                                                  <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                                             </td>
                                        </tr>
                                        <tr>
                                             <td id="event28" class="pt-3-half" contenteditable="true">Event 28</td>
                                             <td id="event28name" class="pt-3-half" contenteditable="true">400 M free</td>
                                             <td id="event28type" class="pt-3-half" contenteditable="true">LC</td>
                                             <td id="event28heat" class="pt-3-half" contenteditable="true">8</td>
                                             <td id="event28promotetime" class="pt-3-half" contenteditable="true">No</td>
                                             <td id="event28seed" class="pt-3-half" contenteditable="true">lanes</td>
                                             <td id="event28relay" class="pt-3-half" contenteditable="true"></td>
                                             <td id="event28scoring" class="pt-3-half" contenteditable="true">Yes</td>
                                             <td id="event28date" class="pt-3-half" contenteditable="true">26-JUL-18</td>
                                             <td>
                                                  <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                                             </td>
                                        </tr>
                                        <tr>
                                             <td id="event29" class="pt-3-half" contenteditable="true">Event 29</td>
                                             <td id="event29name" class="pt-3-half" contenteditable="true">200 M free</td>
                                             <td id="event29type" class="pt-3-half" contenteditable="true">LC</td>
                                             <td id="event29heat" class="pt-3-half" contenteditable="true">8</td>
                                             <td id="event29promotetime" class="pt-3-half" contenteditable="true">No</td>
                                             <td id="event29seed" class="pt-3-half" contenteditable="true">lanes</td>
                                             <td id="event29relay" class="pt-3-half" contenteditable="true"></td>
                                             <td id="event29scoring" class="pt-3-half" contenteditable="true">Yes</td>
                                             <td id="event29date" class="pt-3-half" contenteditable="true">26-JUL-18</td>
                                             <td>
                                                  <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                                             </td>
                                        </tr>
                                   </table>
                                   </div>
                              </div>
                         </div>
                         <!-- Editable table -->          
                    </form>
               </div>
          </div>
     </body>
     
     <script>

     //     EDITTABLE TABLE
     var $TABLE = $('#table');
     var $BTN = $('#export-btn');
     var $EXPORT = $('#export');

     $('.table-add').click(function () {
          var $clone = $TABLE.find('tr.hide').clone(true).removeClass('hide table-line');
          $TABLE.find('table').append($clone);
     });

     $('.table-remove').click(function () {
          $(this).parents('tr').detach();
     });

     $('.table-up').click(function () {
          var $row = $(this).parents('tr');
          if ($row.index() === 1) return; // Don't go above the header
          $row.prev().before($row.get(0));
     });

     $('.table-down').click(function () {
          var $row = $(this).parents('tr');
          $row.next().after($row.get(0));
     });

     // A few jQuery helpers for exporting only
     jQuery.fn.pop = [].pop;
     jQuery.fn.shift = [].shift;

     $BTN.click(function () {
          var $rows = $TABLE.find('tr:not(:hidden)');
          var headers = [];
          var data = [];

          // Get the headers (add special header logic here)
          $($rows.shift()).find('th:not(:empty)').each(function () {
               headers.push($(this).text().toLowerCase());
          });

          // Turn all existing rows into a loopable array
          $rows.each(function () {
               var $td = $(this).find('td');
               var h = {};

               // Use the headers from earlier to name our hash keys
               headers.forEach(function (header, i) {
               h[header] = $td.eq(i).text();
               });

               data.push(h);
          });

          // Output the result
          $EXPORT.text(JSON.stringify(data));
     });

     // EDITTABLE TABLE

     // function imageFunction(){
     //     console.log("reacehd")
     // 	var source = document.getElementById("jn_logo").src;
     // 	var n = source.search("images");
     // 	var src = source.substring(n);
     // 	console.log(src);
     // 	document.getElementById("logo_source").value = src;
     // }

     // checks if data file exists, if success -> poppulate the form
     $(document).ready(function(){
          $.ajax({
               type: "GET",
               url: "masterData.csv",
               dataType: "text",
               success: function(data){populateForm(data);}
          });
     });

     // removes all the double quotes from the string that is passed as an argument
     function removeQuotes(text){
          return text.replace(/["]+/g, '');
     }

     function replaceComma(text){
          return text.replace(/[,]+/g, '\r\n')
     }

     // Function is triggered if there is an existing excel file,
     // the function takes all the data from the excel file and populates the form with respection values
     // and disables the fields
     function populateForm(data){
          var cols = 22;
          var lines = data.split(/\r\n|\n/);
          var colNames = lines[0].split(',');
          var info = lines[1].split(/,+(?=(?:(?:[^"]*"){2})*[^"]*$)/g);
          console.log(colNames);  // title of the columns
          console.log(info);      // corresponding value of the columns

          // -------------------- populating basic & additional information and disabling the attributes -------------------- //
          for(var i = 0; i <= 10; i++){
               var item = colNames[i];
               var value = info[i];
               var ele = document.getElementById(item);
               if(item == "meetSponsors" || item == "meetLOC"){
                    value = replaceComma(value);
               }
               value = removeQuotes(value);
               ele.disabled = true;
               ele.value = value;
          }

          // ------------------- checking either bib is selected or not and disabling both -------------------- //
          var value12 = info[12];
          document.getElementById('bibYes').disabled = true;
          document.getElementById('bibNo').disabled = true;
          if(value12 == 1){
               document.getElementById('bibYes').checked = true;
          }
          else{
               document.getElementById('bibNo').checked = true;
          }

          // -------------------- populating sports sections and disabling the attributes -------------------- //
          for(var i = 13; i <= 21; i++){
               var item = colNames[i];
               var value = info[i];
               var ele = document.getElementById(item);
               ele.disabled = true;
               if(value == 1){
                    ele.checked = true;
               }
          }

          // -------------------- disabling/enabling the buttons -------------------- //
          document.getElementById("half-right").disabled = true; // submit button
          document.getElementById("half-left").disabled = false; // update button

     }

     // when triggered enables all the form field to make it editable
     function enableSubmit(){

          var enableArray = [ 'meetName', 'shortName', 'startDate', 'endDate', 'meetCity', 'meetState', 
                              'meetDirector', 'meetHotel', 'meetSponsors', 'meetLOC', 'bibYes', 'bibNo',
                              'archery', 'fencing', 'field','swim', 'tableTennis', 'teams', 'track', 'weightlifting', 'other' ]

          // enabling all the attributes mentioned in the array,i.e., basic & addtional information and sports section
          for(var i = 0; i < enableArray.length; i++){
               document.getElementById(enableArray[i]).disabled = false;
          }

          // enabling/disbaling buttons
          document.getElementById("half-right").disabled = false; // submit button
          document.getElementById("half-left").disabled = true;   // update button
     }

     // function imageIsLoaded(e) {
     //     $('#jn_logo').attr('src', e.target.result);
     // };

     </script> 

</html> 
