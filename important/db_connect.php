<?php
$conn = new mysqli("localhost","root","","firsttable");

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}else{
    // $msg = "connect";
    // echo $msg;
}
?>