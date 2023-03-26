<?php
session_start();

$_SESSION['login_status'] = 0;


if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']))
{
$user_username = $_POST['username'];
$user_email = $_POST['email'];
$user_password = hash('sha256',$_POST['password']);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bnp";
$conn = mysqli_connect($servername,$username,$password,$dbname);

$query = mysqli_query($conn,'SELECT username,email FROM users');

$usernames_column = [];
$emails_column = [];

while($row = mysqli_fetch_assoc($query))
{
$usernames_column[] = $row["username"];
$emails_column[] = $row["email"];
}



if( strlen($user_username) > 12 || strlen($user_username) < 4 )
{
echo 'tedade horoofe name karbari beine 4 ta 12 harf bashad';
}

elseif( !preg_match("/.*@gmail\.com$/i" , $user_email) )
{
echo 'formate email nadorost ast';
}

elseif( strlen($user_email) > 25 )
{
echo 'toole email bish tar az hadde mojaz ast';
}

elseif( strlen($_POST['password']) > 13 || strlen($_POST['password']) < 7 )
{
echo 'password bayad beine 7 ta 13 harf bashad';
}

elseif( !preg_match("/^(?=.*?\d)(?=.*?[a-zA-Z])[a-zA-Z\d]+$/i" , $_POST['password']) )
{
echo 'password bayad shamele adad va horoof bashad';
}

elseif( in_array($user_username,$usernames_column) )
{
echo 'name karbari ghablan estefade shode';
}

elseif( in_array($user_email,$emails_column) )
{
echo 'email ghablan estefade shode';
}

else
{
$sql = "INSERT INTO users (username,email,password) VALUES ('$user_username','$user_email','$user_password')";
mysqli_query($conn,$sql);
echo 'signed up !';
$_SESSION['login_status'] = 1;
}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/signup.css" rel="stylesheet">
    <title>Signup</title>
</head>

<body>

    <div class="signup">
        <h1>Sign Up</h1>

        <form action="" method="POST">
            <div class="signup__username">
                <label for="username">Username</label>
                <div class="flex-center">
                    <img src="./images/user-light.png" alt="user" class="icon">
                    <input name="username" type="text" placeholder="Type your username">
                </div>
            </div>

            <div class="signup__password">
                <label for="password">Password</label>
                <div class="flex-center">
                    <img src="./images/lock-light.png" alt="lock" class="icon">
                    <input name="password" type="password" placeholder="Type your password" id="password" required>
                </div>
            </div>

            <div class="signup__email">
                <label for="password">Email</label>
                <div class="flex-center">
                    <img src="./images/email-light.png" alt="email" class="icon">
                    <input name="email" type="email" placeholder="Type your email" id="email" required>
                </div>
            </div>
            <input type="submit" class="submit-button" style="display: none;">
        </form>


        <button class="signup__button">Sign up</button>


        <script>
        document.querySelector(".signup__button")
            .addEventListener("click", function() {
                document.querySelector(".submit-button")
                    .click()
            })
        </script>

</body>

</html>