<?php
// signup.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // input gula receive
    $firstName = $_POST['first_name'] ?? '';
    $surname   = $_POST['surname'] ?? '';
    $day       = $_POST['day'] ?? '';
    $month     = $_POST['month'] ?? '';
    $year      = $_POST['year'] ?? '';
    $gender    = $_POST['gender'] ?? '';
    $contact   = $_POST['contact'] ?? '';
    $password  = $_POST['password'] ?? '';

    // normally ekhane validation + database insert hobe

    echo "<h2>Signup data received (UIUbook demo)</h2>";

    echo "<p><strong>Name:</strong> " . htmlspecialchars($firstName . ' ' . $surname) . "</p>";
    echo "<p><strong>Date of birth:</strong> " . htmlspecialchars("$day $month $year") . "</p>";
    echo "<p><strong>Gender:</strong> " . htmlspecialchars($gender) . "</p>";
    echo "<p><strong>Contact:</strong> " . htmlspecialchars($contact) . "</p>";
    echo "<p><strong>Password:</strong> " . htmlspecialchars($password) . "</p>";

    echo '<p><a href="signup.html">Back to sign up</a></p>';
    echo '<p><a href="index.html">Go to login</a></p>';
} else {
    // direct url diye gele signup page e pathai dibo
    header('Location: signup.html');
    exit;
}
?>
