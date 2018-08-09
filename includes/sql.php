<?php

session_start();

function connection(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = 'supershop';
    $conn = new mysqli($servername, $username, $password, $db_name);
    return $conn;
}

if(isset($_POST['submit-signup'])){
     sign_up();
}

else if(isset($_POST['submit-login'])){
    log_in();
}
else if(isset($_POST['submit-product'])){
    add_product();
}


function sign_up(){
    $conn = connection();

    $name = $_POST['inputName'];
    $email = $_POST['inputEmail'];
    $pass = $_POST['inputPass'];

    $query = "INSERT INTO `signup`
     (`ID`, `Name`, `Email`, `Password`) VALUES ('','$name','$email','$pass')";

    $result = $conn->query($query)or die('Error, insert query failed');
    header("Location:../signup.php");
    exit();
}



function log_in(){
    $conn = connection();

    $email = $_POST['inputEmail'];
    $pass = $_POST['inputPass'];

    if ($email == 'admin@gmail.com' && $pass == 'admin'){
        $_SESSION['admin-email'] = $email;
        header("Location:../admin.php?msg=Login Success"); /* Redirect browser */
        die();
    }


    $query = "SELECT * FROM signup where Email = '$email' and Password = '$pass'";

    $result = $conn->query($query);

    while($person = mysqli_fetch_array($result)){
        $_SESSION['buyer-email'] = $person['Email'];
        header("Location:../product.php?msg2=Login Success"); /* Redirect browser */
        die();
    }
    echo 'Information error!!';



}

function add_product(){
    $conn = connection();

    $pname = $_POST['input-pname'];
    $description = $_POST['input-dis'];
    $t_quantity = $_POST['input-tquantity'];
    $price = $_POST['input-price'];

    $query = "INSERT INTO `product` (`productId`, `productName`, `description`, `quantity`, `price`)
              VALUES ('','$pname','$description','$t_quantity', '$price')";

    $result = $conn->query($query)or die('----Error, insert query failed');
}





?>