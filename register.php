<?php
require_once "app/config/config.php"; 
require_once  "app/classes/user.php";
$user = new User();

if ($user ->is_logged()) {
    header("Location: index.php");
    exit();
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];


    $created = $user->create($name, $username, $email,$password);

    if($created) {
        $_SESSION['message']['type'] = "success"; // danger ili success
        $_SESSION['message']['text'] = "Uspesno ste se registrovali!";
        header("Location: index.php");
        exit();
    }else{
        $_SESSION['message']['type'] = "danger"; // danger ili success
        $_SESSION['message']['text'] = "Greska";
        header("Location: index.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registracija</title>
    <link rel="stylesheet" href="public/style.css">
</head>
<body>
    <div class="container">
        <form class="forma"action="" method="post">
            <h2>Registracija</h2>

            <div class="input-group">
                <label for="fullname">Full Name</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="input-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit" class="btn">Register</button>
        </form>
    </div>
</body>
</html>

