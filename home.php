<?php 

session_start();
include 'lib.php';

if (empty($_SESSION["user"])) {
    header("LOCATION:index.php");
}
else{
    $ss = ShowNewletters();
    $m = $_SESSION["user"]["newsletter_tiers"];
    $sh = ShowNewletter($m);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    }

    td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    }

    tr:nth-child(even) {
    background-color: #dddddd;
    }
    </style>
</head>
<body>
<a href="logout.php">Logout</a>
<a href="unsubscripe.php">unsubscripe</a>
<!-- <a href="updateportfolio.php?id=<?=  $portfolio['id'] ?>"> -->
<h2>newsletter</h2>

<table>
<tr>
        <th>title</th>
        <th>description</th>
</tr>


    <?php foreach($ss as $s): ?>
    <tr>
        <td><?= $s["title"] ?></td>
        <td><?= $s["description"] ?></td>
    </tr>
  <?php endforeach; ?>
</table>

</body>
</html>
    
</body>
</html>