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

        <div class="menu-item" style="animation:ghost 2s infinite"><span>COMING SOON</span></div>

    </div>




    <script>
    $(".menu-item").hover(function() {
        $(".submenu-container", this).fadeIn(200);
    }, function() {
        $(".submenu-container", this).fadeOut(200);
    });
    </script>


</body>



</html>