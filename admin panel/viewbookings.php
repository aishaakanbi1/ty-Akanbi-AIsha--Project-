<?php
include "Connect.php";
?>

<!DOCTYPE html>
<html>
<head>
  <title>View Patient Database - Hospital Admin Panel</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f7f9;
      margin: 0;
      padding: 0;
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
    .container {
      max-width: 90%;
      margin: 80px auto 20px;
      padding: 20px;
      background-color: #ffffff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
    }
    
    .database-table {
      width: 100%;
      border-collapse: collapse;
    }
    
    .database-table th,
    .database-table td {
      padding: 10px;
      border-bottom: 1px solid #dddddd;
    }
    
    .database-table th {
      background-color: rgb(0, 140, 255);
      color: #ffffff;
      text-align: left;
    }
    
    .database-table tr:hover {
      background-color: #f2f2f2;
    }
    
    .database-table td:first-child {
      width: 30%;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
    
    .database-table td:last-child {
      text-align: right;
    }
    
    .database-table td a {
      text-decoration: none;
      color: #333333;
    }
    .navbar a.active{

  color:black;
}
    
    
    .database-table td a:hover {
      text-decoration: underline;
    }

   
 
  </style>
</head>
<body>
  <div class="navbar">
    <a href="index.html">Back</a>
    <a href="register.php">Register New Patient</a>
    <a href="database.php">Prescription</a>
    <a href="viewbookings.php"  class="nav-link active">Bookings</a>
  </div>   

  <div class="container">
      <!-- Container content -->
      <div class="total-files"></div>
      
        <thead>
    <table class="database-table">    <h1>Bookings</h1>
      <thead>
        <tr>
          
          <th>name</th>
          <th>Phone</th>
          <th>Doctor</th>
          <th>Date</th>
          
        </tr>
      </thead>
    <tbody>
      <?php
    $sql= "SELECT * FROM Bookings";
    $results= mysqli_query($data,$sql);
    if($results){
        while($row=$results->fetch_assoc()){
            $name=$row['Name'];
            $phone=$row['Phone']; 
            $Doctor=$row['Doctor'];
            $Date=$row['Date'];
          
          


          echo '<tr>

          <td>'.$name.'</td>
          <td>'.$phone.'</td>
          <td>'.$Doctor.'</td>
          <td>'.$Date.'</td>
         
          <td>
          
          
          
          </td>
        </tr>';
          }
            
          
        }
        
    


?>
  
     
    </tbody>
    </table>
  </div>
  <script>
    JavaScript code
    document.addEventListener('DOMContentLoaded', function()) {
      Get the total count of files
      var totalFiles = document.querySelectorAll('.database-table tbody tr').length;

      Display the total count of files
      var totalFilesElement = document.querySelector('.total-files');
      totalFilesElement.textContent = 'Total Files: ' + totalFiles;
    }

      // Get all the "Edit" buttons
      // var editButtons = document.querySelectorAll('.edit-button');

      // Attach click event listeners to each "Edit" button
      // editButtons.forEach(function(button) {
      //   button.addEventListener('click', function(event) {
          // Prevent the default link behavior
          // event.preventDefault();

          // Get the patient ID from the data-patient-id attribute
          // var patientId = this.getAttribute('data-patient-id');

          // Redirect to the edit page with the patient ID
          // window.location.href = 'edit_patient.html?id=' + patientId;
        // });
    //   });
    // });
  </script>
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

