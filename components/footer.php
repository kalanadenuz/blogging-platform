<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT_URL ?>/assets/styles.css">
    <title>Your Website Title</title> <!-- Optional: Add a title -->
</head>

<body>

    <footer>
        <div class="footer_socials">
            <a href="https://www.youtube.com/channel/YOUR_CHANNEL_ID" target="_blank">
                <img src="https://img.icons8.com/?size=100&id=19318&format=png&color=000000" alt="YouTube" width="40px">
            </a>
            <a href="https://www.facebook.com/YOUR_PAGE" target="_blank">
                <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook" width="40px">
            </a>
            <a href="https://twitter.com/YOUR_PROFILE" target="_blank">
                <img src="https://img.icons8.com/?size=100&id=13963&format=png&color=000000" alt="Twitter" width="40px">
            </a>
            <a href="https://www.instagram.com/YOUR_PROFILE" target="_blank">
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram" width="40px">
            </a>
        </div>

        <div class="footer_container">
            <div>
                <article class="link_section">
                    <h4>Categories</h4>
                    <ul>
                        <li><a href="<?= ROOT_URL ?>/category_post.php?category=technology">Technology</a></li>
                        <li><a href="<?= ROOT_URL ?>/category_post.php?category=productivity">Productivity</a></li>
                        <li><a href="<?= ROOT_URL ?>/category_post.php?category=lifestyle">Lifestyle</a></li>
                        <li><a href="<?= ROOT_URL ?>/category_post.php?category=food">Food</a></li>
                        <li><a href="<?= ROOT_URL ?>/category_post.php?category=fashion">Fashion</a></li>
                    </ul>
                </article>
                <article class="link_section">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="<?= ROOT_URL ?>/index.php">Online Support</a></li>
                        <li><a href="<?= ROOT_URL ?>/index.php">Call Numbers</a></li>
                        <li><a href="<?= ROOT_URL ?>/index.php">Emails</a></li>
                        <li><a href="<?= ROOT_URL ?>/index.php">Social Support</a></li>
                        <li><a href="<?= ROOT_URL ?>/index.php">Location</a></li>
                    </ul>
                </article>
                <article class="link_section">
                    <h4>Blog</h4>
                    <ul>
                        <li><a href="<?= ROOT_URL ?>/index.php">Recent</a></li>
                        <li><a href="<?= ROOT_URL ?>/index.php">Popular</a></li>
                        <li><a href="<?= ROOT_URL ?>/category_post.php">Categories</a></li>
                    </ul>
                </article>
                <article class="link_section">
                    <h4>Permalinks</h4>
                    <ul>
                        <li><a href="<?= ROOT_URL ?>">Home</a></li>
                        <li><a href="<?= ROOT_URL ?>/posts/post_page.php">Blog</a></li>
                        <li><a href="<?= ROOT_URL ?>/about.php">About</a></li>
                        <li><a href="<?= ROOT_URL ?>/contact.php">Contact</a></li>
                    </ul>
                </article>
            </div>
        </div>
        <div class="footer_copyright">
            <small>
                Copyright &copy; KDU FOC Intake 41
            </small>
        </div>
    </footer>

    <script src="<?= ROOT_URL ?>assets/scripts.js"></script>
</body>

</html>