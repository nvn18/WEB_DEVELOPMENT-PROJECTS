<?php
    function calculate($uname, $sem)
    {
        $credits = array(array(3, 3, 3, 3, 1.5, 1.5, 3, 1.5, 0),
                        array(3, 3, 3, 3, 2, 1.5, 1, 1.5, 1.5),
                        array(3, 3, 3, 3, 3, 1.5, 1.5, 1.5, 2),
                        array(3, 3, 3, 3, 3, 1.5, 1.5, 1.5, 2),
                        array(3, 3, 3, 3, 3, 1.5, 1.5, 1.5, 2),
                        array(3, 3, 3, 3, 3, 1.5, 1.5, 1.5, 2),
                        array(3, 3, 3, 3, 3, 3, 3, 2, 0),
                        array(12, 0, 0, 0, 0, 0, 0, 0, 0));
        $points = array("A+" => 10, "A" => 9, "B" => 8, "C" => 7, "D" => 6, "E" => 5, "F" => 4, NULL => 0);
        $sgpa = array();
        $cgpa = 0;

        $conn = mysqli_connect("sql12.freesqldatabase.com", "sql12611723", "udfE8GsFKl", "sql12611723");

        if (!$conn)
        {
            die("Connection to database failed: ". mysqli_connect_error());
        }
        else
        {
            $sql = "SELECT * FROM $uname";
            $res = mysqli_query($conn, $sql);
            $data = mysqli_fetch_all($res);
            $creditSum = 0;
            for ($i = 0; $i < $sem; $i++)
            {
                $gpa = 0;
                for ($j = 0; $j < 9; $j++)
                {
                    $gpa += $credits[$i][$j]*$points[$data[$i][$j+1]];
                }
                $cgpa += $gpa;
                $creditSum += array_sum($credits[$i]);
                $gpa /= array_sum($credits[$i]);
                array_push($sgpa, $gpa);
            }
            $cgpa /= $creditSum;
            echo "<p>SGPAs are as follows:</p><br>";
            for ($i = 0; $i < $sem; $i++)
                echo "<p>Semester ". ($i+1) . ": ". $sgpa[$i] . "</p><br>";

            echo "<p><strong>CGPA: <em>". $cgpa . "</em></strong></p><br />";
        }
    }
?>