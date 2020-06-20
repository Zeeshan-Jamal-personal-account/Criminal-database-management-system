<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crimedb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id=$_POST['id'];





$conn->close();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Criminal Data insertion</title>
    <style>
        body {
            background-image: url("background.png");
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>

    <h2 style="color: aliceblue">Criminal Database</h2>

    <form action="update_criminal_data_script.php" method="POST">

        
        
        <h3 style="color: aliceblue">Put the new values you want to UPDATE:<br></h3>
        <h3 style="color: aliceblue">First name:<br></h3>
        <input type="text" name="fname" value="">
        <br>
        <h3 style="color: aliceblue">Last name:<br></h3>
        <input type="text" name="lname" value=""><br>
        <h3 style="color: aliceblue">Age:<br></h3>
        <input type="text" name="age" value=""><br>
        <h3 style="color: aliceblue">Gender:<br></h3>
        <input type="text" name="gender" value=""><br>
        <h3 style="color: aliceblue">Date of entry:<br></h3>
        <input type="date" name="date" value=""><br>
        <h3 style="color: aliceblue">Rating:<br></h3>
        <input type="text" name="rating" value=""><br>
        <h3 style="color: aliceblue">Description:<br></h3>
        <input type="text" name="description" value=""><br>
        <h3 style="color: aliceblue">Sentence year:<br></h3>
        <input type="text" name="sentence_year" value=""><br>
        <h3 style="color: aliceblue">Sentence type:<br></h3>
        <input type="text" name="sentence_type" value=""><br>
        <input type="submit" name="submit"><br>
        <input type="text" name="id" value=""><br>
        
       
        
    </form>
    <br>
    <a href="index.html">
        <h2>Home</h2>
    </a>


</body>

</html>