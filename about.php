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
    <!--prva tri linka su dodati fontovi -->
    <link rel="stylesheet" href="public/pc-style.css">
    <link rel="stylesheet" href="public/tablet-style.css">
    <link rel="stylesheet" href="public/landscape-mobile-style.css">
    <link rel="stylesheet" href="public/mobile-style.css">
    <link rel="stylesheet" href="public/nav.css">
    <link rel="shortcut icon" href="public/slike/logo3 (2).png" type="image/x-icon">
    <title>About us</title>
</head>
<body>
    <header>
       
    </header>
    <section class="secondary-hero-section">
        <div class="container">
            <h1 class="hero-heading">About us</h1>
            <div class="heading-underline2"></div>
        </div>
    </section>
    
    <section class="all-section">
        <div class="container about-div">
            <div class="about-img-wrapper"><img class="about-img" src="public/slike/logo3.png" alt="logo"></div>
            <div class="about-content">
                <h2 class="section-heading about-heading">About our shop</h2>
                <p>Our shop was founded 1976 with a goal to bring music to every household, we have the best prices on the market and are willing to help with every and any issue. We are located in two places.</p>
            </div>
        </div>
    </section>
    
    
    <section class="all-section about us">
        <div class="line-wrapper center"><div class="line-notch"></div></div>
        <div class="container abt-container">
            <h2 class="section-heading abt-heading">Locations</h2>
            <div class="abt-content-wrapper">
                <div class="abt-content">
                    <img class="abt-img" src="public/slike/lokacija1 (2) (1).jpg" alt="location 1">
                    <p><div class="google-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3365.895748179157!2d20.461169739685094!3d44.81403311964336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a7aae2586a26f%3A0x316ad86d720fff23!2sDe%C4%8Danska%2C%20Beograd!5e0!3m2!1sen!2srs!4v1710515916714!5m2!1sen!2srs" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                   </div></p>
                    <h3 class="abt-content-heading">Decanska 137f</h3>
                    </div>
                <div class="abt-content">
                    <img class="abt-img" src="public/slike/lokacija2 (2).jpg" alt="location 2">
                    <p><div class="google-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2831.3246560625234!2d20.52611527669775!3d44.79457187786695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a7a0bad057077%3A0x20d256343b75a89d!2sVitezova%20Kara%C4%91or%C4%91eve%20zvezde%2036%2C%20Beograd!5e0!3m2!1sen!2srs!4v1710514753684!5m2!1sen!2srs" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                   </div></p>
                    <h3 class="abt-content-heading">Vitezova Karadjoredjeve zvezde 2b</h3>
                </div>
            </div>
            
                
        </div>

        <section class="all-section contact-section">
        <div class="line-wrapper center"><div class="line-notch"></div></div>
        <div class="container form-cnt">   
        <div class="container abt-container">
         
            <h2 class="section-heading abt-heading">Contact us</h2>
            <div class="form-wrapper">
            <form class="form">
                <div class="name-wrapper"><input id="name" type="text" name="name" placeholder="First Name">
                <input id="surname" type="text" name="surname" placeholder="Last Name"></div>
                <div class="mail">
                    <input type="email" name="email" id="contant-mail" placeholder="Email Adress">
                </div>
                <div class="message-div">
                    <textarea style="padding: 5px;" name="message" id="message" cols="30" rows="10" placeholder="Your message..."></textarea>
                </div>
                <div class="btn-wrapper">
                    <button type="submit" id="message-btn" class="main-btn">Submit</button>
                </div>
            </form>
            </div>
        </div>
    </section>

    
    <script src="public/contact.js"></script>
    <?php require_once "inc/footer.php"; ?>
</body>
</html>