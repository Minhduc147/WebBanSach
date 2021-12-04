<?php

$mysqli = new mysqli("localhost","root","","webbansach");

// Check connection
if ($mysqli->connect_errno) {
  echo "kết nối MYSQLi lỗi " . $mysqli->connect_error;
  exit();
}
?>