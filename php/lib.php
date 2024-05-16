<?php

function convertToMD5($string) {
  $hashedString = hash('md5', $string);
  return $hashedString;
}
function connectDB()
{
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "gazaDB";
  return new mysqli($servername, $username, $password, $dbname);
}
function getRandomString($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = "";
    for ($i = 0; $i < $length; $i++) {
      $randomIndex = mt_rand(0, strlen($characters) - 1);
      $randomString .= $characters[$randomIndex];
    }
    return $randomString;
  }
function gePageHtml($path,$string,$found)
{
  echo '<script>';
  if(!$found){
  echo 'alert("'.$string.'");';
  }
  echo 'window.location.href = "'.$path.'";';
  echo '</script>';
}
  
    
?>