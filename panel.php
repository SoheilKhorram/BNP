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

    <!-- <div class="source">
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
    </div> -->

    <!-- <div class="support">
        <form class="support__form">
            <label>Subject</label>
            <input type="text" name="subject" placeholder="Subject">
            <label>Message</label>
            <textarea name="message" id="message" cols="30" rows="10"></textarea>
            <button class="support__button">Send</button>
        </form>
    </div> -->

    <div class="user-profile">
        <form action="">
            <div class="user-profile__img"></div>
            <label>Username</label>
            <input type="text" name="username">
            <label>New Password</label>
            <input type="password">
            <label>Confirm Password</label>
            <input type="password">
            <button class="user-profile__button">Save Changes</button>
        </form>
    </div>

    <!-- <div class="privacy">
        <p class="privacy__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, similique. Ipsam et
            veritatis dicta laudantium.
            Repellendus dolor nulla necessitatibus consequatur voluptatibus asperiores ipsa nisi maxime. Autem
            temporibus suscipit odio quo! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum amet molestiae
            nam minus velit fugiat, omnis exercitationem voluptas iure nihil beatae fugit placeat vitae recusandae non
            ipsam, fuga earum natus.
        </p>
    </div> -->

    <script>
        function handleClick() {
            window.location.href = "home.php"
        }

        const sidebarItems = document.querySelectorAll(".sidebar__item");

        sidebarItems.forEach(item => {
            item.addEventListener("click", () => {
                sidebarItems.forEach(item => {
                    item.classList.remove("active");
                })
                item.classList.add("active");
            })
        })
    </script>

</body>

</html>