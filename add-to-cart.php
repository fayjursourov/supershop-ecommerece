<?php
/**
 * Created by PhpStorm.
 * User: Sourov
 * Date: 12/13/16
 * Time: 4:23 PM
 */

session_start();

if(!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$productid = $_POST['productid'];
$_SESSION['cart'][$productid] = $_POST['quantity'];
?>