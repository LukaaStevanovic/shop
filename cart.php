<?php require_once "inc/header.php";
      require_once "app/classes/Cart.php";
    
if(!$user->is_logged()){
    header('Location: login.php');
    exit();
}      
$cart = new Cart();
$cart_items = $cart->get_cart_items();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&family=Open+Sans&display=swap" rel="stylesheet">
    <!-- prva tri linka su dodati fontovi -->
    <link rel="stylesheet" href="public/pc-style.css">
    <link rel="stylesheet" href="public/tablet-style.css">
    <link rel="stylesheet" href="public/landscape-mobile-style.css">
    <link rel="stylesheet" href="public/mobile-style.css">
    <link rel="stylesheet" href="public/nav.css">
    <!-- linkovani css fajlovi -->
    <link rel="shortcut icon" href="public/slike/logo3 (2).png" type="image/x-icon">
    <title>Cart</title>
</head>
<body>
    <header>
       
    </header>
    <section class="secondary-hero-section">
        <div class="container">
            <h1 class="hero-heading">Cart</h1>
            <div class="heading-underline4"></div>
        </div>
    </section>

    <table>
        <thead>
            <tr>
                <th>Product name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($cart_items as $item):?>
                <tr>
                    <td><?=$itemp['name'];?></td>
                    <td>$<?=$itemp['price'];?></td>
                    <td><?=$itemp['quantity'];?></td>
                    <td><img src="<?=$itemp['image'];?>"</td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
    <a href="checkout.php">Checkout</a>
    <?php require_once "inc/footer.php"; ?>
</body>
</html>