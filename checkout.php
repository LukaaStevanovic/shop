<?php require_once "inc/header.php";
      require_once "app/classes/Cart.php";
      require_once "app/classes/Order.php";
    
if(!$user->is_logged()){
    header('Location: login.php');
    exit();
}      

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $delivery_address = $_POST['country'] . ", ". $_POST['city'].
    ", " . $_POST['zip'].", ". $_POST['address'];

    $order = new Order();
    $order = $order->create($delivery_address);

    $_SESSION['message']['type'] = "success"; // danger ili success
        $_SESSION['message']['text'] = "Uspesno narucen proizvod!";
        header("Location: orders.php");
        exit();
}
?>

<div class="container">
        <form class="forma"action="" method="post">
            <div class="input-group">
                <label for="country">Drzava</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="input-group">
                <label for="city">Grad</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="input-group">
                <label for="zip">Postanski broj</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="input-group">
                <label for="address">Adresa</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit" class="btn">Order</button>
        </form>
    </div>


<?php require_once "inc/footer.php";?>