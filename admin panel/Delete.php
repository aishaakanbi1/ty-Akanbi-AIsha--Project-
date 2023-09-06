<?php

include 'Connect.php';

if(isset($_GET['deleteid'])){
    $updateid=$_GET['deleteid'];
    
    

    $sql="delete from prescription where patientid='$updateid'";

    $results=mysqli_query($data,$sql);
    if($results){
        echo"Deleted sucessful";
        header('location:database.php');
        
    }
    else{
        die(mysqli_error($data));
    }
}
