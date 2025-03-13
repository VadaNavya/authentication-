<?php

// Check if username or email already exists
function check_user_exists($pdo, $username, $email) {
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username OR email = :email");
    $stmt->execute(['username' => $username, 'email' => $email]);
    return $stmt->fetch(); // Return user data if exists
}

// Hash password
function hash_password($password) {
    return password_hash($password, PASSWORD_BCRYPT); // Use bcrypt hashing
}

// Verify password against hashed password
function verify_password($password, $hashed_password) {
    return password_verify($password, $hashed_password); // Verify the password
}
?>
