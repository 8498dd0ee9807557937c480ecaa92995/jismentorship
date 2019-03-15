<?php

$servername = "testmentor.cew9q7mtz9zz.ap-south-1.rds.amazonaws.com";
$username = "test";
$password = "jismentorship";
$dbname = "testing";

$link = mysqli_connect($servername, $username, $password,$dbname);
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}if($_SERVER["REQUEST_METHOD"] == "POST")
    {     

        $id = mysqli_real_escape_string($link,$_POST['sid']);
        $password = mysqli_real_escape_string($link,$_POST['spassword']); 
        // $query="SELECT sid,s_password from  where DeptId='20160544'";
        $query="SELECT s_id,s_password from mentee_login where s_id =".$id." and s_password='".$password."'";
        $result1= mysqli_query($link,$query);
        $count = mysqli_num_rows($result1);
       if($count==1)
        {
            header("location: profilementee.php");
            //echo file_get_contents("profilementor.html");
            
        }
        else
        {
         echo 'wrong inputs'; 
         exit( );
        }
    }
?>