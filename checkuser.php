<?php // Example 06: checkuser.php
  require_once 'functions.php';

  if (isset($_POST['user']))
  {
    $user   = sanitizeString($_POST['user']);
    $result = queryMysql("SELECT * FROM members WHERE user='$user'");

    if ($result->rowCount())
      echo  "<span class='taken'>&nbsp;&#x2718; " .
            "Имя - '$user' недоступно</span>";
    else
      echo "<span class='available'>&nbsp;&#x2714; " .
           "Имя - '$user' доступно</span>";
  }
?>