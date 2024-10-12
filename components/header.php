<?php
require 'database.php';
if (isset($_SESSION['user-id'])) {
    $id = filter_var($_SESSION['user-id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT avatar FROM users WHERE id=$id";
    $result = mysqli_query($connection, $query);
    $avatar = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universe Blogging Platform</title>

    <link rel="stylesheet" href="<?= ROOT_URL ?>/assets/style.css">
    <!-- <link rel="stylesheet" href="<?= ROOT_URL ?>/assets/styles.css"> -->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/all.css">
    <!-- <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"> -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="nav_container">
        <nav>
            <a href="<?= ROOT_URL ?>" class="nav_logo">
                <!-- <img src="<?= ROOT_URL ?>/assets/images/logo.png" alt="Logo" class="logo_image"> -->
                <i class="fa-light fa-planet-ringed"></i>
                Universe
            </a>

            <ul class="nav_items" id="nav_items">
                <li><a href="<?= ROOT_URL ?>/posts/post_page.php">Home</a></li>
                <li><a href="<?= ROOT_URL ?>/about.php">About</a></li>
                <li><a href="<?= ROOT_URL ?>/contact.php">Contact</a></li>
                <li>
                    <form action="<?= ROOT_URL ?>/search.php" method="GET" class="search_form" style="display: flex; align-items: center;">
                        <input
                            class="searchbar"
                            type="text"
                            name="search"
                            placeholder="Search blog posts..."
                            required
                            value="<?= isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '' ?>">
                        <button
                            class="search_button"
                            type="submit"
                            name="submit"
                            class="search_button">
                            <i class="fa-light fa-magnifying-glass"></i>
                        </button>
                    </form>
                </li>
            </ul>

            <?php if (isset($_SESSION['user-id'])): ?>
                <div class="nav_profile">
                    <!-- <div class="avatar" id="profileDropdown"> -->
                    <!-- Display avatar image if available, otherwise show a default avatar -->
                    <img src="<?= ROOT_URL ?>/user/propic/smiling-young-man-illustration_1308-173524.jpg" alt="Avatar">


                    <!-- </div> -->
                    <ul class="dropdown">
                        <li><a href="<?= ROOT_URL ?>/admin/admin_dashboard.php">Dashboard</a></li>
                        <li><a href="<?= ROOT_URL ?>/user/logout.php" style="color: red;">Logout</a></li>
                    </ul>
                </div>
            <?php else: ?>
                <a class="signin" href="<?= ROOT_URL ?>/user/login.php">Sign In</a>
            <?php endif; ?>
        </nav>
    </div>
</body>

</html>