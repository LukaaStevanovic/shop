<?php require_once "inc/header.php";
require_once "app/classes/Order.php";

if (!$user ->is_logged()) {
    header("Location: index.php");
    exit();
}

$order = new Order();
$orders = $order->get_orders();
?>


<?php require_once "inc/header.php";?>