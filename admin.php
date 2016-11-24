<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php

      if (!isset($_COOKIE["is_admin"]))
      {
        setcookie("is_admin", "false");
        $_COOKIE["is_admin"]="false";
      }

      if ($_COOKIE["is_admin"] != "true")
      {
        echo "<h2>Вы не админ. Говорят, наш админ любит печенье...</h2>";
        echo '<center><img src="images/biscuit.jpg"></center>';
      }
      else
      {
        echo "<h2>Поздравляем! Вы дошли до конца нашего мегаквеста!</h2>";
        echo  '<div class="flag">flag{ctf_is_really_fun}</div>';
      }

    ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
