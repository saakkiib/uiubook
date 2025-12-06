<?php
// login.php

// form submit hoise kina check
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // input field theke data nicchi
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // normally ekhane database check thakbe.
    // ekhon practice er jonno sudhu simple message dekhabo.

    // very simple demo check: just dekhabo user ki likheche
    echo "<h2>Form received</h2>";
    echo "<p><strong>Email/Phone:</strong> " . htmlspecialchars($email) . "</p>";
    echo "<p><strong>Password:</strong> " . htmlspecialchars($password) . "</p>";
    echo '<p><a href="index.html">Go back to login page</a></p>';
} else {
    // jodi directly login.php te ashe then user ke abar form e pathiye dibo
    header('Location: index.html');
    exit;
}
?>
