<?php

include 'conection.php';

// create Admin Account
if ($conn) {
    $hash = password_hash('4321', PASSWORD_DEFAULT);
    $username = 'epro creativ';
    $email = 'tb99@gmail.com';
    $role = 'admin';
    $sql = "INSERT INTO admin ( username, email, password, role) VALUES ('$username','$email', '$hash', '$role')";
    $stmt = $conn->prepare($sql);
    try {
        $exc = $stmt->execute();
        echo "Admin Account Created Successfully";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Database Connection Failed";
}
