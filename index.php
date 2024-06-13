<?php 
require_once "inc/header.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&family=Open+Sans&display=swap" rel="stylesheet">
    <!-- prva tri linka su dodati fontovi -->
    <link rel="stylesheet" href="public/pc-style.css">
    <link rel="stylesheet" href="public/tablet-style.css">
    <link rel="stylesheet" href="public/landscape-mobile-style.css">
    <link rel="stylesheet" href="public/mobile-style.css">
    <link rel="stylesheet" href="public/nav.css">
    <!-- linkovani css fajlovi -->
    <link rel="shortcut icon" href="public/slike/logo3 (2).png" type="image/x-icon">
    <title>Guitar Shop</title>
</head>
<body>
    <!-- meni se nalazi u hederu -->
    <header> 
        
    </header>
    <section class="hero-section">
        <div class="container">
            <h1 class="hero-heading">
                Good music comes from a good instrument
            </h1>
            <div class="heading-underline"></div>
        </div>
    </section>
    
    
    <section class="features-section">
            <div class="f-content-wrapper">
                <div class="f-content orange">
                    <img class="f-img" src="public/slike/akusticna.png" alt="ac guitar">
                    <h3 class="f-heading">Acustic guitars</h3>
                    <p class="f-paragraph"></p>
                </div>

                <div class="f-content red">
                    <img class="f-img" src="public/slike/elektricna.png" alt="el guitar">
                    <h3 class="f-heading">Electric guitars</h3>
                    <p class="f-paragraph"></p>
                </div>
            </div>
            <div class="f-content-wrapper"> 
                <div class="f-content gray">
                    <img class="f-img" src="public/slike/pick2.png" alt="t&o">
                    <h3 class="f-heading">Tools & other</h3>
                    <p class="f-paragraph"></p>
                </div>

            <div class="f-content blue">
                <img class="f-img" src="public/slike/amp1.png" alt="amp">
                <h3 class="f-heading">Amplifiers</h3>
                <p class="f-paragraph"></p>
            </div>
        </div>   
    </section>
    
    <section>
        <div class="slider">
            <span id="slide-1"></span>
            <span id="slide-2"></span>
            <span id="slide-3"></span>
            <span id="slide-4"></span>
            <div class="image-container">
              <img src="public/slike/best-acoustic-guitars.jpg" class="slide" width="1000" height="600" />
              <img src="public/slike/elgitara.jpg" class="slide" width="1000" height="600" />
              <img src="public/slike/tools.jpg" class="slide" width="1000" height="600" />
              <img src="public/slike/best-combo-amps.jpg" class="slide" width="1000" height="600" />
            </div>
            <div class="buttons">
              <a href="#slide-1"></a>
              <a href="#slide-2"></a>
              <a href="#slide-3"></a>
              <a href="#slide-4"></a>
            </div>
          </div>
    
    </section>

    
    
</body>
</html>
<?php require_once "inc/footer.php"; ?>