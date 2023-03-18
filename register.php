<?php

    include_once 'connect.php';
    $sql="SELECT * FROM user ";
    $result=mysqli_query($connect,$sql);
    if ($result)
    {
    // Return the number of rows in result set
     $rowcount=mysqli_num_rows($result)+1;
     $rowcount=strval($rowcount);
     $rowcount='U00'.$rowcount;
  // Free result set
  mysqli_free_result($result);
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Bootstrap CSS -->
    <link href="bootstrap-5.0.1-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/index_style.css" rel="stylesheet">
    <script src="bootstrap-5.0.1-dist/js/bootstrap.min.js"></script>
    <script>
        
    </script>
    <title>Register</title>
    <style>
        label{
            display:inline-block;
            width: 100px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>
        Register
    </h1>
    <form action="register_db.php" method="post">
    <?php include('errors.php');?>
    <input type="hidden" id="userid" name="userid" value="<?php echo $rowcount ?>">
        <div class = "input-group">
            <label>username</label>
            <input type="text" name="username"><br>
        </div>
        <div class = "input-group">
            <label>password</label>
            <input type="password" name="password_1"><br>
        </div>
        <div class = "input-group">
            <label>password</label>
            <input type="password" name="password_2"><br>
        </div>
        <div class = "input-group">
            <label>email</label>
            <input type="text" name="email"><br>
        </div>
        <div class = "input-group">
            <button type="submit" name="reg_user" class="bin">register</button><br>
        </div>
        <p>already a member? <a href = "login.php">Login</a></p>
    </form>
</body>
</html>