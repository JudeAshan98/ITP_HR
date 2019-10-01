
<!DOCTYPE html>
<html>
<head>

<title>image upload</title>
</head>
</body>
    <?php
        $connect = new mysqli("localhost", "root", "", "ITP_HR"); 
        if(isset($_POST['btn'])){
            $name1 = $_FILES['myfile']['name'];
            $type1 =$_FILES['myfile']['type'];
          $data1 = base64_encode(file_get_contents($_FILES['myfile']['tmp_name']));
          $sql = "INSERT INTO img (name,mime,data)values('$name1','$type1','$data1')";

        //   $stmt->bind_param(1,$name);
        //   $stmt->bindParam(2,$type);
        //   $stmt->bindParam(3,$data);
        //   $stmt->execute();
        if($connect-> query($sql))
        {
            //echo "New record is inserted sucessfully";
         //   header("refresh:1; url=dashboard.php");
        }
        else{
            echo "Error: " . $sql . "<br>" . $connect->error;
        }

        }
    ?>

    <form method="POST" enctype="multipart/form-data">
           <input type="file" name ="myfile">
           <button name="btn">Upload</button> 
    </form>


</body>
</html>