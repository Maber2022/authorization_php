<?php

header('Content-Type: text/html; charset=utf-8');

$mysqli = mysqli_connect("localhost", "ztjsifmb_learn", "12345", "ztjsifmb_learn");
if ($mysqli == false) {
  print("error");
} else {

  $email = trim(mb_strtolower($_POST["email"]));
  $pass = trim($_POST["password"]);

  $result = $mysqli->query("SELECT `pass` FROM `users` WHERE `email`='$email'");
  $result = $result->fetch_row();

  if ($pass==$result[0]) {
    echo "ok";
  } else {
    echo "not_found";
  }
}