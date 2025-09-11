<?php

session_start();


function connectToDatabase()
{
    $host = "localhost";
    $user = "root";
    $pass = "Ezzel@123456789";
    $dbName = "tbmotors_db";

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbName", $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        exit;
    }
    return $conn;
}

$conn = connectToDatabase();
