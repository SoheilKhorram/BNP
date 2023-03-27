<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="BNP">
    <link rel="icon" href="images/i.png">
    <script src="js/jquery.js"></script>
    <script src="js/scripts.js"></script>
    <link rel="stylesheet" href="css/index.css">
    <title>F14K, Welcome to our world.</title>
</head>

<body>

<video autoplay muted loop id="intro-video">
  <source src="images/intro-vid.mp4" type="video/mp4">
</video>

    <div class="container">

        <div class="navbar">
            <div class="navbar__logo">BNP</div>
            <div class="flex-center">
                <img class="earth-icon" src="./images/earth-globe-dark.png">
                <select name="language" id="language-select" value="English">
                    <option value="English">English</option>
                    <option value="Persian">Persian</option>
                </select>
            </div>
        </div>

        <main>
            <div class="description">Welcome to the new world of motorsport. <br>
			Get to know more about the speed and precision of drivers and engineering power with us and let us accompany you on this path. <br>
			We are waiting for your warm presence in our house.
            </div>

            <div>
                <button class="btn login-button">LOGIN</button>
                <button class="btn signup-button">SIGN UP</button>
            </div>
            <button class="btn home-button">HOME PAGE</button>

        </main>
    </div>

<script>
$(".login-button").click(function(){window.location.href = "login.php";})
$(".signup-button").click(function(){window.location.href = "signup.php";})
$(".home-button").click(function(){window.location.href = "home.php";})
</script>


</body>

</html>