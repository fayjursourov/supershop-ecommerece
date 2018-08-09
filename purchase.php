<?php
/**
 * Created by PhpStorm.
 * User: Sourov
 * Date: 12/14/16
 * Time: 7:39 AM
 */

session_start();
include 'includes/connection.php';
include 'header.php';
//var_dump($_SESSION['cart']);
$ids = join("','",$_SESSION['cart']);

foreach($_SESSION['cart'] as $key=>$value){
    $query = "UPDATE `product` SET `quantity`= quantity-$value WHERE `productId` = '$key'";
    echo $query;
    $result = $conn->query($query)or die('Error, insert query failed');
}

