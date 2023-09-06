<?php

include 'Connect.php';

if(isset($_GET['deleteid'])){
    $updateid=$_GET['deleteid'];

    $sql="delete from `register_patient` where patientid='$updateid'";

    $results=mysqli_query($data,$sql);
    if($results){    
        header('location:viewpatient.php');       
    }
    else{
        die(mysqli_error($data));
    }
}

?>
