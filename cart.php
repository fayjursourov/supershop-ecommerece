<?php
/**
 * Created by PhpStorm.
 * User: Sourov
 * Date: 12/13/16
 * Time: 4:23 PM
 */
session_start();
include 'includes/connection.php';
include 'header.php';
//var_dump($_SESSION['cart']);
$ids = join("','",$_SESSION['cart']);
$query = "SELECT * FROM product where productId in ('$ids')";

$result = $conn->query($query);

$total = 0;

while($person = mysqli_fetch_array($result)){
    echo "<h3>". $person['productName'] . "</h3>";
    echo "<h3>". $person['description'] . "</h3>";
    echo "<h3>". $person['quantity'] . "</h3>";
    echo "<h3>". $person['price'] . "</h3>";
    $subtotal = $person['quantity'] * $person['price'];
    $total += $subtotal;
    echo "<h3>sub total: ". $subtotal  . "</h3>";
}

echo '........................................<br>';

echo "<h3>Total: ". $total . "</h3>";
?>

<a href="purchase.php">
    <button>Purchase</button>
</a>