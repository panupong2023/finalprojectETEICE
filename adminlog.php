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
    <title>login</title>
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
        Admin Login
    </h1>
    <form action="adminlogin_db.php" method="post">
    <div class = "input-group">
            <label>username</label>
            <input type="text" name="username"><br>
        </div>
        <div class = "input-group">
            <label>password</label>
            <input type="password" name="password"><br>
        </div>
        <div class = "input-group">
            <button type="submit" name="login_admin" class="bin">login</button><br>
        </div>
    </form>
</body>
</html>