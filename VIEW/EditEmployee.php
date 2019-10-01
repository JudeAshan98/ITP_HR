<?php

$connect = new mysqli("localhost", "root", "", "ITP_HR");
$sql = "SELECT * FROM employee where emp_id = 2453";
$result = mysqli_query($connect, $sql);
while ($row =  mysqli_fetch_array($result)) {

  $EPF = $row['Emp_id'];
  $Fi_name = $row['F_name'];
  $La_name = $row['L_name'];
  $dob = $row['DOB'];
  $Contact = $row['contact'];
  $Mail = $row['mail'];
  $Gender = $row['gender'];
  $Address = $row['address'];
  $De_id = $row['D_id'];


}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Employee Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../CSS/profile.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="../JS/ProfileValidation.js"></script>
  <style>
    /*Profile Pic Start*/
    .picture-container {
      position: relative;
      cursor: pointer;
      text-align: center;
    }

    .picture {
      width: 106px;
      height: 106px;
      background-color: #999999;
      border: 4px solid #CCCCCC;
      color: #FFFFFF;
      border-radius: 50%;
      margin: 0px auto;
      overflow: hidden;
      transition: all 0.2s;
      -webkit-transition: all 0.2s;
    }

    .picture:hover {
      border-color: #2ca8ff;
    }

    .content.ct-wizard-green .picture:hover {
      border-color: #05ae0e;
    }

    .content.ct-wizard-blue .picture:hover {
      border-color: #3472f7;
    }

    .content.ct-wizard-orange .picture:hover {
      border-color: #ff9500;
    }

    .content.ct-wizard-red .picture:hover {
      border-color: #ff3b30;
    }

    .picture input[type="file"] {
      cursor: pointer;
      display: block;
      height: 100%;
      left: 0;
      opacity: 0 !important;
      position: absolute;
      top: 0;
      width: 100%;
    }

    .picture-src {
      width: 100%;

    }

    /*Profile Pic End*/
  </style>
<script src="ProfileValidation.js"></script>
</head>

<body>



  <div class="container">

    <br />
    <h1>Profile</h1>

    <form action="Update.php" >
      <div class="container">
        <div class="picture-container">
          <div class="picture">
            <img src=>
            <input type="file" id="wizard-picture" class="">
          </div>
          <h6 class="">Choose Picture</h6>


        </div>
        <!-- <div class="form-row"> -->

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="Emp_id">Emp ID:</label>
            <input type="Number" class="form-control" id="Emp_id" value="<?= $EPF ?>">
          </div>
          <div class="form-group col-md-6">
            <label for="F_name">First Name:</label>
            <input type="text" class="form-control" id="F_name" value="<?= $Fi_name ?>">
          </div>
        </div>
        <div class="form-group">
          <label for="L_name">Last Name:</label>
          <input type="text" class="form-control" id="L_name" value="<?= $La_name ?>">
        </div>
        <div class="form-group row">
          <div class="form-group col-md-6">
            <label for="DOB">Date of birth:</label>
            <input type="Date" class="form-control" id="DOB" value="<?= $dob ?>">
          </div>

          <div class="form-group col-md-6">
            <label for="contact">Contact no:</label>
            <input type="number" class="form-control" id="contact" value="<?= $Contact ?>">
          </div>
        </div>
        <div class="form-group">
          <label for="mail">E-mail:</label>
          <input type="email" class="form-control" id="mail" value="<?= $Mail ?>">
        </div>

        <div class="form-check">
          <label class="form-check-label" for="radio1">
            <input type="radio" class="form-check-input" id="Male" name="gender" value="Male" checked>Male
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label" for="radio2">
            <input type="radio" class="form-check-input" id="Female" name="gender" value="Female">Female
          </label>
        </div>

        <div class="form-row">
         <div class="form-group col-md-6">
          <label for="address">Address:</label>
          <input type="text" class="form-control" id="address">
        </div>

        <div class="form-group  col-md-6">
          <label for="D_id">Department ID:</label>
          <input type="number" class="form-control" id="D_id">
        </div>
        </div>
        <div class="custom-file mb-3">
          <input type="file" class="custom-file-input" id="Scan_docs" name="filename">
          <label class="custom-file-label" for="customFile">Upload scan documents</label>
        </div>

        <button type="submit" class="btn btn-primary" onclick="ProfileValidation()" action="update.php">Update</button>
    </form>
  </div>
  </div>




</body>

</html>