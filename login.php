<?php
    require_once 'app/classes/user.php';
    require_once "app/config/config.php"; 
    $user = new User();

if ($user ->is_logged()) {
    header("Location: index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $user = new User();
    $result = $user->login($username, $password);

    if(!$result){
        $_SESSION['message']['type'] = "danger";
        $_SESSION['message']['text'] = "Netacan username ili lozinka!";

        header("Location: login.php");
        exit();
    }

    header("Location: index.php");
    exit();
}
?>
</div>
<div class="container">
<link rel="stylesheet" href="public/style_login.css">
        <form action="" method="post">
            <h2>Login</h2>
            <div class="input-u">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" id="username">
            </div>
            <div class="input-u">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" id="password">
            </div>
            <button type="submit" class="btn_log">Login</button>
        </form>
        <a href="register.php">Register</a>
    </div>


