<?php

$file = fopen("data.csv", 'r') or die("Unable to open file!"); // Opens the file, or returns error


$out=<<<EOD
<table class="table">
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
    for($i=0; $i<count($data); $i++){
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
    <td><p class="text-center"><button type="button" class="btn btn-success">Info</button></p></td>
  </tr>
EOD;

    // echo $row;
    $out.=$row;
    echo "<br/>";
}

$out.=<<<EOD
    </tbody>
</table>
EOD;
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    
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
        .col {
            border: 5px;
            border-color: black
            
        }

        .nopadding {
        padding: 1px !important;
        margin: 0 !important;
        }

        .list-group-item{
            padding: 0px;
        }


         

        
        
    </style>
    
    </head>
    <body>  
        <?php

        echo $out;

        ?>
    </body>
</html>
<script>
