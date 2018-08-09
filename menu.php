 <body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand" href="http://localhost/super_shop/index.php">MARS Supershop </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav menu">
            <li class="active"><a href="http://localhost/super_shop">Home</a></li>
            <li><a href="http://localhost/super_shop/product.php" >Product</a></li>


             <?php

                if(isset($_SESSION['buyer-email']) || isset($_SESSION['admin-email'])){
                    echo '<li><a href="http://localhost/super_shop/logout.php">Log Out</a></li>';
                    echo '<li><a href="http://localhost/super_shop/cart.php">Cart</a></li>';
                }
                else{
                    echo '<li><a href="http://localhost/super_shop/signup.php" >Sign Up</a></li>';
                    echo '<li><a href="http://localhost/super_shop/login.php">Log in</a></li>';
                }

             ?>




          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>




