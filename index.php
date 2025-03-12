<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project-Colab</title>
    <?php include('./client/commonfiles.php') ?>
</head>
<body>
    <?php
    session_start();
    include('./client/header.php');

    if (isset($_SESSION['message'])) {
        echo '<div class="alert alert-success" role="alert">' . $_SESSION['message'] . '</div>';
        unset($_SESSION['message']);
    }

    if(isset($_GET['signup']))
    {
        include('./client/signup.php');
    }

    if(isset($_GET['login']))
    {
        include('./client/login.php');
    }
    ?>

</body>
</html>