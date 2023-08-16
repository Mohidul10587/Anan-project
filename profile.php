<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: index.php"); // Redirect to index page if not logged in
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1024">
    <title>Profile Page</title>
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

        .heading {
            color: #0468b6;
            margin-top: 0;
        }

        .heading a {
            text-decoration: none;
            color: #0468b6;
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

        .top-button {
            background-color: #0468b4;
            color: white;
            border: none;
            width: 95px;
            height: 30px;
            padding: 3px;
        }

        .top-button-2 {
            background-color: #ccd4e2;

            border: none;
            width: 95px;
            height: 30px;

        }

        .a {
            text-decoration: none;
            color: black;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .user-info {
            text-transform: uppercase;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .result-table {
            display: flex;
            flex-direction: column;
        }

        .result-row-heading {
            display: flex;
            align-items: center;
            padding-right: 60px;
            padding-left: 20px;
            height: 30px;
            background-color: #db317b;
            color: white;
        }

        .result-row-heading .result-column {

            width: 40%;
            font-weight: bold;
        }

        .result-row-heading .result-description {

            width: 40%;
            font-weight: bold;
        }

        .result-row {
            display: flex;
            align-items: center;
            padding-right: 60px;
            padding-left: 20px;
            height: 40px;

        }

        /* how to add a extra column namded name in  users table in mysql databse  */


        .result-column {

            width: 40%;
            font-weight: normal;
        }

        .result-description {
            text-align: center;
            width: 30%;
            font-weight: normal;
        }
    </style>
</head>

<body>

    <div class="content">
        <div class="header">
            <h1 class="heading">
                <a href="#">Candidate<span style="color:#7cbce4;">Results</span></a>
            </h1>
            <div>
                <img width="260px" src="logo.png" alt="" srcset="">
            </div>
        </div>

        <button class="top-button">Your result</button>
        <button class="top-button-2">What's next?</button>

        <div class="user-info">
            <div>
                <p><?php echo $_SESSION["name"]; ?> <span style="color:gray; text-transform:none;font-weight:normal">(Candidate no.
                        <?php echo $_SESSION["nameCandidate"]; ?>)</span></p>
                <p><?php echo $_SESSION["address"]; ?> <span style="color:gray;text-transform:none;font-weight:normal">(Centre no.
                        <?php echo $_SESSION["addressCandidate"]; ?>)</span></p>

            </div>
            <div>
                <button style="border:#90abb9 1px solid;background-color:#c1e0f8;width: 80px; height: 30px;"> <a class="a" href="index.php"> <span>



                            <svg style="background-color:#4667a3;border-radius:20px;padding:1px 2px;margin-right:6px;margin-top:3px" fill='white' xmlns="http://www.w3.org/2000/svg" height="0.8em" viewBox="0 0 384 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                            </svg>



                        </span>


                        <span style="color: #84b6d0;font-weight:bold">Logout</span>


                    </a></button>
            </div>
        </div>

        <p style="font-weight: normal;">Your Result June 2023</p>

        <div class=" result-table">
            <div class="result-row-heading">
                <p class="result-column">Examination</p>
                <p class="result-description">Qualification</p>
                <p class="result-description">Grade awarded</p>
            </div>
            <div class="result-row">
                <p class="result-column">Commerce</p>
                <p class="result-description"><span style="color:gray">(700)</span> CGE O-Level</p>
                <p class="result-description"> <?php echo $_SESSION["commerce"]; ?></p>
            </div>
            <div class="result-row">
                <p class="result-column">Accounting</p>
                <p class="result-description"><span style="color:gray">(750)</span> CGE O-Level</p>
                <p class="result-description"> <?php echo $_SESSION["accounting"]; ?></p>
            </div>
            <div class="result-row">
                <p class="result-column">Business studies</p>
                <p class="result-description"><span style="color:gray">(720)</span> CGE O-Level</p>
                <p class="result-description"> <?php echo $_SESSION["business"]; ?></p>
            </div>
        </div>

        <div style="display: flex; justify-content:space-between">
            <p style="font-size: smaller;margin-left:20px;font-weight:normal">The result displayed at provisional and
                informational only
            </p>
            <p style="font-size: smaller;margin-left:20px;font-weight:bold;color:#84b6d0"> <span><svg fill='#84b6d0' xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M128 0C92.7 0 64 28.7 64 64v96h64V64H354.7L384 93.3V160h64V93.3c0-17-6.7-33.3-18.7-45.3L400 18.7C388 6.7 371.7 0 354.7 0H128zM384 352v32 64H128V384 368 352H384zm64 32h32c17.7 0 32-14.3 32-32V256c0-35.3-28.7-64-64-64H64c-35.3 0-64 28.7-64 64v96c0 17.7 14.3 32 32 32H64v64c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V384zM432 248a24 24 0 1 1 0 48 24 24 0 1 1 0-48z" />
                    </svg></span> <span>Print the page</span>
            </p>

        </div>


        <div style="display: flex;justify-content:end">
            <button style="border:#90abb9 1px solid;background-color:#c1e0f8;width: 140px; height: 30px;"> <a class="a" href="index.php"> <span>



                        <svg style="background-color:#4667a3;border-radius:20px;padding:1px 3px;margin-right:6px;margin-top:3px" fill='white' xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M80 160c0-35.3 28.7-64 64-64h32c35.3 0 64 28.7 64 64v3.6c0 21.8-11.1 42.1-29.4 53.8l-42.2 27.1c-25.2 16.2-40.4 44.1-40.4 74V320c0 17.7 14.3 32 32 32s32-14.3 32-32v-1.4c0-8.2 4.2-15.8 11-20.2l42.2-27.1c36.6-23.6 58.8-64.1 58.8-107.7V160c0-70.7-57.3-128-128-128H144C73.3 32 16 89.3 16 160c0 17.7 14.3 32 32 32s32-14.3 32-32zm80 320a40 40 0 1 0 0-80 40 40 0 1 0 0 80z" />
                        </svg>
                    </span>


                    <span style="color: #84b6d0
;font-weight:bold">What to do next</span>


                </a></button>
        </div>





        <div class="footer-div">
            <p>v3.0.2 Copyright © UCLES 2017. </p>
            <p><span>All Rights Reserved. Please read our</span> <a href="#">Terms & Conditions</a></p>
        </div>
    </div>
</body>

</html>