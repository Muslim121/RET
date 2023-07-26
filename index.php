<?php // Example 04: index.php
  session_start();
  require_once 'header.php';

  echo "<div class='center'>Welcome to MyNest!";

  if ($loggedin) echo " $user, вы вошли в аккаунт";
  else           echo ' Создайте или войдите в аккаунт';

  
?>