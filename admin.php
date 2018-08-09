<?php
    session_start();

    include 'header.php';
    include 'menu.php';

    if(!isset($_SESSION['admin-email'])) {
        header("Location: login.php");
        die();
    }
?>


<h1><?php
    if(isset($_GET['msg'])){
        echo($_GET['msg']);
    }
    ?>
</h1>


<h1> This page is Admin Page </h1>

    <form action="includes/sql.php" method="post">
        Product Name: <input type="text" name="input-pname" /><br>
        Description: <input type="text" name="input-dis" /> <br>
        Total quantity: <input type="text" name="input-tquantity" /> <br>
        Price: <input type="text" name="input-price" /><br>
        <button type="submit" value="submit" name="submit-product"> Submit </button>
    </form>

<?php
    include 'footer.php';
?>