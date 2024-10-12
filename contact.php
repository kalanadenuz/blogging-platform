<link rel="stylesheet" href="assets/styles.css">
<?php
include 'components/header.php';
?>

<section class="contact">
    <h1 class="contact_heading">Contact Us</h1>
    <div class="contact_container">

        <?php
        

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = mysqli_real_escape_string($connection, $_POST['name']);
            $email = mysqli_real_escape_string($connection, $_POST['email']);
            $message = mysqli_real_escape_string($connection, $_POST['message']);

            $query = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";
            $result = mysqli_query($connection, $query);

            if ($result) {
                echo "<p class='success_message'>Message sent successfully!</p>";
            } else {
                echo "<p class='error_message'>Error: " . mysqli_error($connection) . "</p>";
            }

            mysqli_close($connection);
        }
        ?>

        <p class="contact_description">
            We’d love to hear from you! Please fill out the form below, and we will get back to you as soon as possible.
        </p>
        <form class="contact_form" class="form" action="" method="POST">
            <input type="text" name="name" placeholder="Your Name" required class="contact_input">
            <input type="email" name="email" placeholder="Your Email" required class="contact_input">
            <textarea name="message" placeholder="Your Message" required class="contact_textarea"></textarea>
            <button class="btn" type="submit" class="contact_button">Send Message</button>
        </form>
    </div>
</section>

<?php
include 'components/footer.php';
?>
