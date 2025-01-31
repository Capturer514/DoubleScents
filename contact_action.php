<>php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name=htmlspecialchars($_POST['name']);
    $email=htmlspecialchars($_POST['email']);
    $message=htmlspecialchars($_post['message']);

    echo "<h2>Thank you for contacting with us," . $name . "!</h2>"
    echo "<p>We will back to you soonly " .$email . ".</p>";
    echo "<p>Your message:</p>";
    echo "<pre>" .$message . "</pre>";
} else {
    echo "<h2>Error: Invalid request method</h2>"
}
?>
