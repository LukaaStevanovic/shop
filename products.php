<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&family=Open+Sans&display=swap" rel="stylesheet">
    <!--prva tri linka su dodati fontovi -->
    <link rel="stylesheet" href="public/pc-style.css">
    <link rel="stylesheet" href="public/tablet-style.css">
    <link rel="stylesheet" href="public/landscape-mobile-style.css">
    <link rel="stylesheet" href="public/mobile-style.css">
    <link rel="stylesheet" href="public/nav.css">
    <link rel="shortcut icon" href="public/slike/logo3 (2).png" type="image/x-icon">
    <title>Products</title>
</head>
<body>
<?php require_once "inc/header.php";
require_once "app/classes/Product.php";
 ?>
    <section class="secondary-hero-section">
        <div class="container">
            <h1 class="hero-heading">Products</h1>
            <div class="heading-underline2"></div>
        </div>
    </section>
    <!-- <section>

    <section class="all-section product-section">
    <div class="product-container">
 
  <link rel="stylesheet" href="public/productt.css">
  <div class="product-card">
    <img src="image" alt="Fender Stratocaster">
    <div class="product-details">
      <div class="product-name">Fender Stratocaster</div>
      <a href="fender_strat.php" ><font color="#030303"><u> Buy now </u> </font></a>
      <div class="product-price">$999.99</div>
    </div>
  </div>


    
  
  <link rel="stylesheet" href="public/productt.css">
  <div class="product-card">
    <img src="public/product_img/glsp.webp" alt="Gibson Les Paul">
    <div class="product-details">
      <div class="product-name">Gibson Les Paul</div>
      <a href="gibson_lp.php" ><font color="#030303"><u> Buy now </u> </font></a>
      <div class="product-price">$999.99</div>
    </div>
  </div>

    
  
  <link rel="stylesheet" href="public/productt.css">
  <div class="product-card">
    <img src="public/product_img/Martin-D-28-Guitar.webp" alt="Martin D-28">
    <div class="product-details">
      <div class="product-name">Martin D-28</div>
      <a href="martin_d-28.php" ><font color="#030303"><u> Buy now </u> </font></a>
      <div class="product-price">$1999.99</div>
    </div>
  </div>
</section>
<section>
</section>

<section class="all-section product-section">
    <div class="product-container">
  
  <link rel="stylesheet" href="public/productt.css">
  <div class="product-card">
    <img src="public/product_img/Taylor 814ce.webp" alt="Taylor 814ce">
    <div class="product-details">
      <div class="product-name">Taylor 814ce</div>
      <a href="Taylor_814ce.php" ><font color="#030303"><u> Buy now </u> </font></a>
      <div class="product-price">$2999.99</div>
    </div>
  </div>

   
  
  <link rel="stylesheet" href="public/productt.css">
  <div class="product-card">
    <img src="public/product_img/Fender Guitar Strap.webp" alt="Fender Guitar Strap">
    <div class="product-details">
      <div class="product-name">Fender Guitar Strap</div>
      <a href="fender_strap.php" ><font color="#030303"><u> Buy now </u> </font></a>
      <div class="product-price">$29.99</div>
    </div>
  </div>

  <link rel="stylesheet" href="public/productt.css">
  <div class="product-card">
    <img src="public/product_img/VOX AC15C11.webp" alt="VOX AC15C1">
    <div class="product-details">
      <div class="product-name">VOX AC15C1</div>
      <a href="vox_amp.php" ><font color="#030303"><u> Buy now </u> </font></a>
      <div class="product-price">$799.99</div>
    </div>
  </div>
  
  
</section>
<section>
</section>
<section class="all-section product-section">
  <div class="product-container">
  
  <link rel="stylesheet" href="public/productt.css">
  <div class="product-card">
    <img src="public/product_img/Capo for Guitar.webp" alt="Capo for Guitar">
    <div class="product-details">
      <div class="product-name">Capo for Guitar</div>
      <a href="capo.php" ><font color="#030303"><u> Buy now </u> </font></a>
      <div class="product-price">$14.99</div>
    </div>
  </div>

  
  
  <link rel="stylesheet" href="public/productt.css">
  <div class="product-card">
    <img src="public/product_img/DSL40CR.webp" alt="Marshall DSL40CR">
    <div class="product-details">
      <div class="product-name">Marshall DSL40CR</div>
      <a href="Marshall_DSL40CR.php" ><font color="#030303"><u> Buy now </u> </font></a>
      <div class="product-price">$699.99</div>
    </div>
  </div>
  

    
  
  <link rel="stylesheet" href="public/productt.css">
  <div class="product-card">
    <img src="public/product_img/FenderM.webp" alt="Fender Mustang LT25">
    <div class="product-details">
      <div class="product-name">Fender Mustang LT25</div>
      <a href="fender_mustang_lt25.php" ><font color="#030303"><u> Buy now </u> </font></a>
      <div class="product-price">$199.99</div>
    </div>
  </div>
  </section>
  </section>
<section>

</section>-->

<div>
  <?php foreach($products as $product): ?>
    <div>
      <div>
        <img src="images/<?= $product['image']?>">
        <div>
          <h5><?= $product['name']?></h5>
          <p>Price:<?= $product['price']?></p>
          <a href="product.php?product_id=<?= $product['product_id']?>">View Product</a>
        </div>
      </div>
    </div>
</div>
    
    <?php require_once "inc/footer.php"; ?>
</body>
</html>