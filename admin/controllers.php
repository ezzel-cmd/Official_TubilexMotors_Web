<?php
include "conection.php";

$action = $_GET['action'] ?? '';
// $_SERVER['REQUEST_METHOD'] == 'POST' ? $_POST : $_GET;

switch ($action) {
    case 'register':
        registerUser();
        break;
    case 'login':
        loginUser();
        break;
    case 'logout':
        logout();
        break;
    default:
        echo "action not found";
        exit;
}


function registerUser()
{
    // $id = $_POST['id'];
    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $conn = connectToDatabase();
    $sql  = "INSERT INTO admin (username, email, password) VALUES (:username, :email, :hash)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        ':username' => $username,
        ':email'    => $email,
        ':hash'     => $hash
    ]);
    header("Location: index.php");
}


function loginUser()
{
    $email    = $_POST['email'];
    $password = $_POST['password'];
    $conn = connectToDatabase();
    $sql  = "SELECT id, password FROM admin WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->execute([':email' => $email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user['id'];
        header("Location: dashboard.php"); // redirect to dashboard
        exit;
    } else {
        header("Location: login.php?error=invalid"); // redirect back on failure
        exit;
    }
}

function logout()
{
    session_unset();
    session_destroy();
    header("Location: /index.php");
}

//$_POST
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     if (isset($_POST['register'])) {
//         registerUser();
//     } else if (isset($_POST['login'])) {
//         loginUser();
//     }
// }
// var_dump($_SESSION);
