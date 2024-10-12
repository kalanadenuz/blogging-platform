<?php

require 'constants.php';
//get back form data if there was a registration error
$firstname = $_SESSION['signup-data']['firstname'] ?? null; //??null if data in not entered it is considered to be null
$lastname = $_SESSION['signup-data']['lastname'] ?? null;
$username = $_SESSION['signup-data']['username'] ?? null;
$email = $_SESSION['signup-data']['email'] ?? null;
$createpassword = $_SESSION['signup-data']['createpassword'] ?? null;

$confirmpassword = $_SESSION['signup-data']['confirmpassword'] ?? null;
//delete signup data session
unset($_SESSION['signup-data']);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Blog Website</title>

    <link rel="stylesheet" href="<?= ROOT_URL ?>/assets/style.css">
    <!-- <link rel="stylesheet" href="<?= ROOT_URL ?>/assets/styles.css"> -->
    <!-- <link rel="stylesheet" href="style.css"> -->
    <!-- <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"> -->
    <!-- <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/all.css"> -->

    <!-- <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet"> -->

</head>

<body>

    <!-- <section class="form_section"> -->
        <div class="container form_section_container">
            <h2>Create Your Account</h2>
            <h3>
                <sup><i class="fa-solid fa-quote-left"></i></sup>
                Where your ideas meet the world
                <sup><i class="fa-solid fa-quote-right"></i></sup>
            </h3>
            <?php if (isset($_SESSION['signup'])):  ?>

                <div class="alert_message error">
                    <p>
                        <?= $_SESSION['signup'];
                        unset($_SESSION['signup']);
                        ?>
                    </p>
                </div>
            <?php endif ?>

            <form action="<?= ROOT_URL ?>/user/register_logic.php" enctype="multipart/form-data" method="POST">
                <div class="input_group">
                    <div class="input_flex_group">
                        <input type="text" name="firstname" value="<?= $firstname ?>" placeholder="First Name">
                        <input type="text" name="lastname" value="<?= $lastname ?>" placeholder="Last Name">
                    </div>
                    <input type="text" name="username" value="<?= $username ?>" placeholder="Username">
                    <input type="email" name="email" value="<?= $email ?>" placeholder="Email">
                    <div class="input_flex_group">
                        <input type="password" name="createpassword" value="<?= $createpassword ?>" placeholder="Create password">
                        <input type="password" name="confirmpassword" value="<?= $confirmpassword ?>" placeholder="Confirm password">
                    </div>
                    <div>
                        <label for="avatar" class="avatar">Choose your avatar</label>
                        <input type="file" name="avatar" value="<?= $avatar ?>" id="avatar">
                    </div>
                </div>
                <button type="submit" name="submit" class="btn">Sign Up</button>
                <small>Already have an account?<a href="login.php"> Sign In </a></small>
            </form>
        </div>
    <!-- </section> -->
</body>

</html>