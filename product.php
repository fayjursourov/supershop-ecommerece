<?php
/**
 * Created by PhpStorm.
 * User: Sourov
 * Date: 12/12/16
 * Time: 5:09 PM
 */
session_start();
include 'includes/connection.php';
include 'header.php';
include 'menu.php';

if(!isset($_SESSION['buyer-email'])) {
    header("Location: login.php");
    die();
}
?>

<h1>
    <?php
    if(isset($_GET['msgb'])){
        echo($_GET['msgb']);
    }
    ?>
</h1>

<?php
    $query = "SELECT * FROM product";

    $result = $conn->query($query);

    while($person = mysqli_fetch_array($result)){
          echo "<h3>". $person['productName'] . "</h3>";
          echo "<h3>". $person['description'] . "</h3>";
          echo "<h3>". $person['quantity'] . "</h3>";
          echo "<h3>". $person['price'] . "</h3>";
          ?>
        <form action="add-to-cart.php" method="post">
            Add Quantity: <input name="quantity"/>
            <input type="hidden" name="productid" value="<?php echo $person['productId']; ?>" />
            <button value="submit" name="submit-cart">Add to cart</button>
        </form>

        <?php
    }

include 'footer.php';