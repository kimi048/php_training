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