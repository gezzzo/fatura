<?php 
session_start();
include 'lib.php';


if (isset($_POST["username"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $res = loginadmin($username,$password);

        if (!empty($res)) {
            $_SESSION['admin'] = $res;
            header("LOCATION:dashboard.php");
        }
        else{
            $error = "username or password are incorrect";

        }

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log in</title>

</head>
<body>
<form action="login.php" method="post">
        <?php if(isset($error)):?>
            <?= $error ?>
        <?php endif;?>
          <input type="text" class="form-control" placeholder="username" name = "username" >
          <input type="password" class="form-control" placeholder="Password" name = "password" >
            <input type="submit" class="btn btn-primary btn-block">
      </form>
</body>
</html>