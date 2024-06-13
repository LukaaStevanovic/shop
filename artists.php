<?php require_once "inc/header.php"; ?>
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
    <title>Artists</title>
</head>
<body>
    <!-- meni se nalazi u hederu -->
    <header>
        
    </header>
    <section class="secondary-hero-section">
        <div class="container">
            <h1 class="hero-heading">Artists</h1>
            <div class="heading-underline5"></div>
        </div>
    </section>
    
    <section class="all-section artists-section">
        <div class="container artists">
            <div class="artists-cnt-wrapper"><img src="public/slike/eddie.jpg" alt="artists1"></div>
            <div class="artists-cnt-wrapper">
                <h3 class="artists-heading">Eddie Van Halen</h3>
                <p class="artists-txt">Eddie Van Halen was an american guitarist in the band Van Halen, he's signature guitar is the "Frankenstrat" that he built him self.</p>
            </div>
        </div>
        <div class="container artists">
            <div class="artists-cnt-wrapper right">
                <h3 class="artists-heading">Jimi Hendrix</h3>
                <p class="artists-txt">Jimi Hendrix was an american guitarist famous for his overall skill on the guitar, he is often recognized as the greast guitarist. He's signature guitar is the "Stratocaster".</p>
            </div>
            <div class="artists-cnt-wrapper"><img src="public/slike/jimi.jpg" alt="artists2"></div>
        </div>
        <div class="container artists">
            <div class="artists-cnt-wrapper"><img src="public/slike/slash.jpg" alt="artists3"></div>
            <div class="artists-cnt-wrapper">
                <h3 class="artists-heading">Slash</h3>
                <p class="artists-txt">Slash is a british-american lead guitarist of the band Guns N' Roses, considered second only to Jimi Hendrixon. He's signature guitar is the "Appetite for Destruction".</p>
            </div>
        </div>
    </section>

    
    <?php require_once "inc/footer.php"; ?>
</body>
</html>