<!DOCTYPE html>
<html>
<body>    
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize form input
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // Display the submitted data
    echo "<h2>Contact Form Received</h2>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Message:<br>" . nl2br($message);
} else {
    echo "Form not submitted.";
}
?>
</body>
</html>