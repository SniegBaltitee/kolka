<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
   include_once($_SERVER["DOCUMENT_ROOT"]."/database_config.php");
   if (isset($_POST['username']) and isset($_POST['password'])){
   $username = $_POST['username'];
   $password = $_POST['password'];
   $query = "SELECT * FROM `users` WHERE username='$username' and password='$password'";
    
   $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
   $count = mysqli_num_rows($result);
   if ($count == 1){
   $_SESSION['username'] = $username;
   }else{
     echo '<div class="alert">';
     echo'<span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span>';
     echo '<strong>Error! </strong>Invalid login credentials!</div>';
   }
   }
   if (isset($_SESSION['username'])){
   $username = $_SESSION['username'];
   header('Location: /admin-panel');
    
   }else{
   }
   
   ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper" style="margin: auto">
        <h2>Kolka Admin</h2>
        <p>Please fill in your credentials to login.</p>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control">
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
        </form>
    </div>
</body>
</html>