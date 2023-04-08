<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/panel.css" rel="stylesheet" type="text/css">
    <title>Panel</title>
</head>

<body>

    <div class="sidebar">
        <h2>BNP</h2>
        <li class="sidebar__item" onclick="handleClick()">
            <img src="images/home.png" alt="home" class="sidebar__img">
            Home
        </li>
        <li class="sidebar__item">
            <img src="images/user.png" alt="user" class="sidebar__img">
            User Profile
        </li>
        <li class="sidebar__item">
            <img src="images/coin.png" alt="coin" class="sidebar__img">
            Coins
        </li>
        <li class="sidebar__item">
            <img src="images/medal.png" alt="medal" class="sidebar__img">
            Pro User
        </li>
        <li class="sidebar__item">
            <img src="images/support.png" alt="support" class="sidebar__img">
            Support
        </li>
        <li class="sidebar__item">
            <img src="images/source.png" alt="source" class="sidebar__img">
            Source
        </li>
        <li class="sidebar__item">
            <img src="images/privacy.png" alt="privacy" class="sidebar__img">
            Privacy
        </li>
    </div>

    <div class="source">
        <div class="card">
            <h2>Title</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus itaque facere beatae ut molestiae
                unde
                ab?
            </p>
            <button class="card__button">Click</button>
        </div>
        <div class="card">
            <h2>Title</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus itaque facere beatae ut molestiae
                unde
                ab?
            </p>
            <button class="card__button">Click</button>
        </div>

        <div class="card">
            <h2>Title</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus itaque facere beatae ut molestiae
                unde
                ab?
            </p>
            <button class="card__button">Click</button>
        </div>

        <div class="card">
            <h2>Title</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus itaque facere beatae ut molestiae
                unde
                ab?
            </p>
            <button class="card__button">Click</button>
        </div>
    </div>

    <script>
    function handleClick() {
        window.location.href = "home.php"
    }
    </script>

</body>

</html>