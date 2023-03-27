<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/home.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/scripts.js"></script>
    <title>HOME</title>
</head>

<body>


    <div class="menu-container">

        <div class="menu-item"><span>Formula Series</span><img src="images/arrow.png">
            <div class="submenu-container">
                <div class="hover-fixer-div"></div>
                <div class="submenu-item">Formula 1</div>
                <div class="submenu-item">Formula 2</div>
                <div class="submenu-item">Formula 3</div>
                <div class="submenu-item">Formula E</div>

            </div>

        </div>

        <div class="menu-item"><span>Moto Series</span><img src="images/arrow.png">
            <div class="submenu-container">
                <div class="hover-fixer-div"></div>
                <div class="submenu-item">Moto Gp</div>
                <div class="submenu-item">Moto 2</div>
                <div class="submenu-item">Moto 3</div>
                <div class="submenu-item">Moto E</div>
                <div class="submenu-item">Super Bike</div>

            </div>

        </div>

        <div class="menu-item"><span>IndyCar</span></div>

        <div class="menu-item"><span>Lemans</span></div>

        <div class="menu-item coming-soon" style="animation:ghost 2s infinite"><span>COMING SOON</span></div>

    </div>

    <footer>
        <div class="footer-container">
            <div class="footer-item">
                <h3>About Us</h3>
                <p>
                    We are a small group that has prepared a new world of motorsport for you.
                </p>
                <p>
                    On March 23, 2023, our team started working exclusively in the field of motorsports and decided to
                    start working on different platforms.
                </p>
                <p>
                    Want to know more about us? Click on the button below to get to know us.
                </p>
                <div class="read-more-div">
                    <a href="#" class="read-more">
                        Read More
                    </a>
                </div>
            </div>
            <div class="footer-item">
                <h3>Contact Us</h3>
                <p>
                    You can contact us.
                </p>
                <p>
                    To support, for problems or even cooperate with us, click on the options below
                </p>
                <div class="social-media-icons">
                    <a href="mailto:Formula1.4k@gmail.com">
                        <img src="images/email-accent.png" alt="email" class="social-media-icon">
                    </a>
                    <a href="https://t.me/ArtinZomorodian">
                        <img src="images/telegram-accent.png" alt="telegram" class="social-media-icon">
                    </a>
                </div>
            </div>
            <div class="footer-item">
                <h3>Follow Us</h3>
                <p>
                    Did you know that we also operate on other platforms?
                <p>
                    Follow us on the following platforms
                <div class="social-media-icons">
                    <a href="https://t.me/ArtinZomorodian">
                        <img src="images/telegram-accent.png" alt="telegram" class="social-media-icon">
                    </a>

                    <a href="#">
                        <img src="images/reddit-accent.png" alt="reddit" class="social-media-icon">
                    </a>
                    <a href="#">
                        <img src="images/youtube-accent.png" alt="youtube" class="social-media-icon">
                    </a>
                </div>
                <div class="social-media-icons">
                    <a href="#">
                        <img src="images/instagram-accent.png" alt="instagram" class="social-media-icon">
                    </a>
                    <a href="#">
                        <img src="images/twitter-accent.png" alt="twitter" class="social-media-icon">
                    </a>
                </div>
                </p>
                </p>
            </div>
        </div>
    </footer>

    <script>
    $(".menu-item").hover(function() {
        $(".submenu-container", this).fadeIn(200);
    }, function() {
        $(".submenu-container", this).fadeOut(200);
    });
    </script>


</body>



</html>