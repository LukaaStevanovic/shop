<?php 
require_once "inc/header.php";
require_once "app/classes/Product.php";
require_once "app/classes/Cart.php";

$product = new Product();
$product = $product->read($_GET['product_id']);

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $product_id = $product['product_id'];

    $user_id = $_SESSION['user_id'];

    $quantity = $_POST['quantity'];

    $cart = new Cart();
    $cart->add_to_cart($product_id, $user_id, $quantity);

    header('Location: cart.php');
    exit();
}

?>
<div>
    <div>
        <img src="<?= $product['image'];?>">
    </div>
    <div>
        <h2><?= $product['name']; ?></h2>
        <p>Price: $<?=$product['price'];?></p>
        <form action="" method="post">
            <input type="numer" name="quantity">
            <button type="submit">Add to Cart</button>
        </form>
    </div>
</div>

<?php require_once "inc/footer.php";?>