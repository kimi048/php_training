<?php
date_default_timezone_set('Asia/Tokyo');


$expiration = time() +  (86400*30);
setcookie("KIMI","the value of the cookie",$expiration,"/basics");




if(isset($_COOKIE["KIMI"])){
  echo $_COOKIE["KIMI"]."<br/>";
}
// echo time();
echo "<pre>",print_r($GLOBALS),"</pre>";
?>