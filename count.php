<?php
date_default_timezone_set('Asia/Tokyo');

// $c = date("d-m-y h:i:s a",strtotime("now"));
// $promotionTime = date("d-m-y h:i:s a",strtotime("tomorrow 11:48:20 pm"));

// echo $currentTime."<br/>";
// echo $promotionTime."<br/>";


$currentTime = date_create('now');
$promotionTime = date_create('today 01:30:20 am');
$date_diff = date_diff($currentTime, $promotionTime);

// print_r($currentTime);
// print_r($promotionTime);
print_r($date_diff);

$days = $date_diff->format('%a');
$hours = $date_diff->format('%h');
$minutes = $date_diff->format('%i');
$seconds = $date_diff->format('%s');

// echo $hours;

if($currentTime <= $promotionTime){
  echo "<h1>".$days."days".$hours."hours".$minutes."min".$seconds."sec remaining"."</h1>";
}else{
  echo "<h1>Promotion started!!</h1>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="refresh" content="1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>