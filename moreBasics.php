<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        margin : 0;
        padding : 0;
        box-sizing : border-box;
    }
    .container {
        max-width : 80%;
        background-color : rgb(202, 174, 174);
        margin : auto;
        padding : 23px;
        
    }
</style>
<body>
    <div class="container">
        <h1>Lets learn about PHP.</h1>
        <p>Your party status is here:</p>
        <?php
        $age = 34;
        if($age>18) {
            echo "You can drink";
        }
        else {
            echo "You cannot drink";
        }

        echo "<br>";
        $languages = array("Python", "PHP", "C++", "Java");

        echo $languages[0];
        echo "<br>";
        echo count($languages);

        foreach ($languages as $value) { 
            echo "<br>The name of language is : ";
            echo $value;
        }


        ?>
    </div>
</body>
</html>