<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<style>
    body{
        background-color: azure;
    }
    table
    {
        border:2px dashed black;
        border-collapse: collapse;
        border-radius: 25px;
    }
    </style>
<body>

    <?php
        if (isset($_POST["uname"]) && isset($_POST["passwd"]) && isset($_POST["submit"])){
        
            $uname = $_POST["uname"];
            $passwd = $_POST["passwd"];    

            //connecting to server
            $conn = mysqli_connect("sql12.freesqldatabase.com", "sql12611723", "udfE8GsFKl", "sql12611723");


            if (!$conn) {
                die("Sorry connection failed" . mysqli_connect_error());
            } 
            else 
            {
                $sql = "SELECT * FROM `NVN18` WHERE Username='$uname' AND Password='$passwd'";
                $result = mysqli_query($conn, $sql);
                
                echo "<table>
                <tr>
                   <th>semseter</th>
                   <th>subj1</th>
                   <th>subj2</th>
                   <th>subj3</th>
                   <th>subj4</th>
                   <th>subj5</th>
                   <th>subj6</th>
                   <th>subj7</th>
                   <th>subj8</th>
                   <th>subj9</th>
                   </tr>";

                if (mysqli_num_rows($result) == 1){
                    $row = mysqli_fetch_assoc($result);
                    echo "<tr>";
                    echo "<td>".$row['semseter']."</td>";
                    echo "<td>".$row['subj1']."</td>";
                    echo "<td>".$row['subj2']."</td>";
                    echo "<td>".$row['subj3']."</td>";
                    echo "<td>".$row['subj4']."</td>";
                    echo "<td>".$row['subj5']."</td>";
                    echo "<td>".$row['subj6']."</td>";
                    echo "<td>".$row['subj7']."</td>";
                    echo "<td>".$row['subj8']."</td>";
                    echo "<td>".$row['subj9']."</td>";
                    echo "</tr>";

                }
                else
                {
                    echo "Login Failed";
                }

                echo "</table>";
            }
        }
    ?>
</body>
</html>