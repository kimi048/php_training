<?php

// $date=date("d/m/y");
// $date=date("d/m/Y");
$date=date("h:i:s-l");
$strtotime=strtotime("tomorrow");
$date2=date("d/m/y h:i:s a",$strtotime);

echo $date2;

?>