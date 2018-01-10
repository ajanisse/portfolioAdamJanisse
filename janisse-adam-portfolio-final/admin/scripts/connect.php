<?php
  // This scrept will connect us to our database
  $user = "root";
  $pass = "";  //windows
  //$pass = "root"; for macs
  $url = "localhost"; //for win and macs
  $db = "db_movies";

//ticket to access our db
  $link = mysqli_connect($url, $user, $pass, $db); //windows
  //MAMP $link = mysqli_connect($url, $user, $pass, $db, "8889"); //Mac

  //Check connection if it fails
  if(mysqli_connect_errno()){
       printf("Connection failed: %s\n", mysqli_connect_error());
    exit();
  }
?>
