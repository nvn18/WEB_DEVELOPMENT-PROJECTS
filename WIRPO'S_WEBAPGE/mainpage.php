<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>selection</title>
</head>
<style>
body
{
margin-left:300px;
background-color:azure;
background-image:url('gree.jpg');
background-repeat:no repeat;
background-size:cover;
padding:5px;
}
.htt:hover
{
color:yellow;
}
.table
{
border:5px double red;
margin-left:150px;
width:50%;
padding:25px;
border-radius:10px 10px;
background-image:url('hel.jpg');
}
.htt{
  background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
</style>
<body>
<div class="table">
    <form method="post" action="mainpage.php">
        <h2>ENTER YOUR NAME:</h2>
        <input class="box" type="text" name="text" >
         <input type="submit" name="submit" value="submit" />  
        </form>
</div>
<?php
if($_POST)
{
$text=$_POST['text'];
echo "<p style='color:red; font-size:25px;'>WELCOME TO YOUR WIPRO'S SELECTION PAGE!!!:<br><br>$text"."</p>";
echo "<p style='color:brick-red; font-size: 25px;'> PLEASE VISIT THE WIPRO'S PAGE AND HAVE A GREAT DAY!!!!";
echo "<p style='color:red; font-size:25px;'>PLEASE CLICK THE LINK BELOW TO ENTER INTO THE WIPRO'S PAGE<br><br>";
$url = 'wipropage.php';
echo '<a class="htt" href='.$url.'>WIPRO PAGE</a><br><br>';


}
?>
</body>
</html>
