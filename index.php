<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Fill Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="stylesheet">

</head>

<body>

     <?php
        $insert = false;
        if(isset($_POST['name']))
            {
                $server = "localhost";
                $username = "root";
                $password = "";

                $con = mysqli_connect($server, $username, $password);
                if (!$con) {
                    die("Connection failed due to " . mysqli_connect_error());
                }

                $name = $_POST['name'];
                $age = $_POST['age'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];

                $sql = "INSERT INTO `demo`.`details` (`name`, `age`, `email`, `password`, `date`) VALUES ('$name', '$age', '$email', '$pass', current_timestamp());";

                // echo $sql;

                if ($con->query($sql) == true) {
                    $insert = true;
                } else {
                    echo "ERROR : $sql <br> $con->error";
                }

                $con->close();
        }
    ?> 
    <div class="shape1"></div>
    <div class="shape2"></div>
    <div class="dot1"></div>
    <div class="dot2"></div>
    <div class="dot3"></div>

    <div class="container">
        <h1>Welcome to my form</h1>
    </div>

    <div class="myform">
        <form action="index.php" method="post">
            <?php
            if($insert == true)
            {
                echo "<h1 id='success'>Success</h1>";

            }
            elseif($insert == false)
            {
                echo "<h1 id='fail'>Failed</h1>";
            }
            
            ?>
            <input type="text" name="name" id="name" placeholder="Name" required>
            <input type="number" name="age" id="age" placeholder="Age" required>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <input type="password" name="pass" id="pass" placeholder="Password" required>
            <button class="btn btn1">Submit</button>
            <button id="reset" class="btn btn2">Clear</button>
        </form>
    </div>

</body>

<script src="assets/js/script.js"></script>

</html>
