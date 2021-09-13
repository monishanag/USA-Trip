<?php

$insert = false;
if(isset($_POST['name'])){
    
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if(!$con) {
        die("Connection to this database failed due to" . mysqli_connect_error());
    }

    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];

    $sql = "INSERT INTO `usa_trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp())";
    

    if($con->query($sql) == true) {
        $insert = true;
    }
    else {
        echo "Error: $sql <br> $con->error";
    }

    $con->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USA Trip Form</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Glory:wght@300&family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <img src="iisc.jpg" alt="IISc Banaglore" class="bg">
    <div class="container">
        <h1>WELCOME TO IISc BANGALORE USA TRIP FORM</h1>
        <p>Please enter your details below:</p>
        
        <?php
        if($insert == true) {
            echo "<p class='success'>Thanks for submitting the form. We are happy to see you join the USA trip.</p>";
        }
        ?>
        
        <form action="index.php" method="post">
            <br>
            <br>
            <input type="text" name="name" id="name" placeholder="Enter your Name: ">
            <input type="text" name="age" id="age" placeholder="Enter your Age: ">
            <input type="text" name="gender" id="gender" placeholder="Enter your Gender: ">
            <input type="email" name="email" id="email" placeholder="Enter your Email ID: ">
            <input type="phone" name="phone" id="phone" placeholder="Enter your Contact Number: ">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button>
    
        </form>
    </div>
    <script src="index.js"></script>
    
</body>
</html>