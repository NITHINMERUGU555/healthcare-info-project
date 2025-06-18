<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars(trim($_POST["name"]));
    $email   = htmlspecialchars(trim($_POST["email"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    $entry = "Name: $name\nEmail: $email\nMessage: $message\n\n";
    file_put_contents("data/contact_submissions.txt", $entry, FILE_APPEND);
}
?>

<?php include('includes/header.php'); ?>
<main>
  <section>
    <h2>Thank you, <?php echo $name; ?>!</h2>
    <p>Your message has been successfully saved. We appreciate your feedback.</p>
    <p><a href="index.php">Return to Home Page</a></p>
  </section>
</main>
<?php include('includes/footer.php'); ?>


