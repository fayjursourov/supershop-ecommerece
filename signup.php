<?php
    include 'header.php';
    include 'menu.php';
?>



<div class="sign-up">
    <form action="includes/sql.php" method="post">
        Name: <input type="text" name="inputName" /><br>
        Email: <input type="text" name="inputEmail" /> <br>
        Passowrd: <input /> <br>
        Confirm Passowrd: <input type="text" name="inputPass" /><br>
        <button type="submit" value="submit" name="submit-signup"> Submit </button>
    </form>
</div>