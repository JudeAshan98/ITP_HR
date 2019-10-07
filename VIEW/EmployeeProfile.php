
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employee Profile</title>
  <!-- <meta charset="utf-8"> -->
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../CSS/profile.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->
  <style>
  /*Profile Pic Start*/
.picture-container{
    position: relative;
    cursor: pointer;
    text-align: center;
}
.picture{
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
.picture:hover{
    border-color: #2ca8ff;
}
.content.ct-wizard-green .picture:hover{
    border-color: #05ae0e;
}
.content.ct-wizard-blue .picture:hover{
    border-color: #3472f7;
}
.content.ct-wizard-orange .picture:hover{
    border-color: #ff9500;
}
.content.ct-wizard-red .picture:hover{
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

.picture-src{
    width: 100%;
    
}
/*Profile Pic End*/
  </style>
</head>
<body>

  
<div class="container">
    <h1 >Profile</h1>
    <br>

    
            
  <form action="InsertEmployee.php" method="post"  >
            
               <div class="picture-container">
               <div class="picture">
               <img src= >
               <input type="file" id="image" name="Image">
               </div>
              <h6 class="">Choose Picture</h6>
                </div>
                
                <div class="form-group">
                  <label for="Emp_id">Emp ID:</label>
                  <input type="Number" class="form-control" id="Emp_id" name="Emp_id" required >
                </div>
                <div class="form-group">
                  <label for="F_name">First Name:</label>
                  <input type="text" class="form-control" id="F_name" name="F_name" required>
                </div>

                <div class="form-group">
                  <label for="L_name">Last Name:</label>
                  <input type="text" class="form-control" id="L_name" name="L_name" required>
                </div>

                <div class="form-group">
                  <label for="DOB">Date of birth:</label>
                  <input type="Date" class="form-control" id="DOB" name="DOB" required>
                </div>

                <div class="form-group">
                  <label for="contact">Contact no:</label>
                  <input type="text" class="form-control" id="contact"name="contact" required>
                </div>

                <div class="form-group">
                  <label for="mail">E-mail:</label>
                  <input type="email" class="form-control" id="mail" name="mail" required>
                </div>

                <div class="form-check">
                  <label class="form-check-label" for="radio1">
                    <input type="radio" class="form-check-input" id="Male" name="gender"  checked>Male
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label" for="radio2">
                    <input type="radio" class="form-check-input" id="Female" name="gender" >Female
                  </label>
                 </div>

                <div class="form-group">
                  <label for="address">Address:</label>
                  <input type="text" class="form-control" id="address" name="address" required>
                </div>

                <div class="form-group">
                  <label for="D_id">Department ID:</label>
                  <input type="number" class="form-control" id="D_id" name="D_id" required>
                </div>
                <div class="custom-file mb-3">
                <input type="file" class="custom-file-input" id="Scan_docs" name="filename">
                <label class="custom-file-label" for="customFile">Upload scan documents</label>
               </div>
                <div class="form-group">
                  <label for="password">Password:</label>
                  <input type="text" class="form-control" id="password" name="password" required>
                </div>

                <div class="form-group">
                <label for="sel1">Tag the Designation*</label>
                <select class="form-control" name="tag" id="sel1" required>
               <option selected hidden value="">Select</option>
               <option>Excutive</option>
               <option>HOD</option>
               <option>ADMIN</option>
              </select>
              </div>
                
               

                <button type="submit"  class="btn btn-primary" onclick="ProfileValidation()" >Submit</button>
                <button type="reset" class="btn btn-primary">Reset</button>
                
              
  
</form>
</div>
  

    

</body>
</html>

