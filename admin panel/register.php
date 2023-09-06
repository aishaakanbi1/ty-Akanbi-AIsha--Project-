<?php

include 'Connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $gender=$_POST['gender'];
    $age=$_POST['age'];
    $mail=$_POST['email'];
    $height=$_POST['height'];
    $weight=$_POST['weight'];
    $bloodpressure=$_POST['blood-pressure'];
    $temperature=$_POST['temperature'];
    $Note=$_POST['notes'];
   
   
    $sql="insert into register_patient (Name, Phone, Gender, Age, email, Height, Weight, Bloodpressure, Temperature, Note)
    values ('$name','$phone','$gender','$age','$mail','$height','$weight','$bloodpressure','$temperature','$Note')";

    $results=mysqli_query($data,$sql);
    if($results){
        // echo"registration sucessful";
        header('location:viewpatient.php');
    }
    else{
        die(mysqli_error($data));
    }
}


?>


<!DOCTYPE html>
<html>
<head>
  <title>Register New Patient - Hospital Admin Panel</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f7f9;
      margin: 0;
      padding: 0;
    }

    .navbar {
      background-color: rgba(0, 140, 255);
      overflow: hidden;
      position: fixed;
      top: 0;
      width: 100%;
    }
    .navbar a.active{
  border-bottom: 3px solid black;
  color:black;
}

    .navbar a {
      float: left;
      display: block;
      color: #ffffff;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 18px;
    }

    .navbar a:hover {
      background-color: rgba(0, 140, 255);
    }

    .container {
      max-width: 800px;
      margin: 80px auto 20px;
      padding: 20px;
      background-color: #ffffff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .form-group input[type="text"],
    .form-group select {
      width: 100%;
      padding: 10px;
      border: 1px solid #dddddd;
      border-radius: 5px;
      font-size: 16px;
    }

    .form-group input[type="submit"] {
      background-color: rgba(0, 140, 255);
      color: #ffffff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }

    .form-group input[type="submit"]:hover {
      background-color: rgba(0, 140, 255);
      .form-group textarea {
      width: 100%;
      height: 100px;
      padding: 10px;
      border: 1px solid #dddddd;
      border-radius: 5px;
      font-size: 16px;
    }
    }  .form-group textarea {
      width: 90%;
      height: 150px; /* Adjust the height as desired */
      padding: 10px;
      border: 1px solid #dddddd;
      border-radius: 5px;
      font-size: 16px;
      resize: vertical; /* Allow vertical resizing of the textarea */
    }

    #notes-char-count {
      font-size: 14px;
      color: #777777;
      margin-top: 5px;
    }
  </style>
</head>
<body>
  <div class="navbar">
    <a href="index.html" >Back</a>
    <a href="prescription.php">Create Prescription</a>
    <a href="database.php">View Patient Database</a>
  </div>

  <div class="container">
    <h1>Register New Patient</h1>

    <form  method="POST">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>
      </div>
    
      <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" id="phone" name="phone" required>
      </div>

      <div class="form-group">
        <label for="gender">Gender</label>
        <select id="gender" name="gender" required>
          <option value="">Select Gender</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select>
      </div>

      <div class="form-group">
        <label for="age">Age</label>
        <input type="text" id="age" name="age" required>
      </div>
      <div class="form-group">
        <label for="email">email</label>
        <input type="text" id="email" name="email" required>
      </div>
    
      <div class="form-group">
        <label for="height">Height (cm)</label>
        <input type="text" id="height" name="height" required>
      </div>

      <div class="form-group">
        <label for="weight">Weight (kg)</label>
        <input type="text" id="weight" name="weight" required>
      </div>

      <div class="form-group">
        <label for="blood-pressure">Blood Pressure</label>
        <input type="text" id="blood-pressure" name="blood-pressure" required>
      </div>

      <div class="form-group">
        <label for="temperature">Temperature (°C)</label>
        <input type="text" id="temperature" name="temperature" required>
      </div>

      <div class="form-group">
        <label for="notes">Notes </label>
        <textarea id="notes" name="notes" maxlength="250"></textarea>
        <div id="notes-char-count"></div>
      </div>
      </div>
      <br>
  <div class="form-group">
        <input style="margin-left: 280px;"  type="submit" name="submit">
      </div>

      <script>
      window.addEventListener("DOMContentLoaded", function () {
        var textarea = document.getElementById("notes");
        var charCount = document.getElementById("notes-char-count");
        var maxLength = textarea.getAttribute("maxlength");
  
        textarea.addEventListener("input", function () {
          var currentLength = textarea.value.length;
          charCount.textContent = currentLength + "/" + maxLength;
        });
      });
    </script>
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
