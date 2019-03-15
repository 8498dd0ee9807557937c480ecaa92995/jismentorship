


<?php
$servername = "testmentor.cew9q7mtz9zz.ap-south-1.rds.amazonaws.com";
$username = "test";
$password = "jismentorship";
$dbname = "testing";

// Create connection
$link = new mysqli($servername, $username, $password,$dbname);
$id =20160544;
$query="SELECT s_id,s_password from mentee_login where s_id =".$id." and s_password='".$password."'";
        $result1= mysqli_query($link,$query);
        $count = mysqli_num_rows($result1);
// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
} 
echo " Query ".$query."<br>";
echo " count ".$count."<br>";
?>