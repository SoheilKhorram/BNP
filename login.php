<?php
session_start();

$_SESSION['login_status'] = 0;
if(isset($_POST['username'])&& isset($_POST['password']))
{
$user_username = $_POST['username'];
$user_password = hash('sha256',$_POST['password']);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bnp";
$conn = mysqli_connect($servername,$username,$password,$dbname);

$query = mysqli_query($conn,'SELECT username,password FROM users');

$usernames_column = [];
$passwords_column = [];

while($row = mysqli_fetch_assoc($query))
{
$usernames_column[] = $row["username"];
$passwords_column[] = $row["password"];
}

if(in_array($user_username,$usernames_column))
{
$username_index = array_search($user_username,$usernames_column);

if($user_password == $passwords_column[$username_index])
{
$_SESSION['login_status'] = 1;
}

else
{
echo '
<div class="error">
    <div class="flex-center">
        <img src="./images/close-accent.png" alt="error" class="error__icon">
        <p>password is incorrcet</p>
    </div>
</div>
';
}

}

else
{
echo '
<div class="error">
    <div class="flex-center">
        <img src="./images/close-accent.png" alt="error" class="error__icon">
        <p>username does not exist</p>
    </div>
</div>
';
}

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/login.css" rel="stylesheet">
    <title>LOGIN</title>
</head>

<body>

    <div class="login">
        <h1>Login</h1>
        <form action="" method="POST" >
            <div class="login__username">
                <label for="username">Username</label>
                <div class="flex-center">
                    <img src="./images/user-light.png" alt="user" class="icon">
                    <input name="username" type="text" placeholder="Type your username">
                </div>
            </div>

            <div class="login__password">
                <label for="password">Password</label>
                <div class="flex-center">
                    <img src="./images/lock-light.png" alt="lock" class="icon">
                    <input name="password" type="password" placeholder="Type your password" id="password" required>
                </div>
            </div>
            <input type="submit" class="submit-button" style="display: none;">
            <form>

                <button class="login__button">login</button>

                <script>
                document.querySelector(".login__button")
                    .addEventListener("click", function() {
                        document.querySelector(".submit-button")
                            .click()
                    })



if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}


                </script>

</body>

</html>