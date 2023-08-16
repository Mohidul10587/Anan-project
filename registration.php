<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <style>
    input {
        margin: 5px;
    }
    </style>
</head>

<body>
    <h1>User Registration</h1>

    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required><br>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required><br>

        <label for="address">Commerce Result:</label>
        <input type="text" id="commerce" name="commerce" required><br>

        <label for="address">Accounting Result:</label>
        <input type="text" id="accounting" name="accounting" required><br>

        <label for="address">Business Result:</label>
        <input type="text" id="business" name="business" required><br>

        <label for="address">Name candidate:</label>
        <input type="text" id="nameCandidate" name="nameCandidate" required><br>

        <label for="address">Address candidate:</label>
        <input type="text" id="addressCandidate" name="addressCandidate" required><br>
        <button type="submit">Register</button>
    </form>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "user_registration";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }




    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $address = $_POST["address"];
        $phone = $_POST["phone"];
        $commerce = $_POST["commerce"];
        $business = $_POST["business"];
        $accounting = $_POST["accounting"];
        $nameCandidate = $_POST["nameCandidate"];
        $addressCandidate = $_POST["addressCandidate"];

        $sql = "INSERT INTO users (name, username, email, password, address, phone, commerce, business, accounting, nameCandidate, addressCandidate) 
        VALUES ('$name', '$username', '$email', '$password', '$address', '$phone', '$commerce', '$business', '$accounting', '$nameCandidate', '$addressCandidate')";

        if ($conn->query($sql) === TRUE) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
    ?>
</body>

</html>