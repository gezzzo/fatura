<?php
    include 'lib.php';
    session_start();
    $show = ShowNewlettersss();
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        
        
        // Assign variables
        $name = filter_var($_POST['name'],FILTER_SANITIZE_STRING);
        $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
        $password = filter_var($_POST['password'],FILTER_SANITIZE_STRING);
        $newsletter_tiers = $_POST['newsletter_tiers'];
        $behance = $_POST['behance'];
        // Errors
        $errors = [];

        // if (strlen($name) < 3 || empty($name)) {
        //     $errors[]="The name is invailed";
        // }
        // if ( empty($password)) {
        //     $errors[]="The password is invailed";
        // }
        
        if (empty($errors)) {
            AddNewUser($name,$email,$password,$newsletter_tiers,$behance);
            $res = loginuser($email,$password);
          if (!empty($res)) {
              $_SESSION['user'] = $res;
              header("LOCATION:home.php");
          }
        }
        else{
            header("LOCATION:index.php");
        }



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

           <!-- Show All Errors -->
            <?php if (!empty($errors)): ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-bottom: 10px;">
                        <?php foreach ($errors as $error): ?>
                            <li> <?= $error ?> </li>
                        <?php endforeach; ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
            <?php endif; ?>
                <div class="form-group">
                    <input class="form-control name" type="text" name="name" placeholder="Your name" 
                    value="<?php if (isset($name)){echo $name;} ?>" required>
                    <i class="fa fa-user fa-fw"></i>
                </div>
                
                <input class="form-control email" type="email" name="email" placeholder="Your email" value="<?php if (isset($email)){echo $email;}?>" required>
                <i class="fa fa-mail-bulk fa-fw"></i>
                <input class="form-control password" type="password" name="password" placeholder="Your password" value="<?php if (isset($password)){echo $password;}?>" required>
                <i class="fa fa-key fa-fw"></i>
            <div class="form-groug">
                <label for="pay">Choose a pay:</label>

                <select name="behance" id="pay">
                    <option value="credit_card">credit card</option>
                    <option value="cash">cash</option>
                </select>
            </div>
            <div class="form-groug">
                <label for="cars">Choose a pay:</label>

                <select name="newsletter_tiers" id="cars">
                <?php foreach ($show as $s): ?>
                    <option value="<?= $s['name'] ?>"><?= $s['name'] ?> : <?= $s['price'] ?> $</option>
                    <?php endforeach; ?>
                </select>
            </div>
                <input class="btn btn-success sub" type="submit" value="send">
            </form>
            <a href="login.php" class="text-center">I already have a membership</a>
        <!--    end form-->
        </div>
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html> 