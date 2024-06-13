<?php require_once "app/config/config.php"; 
      require_once  "app/classes/user.php";
      $user = new User();
?>
<header>
        <nav class="navbar">
            <a href="index.php" class="nav-logo"><img class="nav-img" src="public/slike/LOGO1111.PNG" alt=logo></a>
            <ul class="nav-menu">
            <li class="nav-item">
                <a href="index.php" class="nav-link">HOME</a>
            </li>
           
            <li class="nav-item">
                <a href="products.php" class="nav-link">PRODUCTS</a>
            </li>
            <li class="nav-item">
                <a href="about.php" class="nav-link">ABOUT</a>
            </li>
            <li class="nav-item">
                <a href="artists.php" class="nav-link">ARTISTS</a>
            </li>
            <?php if(!$user->is_logged()):?>
            <li class="nav-item">
                <a href="register.php" class="nav-link">Register</a>
            </li>
            <li class="nav-item">
                <a href="login.php" class="nav-link">Login</a>
            </li>
            <?php else:?>
                <a class="nav-btn" href="cart.php">
                    <div class="nav-btn-content"><p class="btn-text">Cart</p></div>
                </a>
            <li class="nav-item">
                <a href="logout.php" class="nav-link">Logout</a>
            </li>
            <?php endif;?>

           
            <li>
                <a class="nav-btn" href="cart.php">
                    <div class="nav-btn-content"><p class="btn-text">Cart</p></div>
                </a>
            </li>
            </ul>
            <div class="hamburger">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
        </nav>
    </header>