<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_registration";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function authenticateUser($conn, $username, $password)
{
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            return true;
        }
    }

    return false;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (authenticateUser($conn, $username, $password)) {
        $_SESSION["username"] = $username;

        // Fetch additional user data from the database
        $sql = "SELECT name, address, email, phone,commerce,business,accounting,nameCandidate,addressCandidate FROM users WHERE username = '$username'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $_SESSION["name"] = $row["name"];
        $_SESSION["address"] = $row["address"];
        $_SESSION["email"] = $row["email"];
        $_SESSION["phone"] = $row["phone"];
        $_SESSION["commerce"] = $row["commerce"];
        $_SESSION["business"] = $row["business"];
        $_SESSION["accounting"] = $row["accounting"];
        $_SESSION["nameCandidate"] = $row["nameCandidate"];
        $_SESSION["addressCandidate"] = $row["addressCandidate"];


        // Store username and additional data in session
        header("Location: profile.php"); // Redirect to profile page
        exit();
    } else {
        echo "Invalid username or password.";
    }
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            display: flex;
            justify-content: center;
            font-weight: 900;
        }

        .content {
            width: 750px;
        }

        .header {
            display: flex;
            justify-content: space-between;

            border-top: 2px solid #0468b6;
            border-bottom: 1px solid #0468b6;
            margin-bottom: 5px;
            height: 50px;
        }

        .login {
            padding: 20px;
            background-color: #0468b6;
            color: white;
        }


        fieldset {
            border: none;
        }

        .username {
            margin-left: 30px;
            width: 250px;
        }

        .password {
            margin-left: 33px;
            width: 250px;
        }

        .passwordInputDiv {
            margin-top: 10px;

        }

        .usernameInputDiv {
            margin-top: 10px;
        }

        .inputDiv {

            margin-left: 20px;
        }



        .heading {
            color: #0468b6;
            margin-top: 0;
        }

        .heading a {
            text-decoration: none;
            color: #0468b6;
        }

        .ml {
            height: 25px;
        }

        .button {
            height: 30px;
            margin-left: 9px;
            width: 60px;
        }

        .span {
            margin-left: 9px;
            font-size: small;
        }

        .legend {
            font-size: larger;
        }

        label {
            font-size: 15px;
        }

        .para {
            margin-top: 32px;
            font-size: 15px;
            font-weight: normal;
        }


        .footer-div {
            margin-top: 10px;
            border-top: 2px solid #0468b6;
            border-bottom: 2px solid #0468b6;
            font-size: smaller;
            font-weight: normal;
            line-height: 2px;
            padding-top: 20px;
            padding-bottom: 5px;
        }


        @media (max-width: 768px) {

            .username {
                margin-left: 30px;
                width: 50%;
            }

            .password {
                margin-left: 33px;
                width: 50%;
            }

        }
    </style>
</head>



<body>

    <div class="content">



        <div class="header" style="padding: 4px 0;">
            <h1 class="heading">
                <a href="#">Candidate<span style="color:#7cbce4">Results</span></a>
            </h1>
            <div>
                <img width="260px" src="logo.png" alt="" srcset="">
            </div>

        </div>



        <div class="login">
            <form action="" method="post">
                <fieldset>
                    <legend class="legend">Enter your login details to access your results:</legend>
                    <div id="credentials">
                        <div class="inputDiv usernameInputDiv">
                            <label for="username">Username:</label>
                            <input type="text" id="username" name="username" class="username ml" maxlength="30" value="">
                            <span class="span">(as provided by your centre)</span>
                        </div>

                        <div class="inputDiv passwordInputDiv">
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" id="password" class="password ml" maxlength="24" value="">
                            <button class="button" type="submit">Login</button>
                        </div>

                    </div>
                    <p class="para">If you are having difficulty logging in, please profile your Centre.</p>
                </fieldset>
            </form>

        </div>

        <div class="footer-div">
            <p>v3.0.2 Copyright © UCLES 2017. </p>
            <p><span>All Rights Reserved. Please read our</span> <a href="#">Terms & Conditions</a></p>
        </div>
    </div>
</body>

</html>