<?php
$goofie="goofie"
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  



<?php

// echo "kimikimi";
$cars = array("Nissan", "Toyota", "VW");
$colors = array("red", "green", "blue", "yellow");
foreach($cars as $key =>$value ){
  print($key." : ".$value."<br>");
}
echo count($cars)."<br>";
echo "Hello ".$goofie;
?>
</body>
<script>
const newUser='<?php echo $goofie?>';
console.log(newUser);
</script>
</html>

