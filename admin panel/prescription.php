<?php

include 'Connect.php';
if(isset($_POST['submit'])){
  $updateid=$_POST['patientid'];
    $name=$_POST['patientName'];
    $date=$_POST['date'];
    $medications=$_POST['medications'];
    $instructions=$_POST['instructions'];
    
   
    $sql="insert into prescription (patientid ,Name, Date, Medication, Instructions)
    values ('$updateid','$name','$date','$medications','$instructions')";

    $results=mysqli_query($data,$sql);
    if($results){
        // echo"registration sucessful";
        header('location:database.php');
    }
    else{
        die(mysqli_error($data));
    }
}


?>



<!DOCTYPE html>
<html>
<head>
  <title>Create Prescription - Hospital Admin Panel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">  
  <style>
    /* Styles for the prescription page */
    body {
      font-family: Arial, sans-serif;
      background-color: #f3f3f3;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 800px;
      margin: 20px auto;
      padding: 20px;
      background-color: #ffffff;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      border-radius: 5px;
    }


    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    input
     {
      width: 100%;
      padding: 10px;
      border: 1px solid #dddddd;
      border-radius: 5px;
      font-size: 16px;
    }

    textarea {
      height: 150px;
      width: 100%;
      padding: 10px;
      border: 1px solid #dddddd;
      border-radius: 5px;
      font-size: 16px;
      resize: vertical;
    }

    .form-actions {
      text-align: center;
    }

    .form-actions button {
      padding: 10px 20px;
      background-color: rgb(0, 140, 255);
      color: #ffffff;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }
 
    .navbar {
      background-color: rgb(0, 140, 255);
      overflow: hidden;
      position: fixed;
      top: 0;
      width: 100%;
    }
    
    .navbar a {
      float: left;
      display: block;
      color: bisque;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 18px;
    }
    
    .navbar a:hover {
      background-color: rgb(0, 140, 255);
    }
    .navbar a.active{
  border-bottom: 3px solid black;
  color:black;
}
    .form-actions button:hover {
      background-color: rgb(0, 140, 255);
    }
  </style>
</head>
<body>

  <div class="navbar">
    <a href="index.html" >Back</a>
    <a href="register.php">Register New Patient</a>
    <a href="database.php" class="nav-link active">View Patient Database</a>
    
  </div>

<br> <br> <br>
  <div class="container">
    <h1>Create Prescription</h1>

    <form method="POST">
    <div class="form-group">
        <label for="patientName">Patient ID</label>
        <input type="text" id="patientName" name="patientid" required>
      </div>

      <div class="form-group">
        <label for="patientName">Patient Name</label>
        <input type="text" id="patientName" name="patientName" required>
      </div>

      <div class="form-group">
        <label for="date">Date</label>
        <input type="date" id="date" name="date" required>
      </div>

      <div class="form-group">
        <label for="medications">Medications</label>
        <textarea id="medications" name="medications" required></textarea>
      </div>

      <div class="form-group">
        <label for="instructions">Instructions</label>
        <textarea id="instructions" name="instructions" required></textarea>
      </div>

      <div class="form-actions">
        <button type="submit" name="submit">Create Prescription</button>
      </div>
    </form>
  </div>
  <style>
    .footer {
      background-color: rgba(44, 44, 90, 0.671);
      color: #ffffff;
      text-align: center;
      padding: 60px;
      font-size: 14px;
    }
  </style>
  </head>
  <body>
  <div class="navbar">
    <!-- Navbar content -->
  </div>
  
  <div class="container">
    <!-- Container content -->
  </div>
  
  <div class="footer">
    &copy; 2023 Hospital Admin Panel. All rights reserved.
        </ul>
      </div>
      </div>
    </div>
</body>
</html>

