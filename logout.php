<?php
/**
 * Created by PhpStorm.
 * User: Sourov
 * Date: 12/13/16
 * Time: 11:04 AM
 */


session_start();
if(isset($_SESSION['admin-email'])) {
   unset($_SESSION['admin-email']);
}
if(isset($_SESSION['buyer-email'])) {
    unset ($_SESSION['buyer-email']);
}
echo '<meta http-equiv="refresh" content="0; url=index.php" />';
die();