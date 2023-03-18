<?php 
    session_start();
    include('connect.php');
    
    $errors = array();

    if (isset($_POST['CreateQ'])) {
        $Q = mysqli_real_escape_string($connect, $_POST['Q']);
        $A1 = mysqli_real_escape_string($connect, $_POST['A1']);
        $A2 = mysqli_real_escape_string($connect, $_POST['A2']);
        $A3 = mysqli_real_escape_string($connect, $_POST['A3']);
        $A4 = mysqli_real_escape_string($connect, $_POST['A4']);
        $ANS = mysqli_real_escape_string($connect, $_POST['ANS']);
        $Qid = $_POST['Qid'];

        if (empty($Q)) {
            array_push($errors, "Q is required");
            $_SESSION['error'] = "Q is required";
        }
        if (empty($A1)) {
            array_push($errors, "A1 is required");
            $_SESSION['error'] = "A1 is required";
        }
        if (empty($A2)) {
            array_push($errors, "A2 is required");
            $_SESSION['error'] = "A2 is required";
        }
        if (empty($A3)) {
            array_push($errors, "A3 is required");
            $_SESSION['error'] = "A3 is required";
        }
        if (empty($A4)) {
            array_push($errors, "A4 is required");
            $_SESSION['error'] = "A4 is required";
        }
        if (empty($ANS)) {
            array_push($errors, "ANS is required");
            $_SESSION['error'] = "ANS is required";
        }

        $user_check_query = "SELECT * FROM `cq` WHERE Q = '$Q' OR ANS = '$ANS'";
        $query = mysqli_query($connect, $user_check_query);
        $result = mysqli_fetch_assoc($query);

        if ($result) { // if user exists
            if ($result['Q'] === $Q) {
                array_push($errors, "Q already exists");
            }
            if ($result['ANS'] === $ANS) {
                array_push($errors, "ANS already exists");
            }
        }

        if (count($errors) == 0) {

            $sql = "INSERT INTO `cq` (Qid,Q,A1,A2,A3,A4,ANS) VALUES ('$Qid','$Q','$A1','$A2','$A3','$A4','$ANS')";
            mysqli_query($connect, $sql);
            $_SESSION['success'] = "You are now Create complete";
            header('location: CQ.php');
        } else {
            header("location: register.php");
        }
    }

?>
