<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'config.php';
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $roll = $_POST["roll"];
    $duplicate = mysqli_query($conn, "SELECT * FROM tab Where email = '$name'");


    if (mysqli_num_rows($duplicate) > 0) {
        echo
        "<script>alert('This Name is Already Registered\nUse Another One');</script>";
    } else {
        $query = "INSERT INTO tab VALUES('$name','$email','$roll')";
        mysqli_query($conn, $query);
        echo
        "<script>alert('Response Recorder You Submission is \n$name\n$email\n$roll\nYou can Leave now!');</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C Language Lab Student Participation From</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            background-color: #333335 !important;
            color: #a0a0a0 !important;
        }
        main{
            margin-top: 10%;
            margin-bottom: 10%;
            width: 100%;
            text-align: center;
            
        }
        input{
            margin: 2em;
            width: 80%;

        }
    </style>
</head>

<body>
    <main>
        <h1>C Language Lab Student Participation From</h1>
        <form action="" method="post">
            <label for="name">Name : </label>
            <input type="text" name="name" id="name" placeholder="Enter Full Name" required><br>
            <label for="Email">Email : </label>
            <input type="email" name="email" id="email" placeholder="Enter College Email ID" required> <br>
            <label for="roll">Roll No : </label>
            <input type="text" name="roll" id="roll" placeholder="Enter College Roll" required><br>
            <button type="submit" name="submit" id="login_btn">submit</button>
        </form>
    </main>

</body>

</html>