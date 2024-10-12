<?php
require 'constants.php';


$username_email = $_SESSION['signin-data']['username_email'] ?? null;
$password = $_SESSION['signin-data']['password'] ?? null;
unset($_SESSION['signin-data']);

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Multipage Blog Website</title>

    <link rel="stylesheet" href="<?= ROOT_URL ?>/assets/style.css">
    <!-- <link rel="stylesheet" href="<?= ROOT_URL ?>/assets/kalana_style.css"> -->
    <!-- <link rel="stylesheet" href="./style.css"> -->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/all.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet"> -->

</head>

<body>
    <!-- <section class="form_section"> -->
    <div class="container form_section_container">
        <h2>Welcome Back</h2>
        <h3>
            <sup><i class="fa-solid fa-quote-left"></i></sup>
            Step in, share your world
            <sup><i class="fa-solid fa-quote-right"></i></sup>
        </h3>
        <?php if (isset($_SESSION['signup-success'])) : ?>
            <div class="alert_message success">
                <p>
                    <?= $_SESSION['signup-success'];
                    unset($_SESSION['signup-success']);
                    ?>
                </p>
            </div>

        <?php elseif (isset($_SESSION['signin'])): ?>

            <div class="alert_message error">
                <p>
                    <?= $_SESSION['signin'];
                    unset($_SESSION['signin']);
                    ?>
                </p>
            </div>

        <?php endif ?>
        <form action="<?= ROOT_URL ?>/user/login_logic.php" method="POST">
            <div class="input_group">
                <input type="text" name="username_email" value="<?= $username_email ?>" placeholder="Username or Email">
                <input type="password" name="password" value="<?= $password ?>" placeholder="Password">
            </div>
            <button type="submit" name="submit" class="btn">Sign In</button>
            <small>Don't have an account?<a href="register.php"> Sign Up</a></small>
        </form>
    </div>
    <!-- </section> -->
</body>

</html>