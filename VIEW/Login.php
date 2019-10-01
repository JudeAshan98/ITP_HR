<?php
$error = "";
include("config.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $Emp_id = $_POST['Emp_id'];
    $mypassword = mysqli_real_escape_string($db,$_POST['password']);

    $sql = "SELECT 'Emp_id' FROM employee WHERE Emp_id = '$Emp_id' AND password = '$mypassword'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];
    
    if (!$result) {
        printf("Error: %s\n", mysqli_error($sql));
        exit();
    }
    
    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if($count == 1) {
        //   session_register("myusername");
        $_SESSION['login_user'] = $Emp_id;
        header("location: dashboard.php");
    }else {
        $error = "Your Login ID or Password is invalid";
    }
}
?>
<!DOCTYPE html>
<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../CSS/login.css" />
    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body style="background-image:url(../Img/log_back.png);background-size: cover;">
    <img src="../Img/cal-logo.png" style="margin-left:1%;margin-top:1%" />
    
    <div class="container-fluid">
        <div class="d-flex justify-content-center">
        <div class="col-4">
            <div style="background-color:#006bac; color:#FFFFFF; padding:15px; font-size:30px; ">
                <b style="text-align:center;margin-left:40%">Login</b>
            </div>
            <form action="" method="post">
                <br/>
                <br/>  
                    <input type="text" name="Emp_id" class="box" placeholder="User Name" required />
                <br/>
                
                    <input type="password" name="password" class="box" placeholder="password" required/>
                <br/>
                <br/>
                    <button type="submit" class="btn btn-primary btn-lg">Login</button>
                <div style="font-size:11px; color:#cc0000; margin-top:10px" align-content="center">
                    <?php echo $error; ?>
                </div>
                <br/>
            </form>
        </div>
        </div>
        </div>
        <!--</div>

    </div>-->

</body>
</html>
