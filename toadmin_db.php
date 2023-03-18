<?php 
    session_start();
    include('connect.php');
    
    $errors = array();

    if (isset($_POST['toadmin'])) {
        $username = mysqli_real_escape_string($connect, $_POST['username']);
        $story = mysqli_real_escape_string($connect, $_POST['story']);
        $reason = mysqli_real_escape_string($connect, $_POST['reason']);
        $doc_name = mysqli_real_escape_string($connect, $_POST['doc_name']);
        $gid = $_POST['gid'];
        if (empty($username)) {
            array_push($errors, "Username is required");
            $_SESSION['error'] = "Username is required";
        }
        if (empty($story)) {
            array_push($errors, "story is required");
            $_SESSION['error'] = "story is required";
        }
        if (empty($reason)) {
            array_push($errors, "reason is required");
            $_SESSION['error'] = "reason is required";
        }
        if (empty($doc_name)) {
            array_push($errors, "doc_name is required");
            $_SESSION['error'] = "doc_name is required";
        }

        $user_check_query = "SELECT * FROM toadmin WHERE username = '$username' OR story = '$story' ";
        $query = mysqli_query($connect, $user_check_query);
        $result = mysqli_fetch_assoc($query);

        if ($result) { // if user exists
            if ($result['username'] === $username) {
                array_push($errors, "Username already exists");
            }
            if ($result['story'] === $story) {
                array_push($errors, "story already exists");
            }
        }

        if (count($errors) == 0) {
            $sql = "INSERT INTO toadmin  (username, story,reason,gid,doc_name) VALUES ('$username', '$story', '$reason','$gid','$doc_name')";
            mysqli_query($connect, $sql);

            $_SESSION['username'] = $username;
            $_SESSION['gid'] = $gid;
            header('location: toadmin.php');
        } else {
            header("location: toadmin.php");
        }
    }

?>
