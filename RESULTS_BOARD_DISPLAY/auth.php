<?php
        include "calculate.php";
        if (isset($_POST["uname"]) && isset($_POST["passwd"])){
        
            $uname = $_POST["uname"];
            $passwd = $_POST["passwd"];    

            //connecting to server
            $conn = mysqli_connect("sql12.freesqldatabase.com", "sql12611723", "udfE8GsFKl", "sql12611723");

            if (!$conn) {
                die("Sorry connection failed" . mysqli_connect_error());
            } 
            else 
            {
                echo "<h1>DATABASE CONNECTED SUCCESSFULLY</h1>";
                $sql = "SELECT * FROM `auth` WHERE username='$uname' AND password='$passwd'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) == 1)
                {
                    echo "<h1>Login Successful</h1><br>";
                    echo "<h3>Welcome $uname </h3>";
                    calculate($uname, 3);
                }
                else
                {
                    header("index.html");
                }
            }
        }
    ?>