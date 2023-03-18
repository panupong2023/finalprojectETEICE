<?php 
    session_start();
    include('connect.php');

    $errors = array();

    if (isset($_POST['login_admin'])) {
        $username = mysqli_real_escape_string($connect, $_POST['username']);
        $password = mysqli_real_escape_string($connect, $_POST['password']);
        
        if (empty($username)) {
            array_push($errors, "Username is required");
        }

        if (empty($password)) {
            array_push($errors, "Password is required");
        }

        if (count($errors) == 0) {
            $password = ($password);
            $query = "SELECT * FROM `admin` WHERE username = '$username' AND password = '$password'";
            $result = mysqli_query($connect, $query);
            $records = mysqli_query($connect,"SELECT * FROM `admin` WHERE username = '$username' AND password = '$password'");
            $data = mysqli_fetch_array($records);
            $adminid = $data['adminid'];

            if (mysqli_num_rows($result) == 1) {
                $_SESSION['username'] = $username;
                $_SESSION['adminid'] = $adminid;
                $_SESSION['success'] = "Your are now logged in";
                header("location: indexsd.php");
            } else {
                array_push($errors, "Wrong Username or Password");
                $_SESSION['error'] = "Wrong Username or Password!";
                header("location: login.php");
            }
        } else {
            array_push($errors, "Username & Password is required");
            $_SESSION['error'] = "Username & Password is required";
            header("location: login.php");
        }
    }

?>
