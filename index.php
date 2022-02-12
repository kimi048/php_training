<?php

if(
  isset($_POST['name']) && isset($_POST['lastname']) && isset($_POST['password'])
  ){
    if(!empty($_POST['name']) && !empty($_POST['lastname']) && !empty($_POST['password'])){
      $name=$_POST['name'];
      $lastname=$_POST['lastname'];
      $password=$_POST['password'];
      echo "The following data will go to DB: ".$name." ".$lastname." password=".$password;
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
  <form method="POST" action="global.php">
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
      <label>Password:</label><br/>
      <input type="text" name="password">
      <br/>
    </div>
    <button type="submit">Submit</button>
  </form>
  
<?php

echo "<pre>",print_r($GLOBALS),"</pre>"

?>
</body>

</html>

