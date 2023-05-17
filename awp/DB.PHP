<?php

$connection = mysqli_connect("localhost","root","teja");

if($connection){
  echo "Database connected";

}else{
   die("connection Failed");
}
?>