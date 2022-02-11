<?php

if(
  isset($_GET['name']) && isset($_GET['lastname']) && isset($_GET['age'])
  ){
    if(!empty($_GET['name']) && !empty($_GET['lastname']) && !empty($_GET['age'])){
      $name=$_GET['name'];
      $lastname=$_GET['lastname'];
      $age=$_GET['age'];
      echo "The following data will go to DB: ".$name." ".$lastname." age=".$age;
    }
}
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
  <form>
    <div>
      <label>Name:</label><br/>
      <input type="text" name="name">
      <br/>
    </div>
    <div>
      <label>Lastname:</label><br/>
      <input type="text" name="lastname">
      <br/>
    </div>
    <div>
      <label>Age:</label><br/>
      <input type="number" name="age">
      <br/>
    </div>
    <button type="submit">Submit</button>
  </form>
  
<?php

echo "<pre>",print_r($GLOBALS),"</pre>"

?>
</body>

</html>

