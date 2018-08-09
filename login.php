<?php include 'header.php';
      include 'menu.php';
?>


<div class="row login-form">

    <div class="col-md-4"></div>
    <div class="col-md-4">
        <form class="form-signin" action="includes/sql.php" method="post">
            <h2 class="form-signin-heading">Please sign in</h2>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" name="inputEmail" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="inputPass" id="inputPassword" class="form-control" placeholder="Password" required>
            <button class="btn btn-lg btn-success btn-block" type="submit" value="submit" name="submit-login">Sign in</button>
        </form>
    </div>
    <div class="col-md-4"></div>
</div>

<?php include 'footer.php' ?>

<!--custom js-->
<script src="js.js"></script>