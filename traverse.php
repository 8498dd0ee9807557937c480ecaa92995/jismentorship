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
        $query="SELECT m_id,m_password from mentor_login where m_id =".$id." and m_password='".$password."'";
        $result1= mysqli_query($link,$query);
        $count = mysqli_num_rows($result1);
       if($count==1)
        {
            header("location: profilementor.html");
            //echo file_get_contents("profilementor.html");
            
        }
        else
        {
         echo "id entered : ".$id." Pass: ".$password."<br>";
         echo "Query :".$query."<br>";
         echo 'wrong inputs'; 
         exit( );
        }
    }
?>