<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
      <link href="css/name.css" rel="stylesheet">
      <link rel="shortcut icon" href="favicon.ico" />
    <title>top Score </title>
</head>
<body>
  <h1>hall of fame:</h1>
    <button><h4>top 5 </h4></button>

  <h2 style="margin-left:33%;">ID:</h2>
  <h2>Name:</h2>
  <h2 >Score:</h2>
  
<?php
$dbhost = "localhost";
$dbuser = 'root';

$dbpass = '';
$dbname = "mygame";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
$topScore = array();;

if(! $conn ) {
   die('Could not connect: ' . mysqli_error());
}

$sql2="SELECT score,name from gametable ORDER BY score DESC";
$result = $conn->query($sql2);
    $scores = array();
    if ($result->num_rows > 0) {
      $flag=1;

        while($row = $result->fetch_assoc()) {

            $temp['name'] =  $row["name"];
            $temp['score'] =  $row["score"];

            array_push($scores, $temp);
           if($flag<=5){

             echo "<h3 style='margin-left:33%;'>";
             echo "$flag";
             echo "</h3>";
             echo "<h3>";
             echo $row["name"];
             echo "</h3>";
             echo "<h3>";
             echo $row["score"];
             echo "</h3>";
       }
       $flag=$flag+1;
        }
    } else {
        echo "0 results";
    }

mysqli_close($conn);
?>
  <a href="index.html"><button class="ok" ><h4>ok </h4></button><a>
</body>
</html>