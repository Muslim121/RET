<?php // Example 12: logout.php
  require_once 'header.php';

  if (isset($_SESSION['user']))
  {
    destroySession();
    echo "<br><div class='center'>Вы вышли из аккаунта.
         <a data-transition='slide'
           href='index.php?r=$randstr'>Нажмите сюда, чтобы продолжить!</a>
           </div>";
  }
  else echo "<div class='center'>Вы не можете выйти из системы, потому
  что вы не вошли в систему</div>";
?>
    </div>
  </body>
</html>