<?php

session_start();
include 'lib.php';

if (empty($_SESSION["user"])) {
    if (isset($_POST["email"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $res = loginUser($email,$password);

        if (!empty($res)) {
            $_SESSION['user'] = $res;
            header("LOCATION:home.php");
        }
        else{
            $error = "email or password are incorrect";

        }

    }
}
else{
    header("LOCATION:home.php");

}

?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Contact Form</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,200;0,300;0,400;0,700;0,900;1,200;1,900&display=swap" rel="stylesheet">
    </head>
    <body style="background-color:#f1f1f1;">
        <div class="container">
            <h1 class="text-center" style="font-family: 'Raleway', sans-serif;font-weight:900;
            padding-top:10px;font-size:50px;color:#757575">Fatura</h1>
            <h1 class="text-center" style="font-family: 'Raleway', sans-serif;font-weight:900;
            padding-top:10px;font-size:50px;color:#757575">subscribe</h1>
        <!--    start form-->
        
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="form">

                
                <input class="form-control email" type="email" name="email" placeholder="Your email" value="<?php if (isset($email)){echo $email;}?>" required>
                <i class="fa fa-mail-bulk fa-fw"></i>
                <input class="form-control password" type="password" name="password" placeholder="Your password" required>
                <i class="fa fa-key fa-fw"></i>
                <input class="btn btn-success sub" type="submit" value="send">
            </form>
        <!--    end form-->
        </div>
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html> 