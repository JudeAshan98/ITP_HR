<?php
$connect = new mysqli("localhost", "root", "", "ITP_HR");
echo  "test0";
        if(isset($_POST['but_upload'])){
            echo  "test1";
          $name = $_FILES['file']['name'];
          $target_dir = "../IMG/vehicles/";
          $target_file = $target_dir . basename($_FILES["file"]["name"]);

          $Vehicle_type = $_POST['Vehicle_type'];
          $Reg_no       = $_POST['Reg_no'];

          // Select file type
          $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

          // Valid file extensions
          $extensions_arr = array("jpg","jpeg","png","gif");
         // Check extension
          if( in_array($imageFileType,$extensions_arr) ){
      
            $sql = "insert into vehicles(Vehicle_type,Reg_no,img_vehicle) values('$Vehicle_type','$Reg_no','".$target_dir.$name."')";
              echo  "test2";
              $result = mysqli_query($connect,$sql);
            // if (!$result) {
            //     printf("Error: %s\n", mysqli_error($connect));
            //     exit();
            // }
            // Upload file
            move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);

            header("refresh:1; url=dashboard.php");
      }
    }

?>