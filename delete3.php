<?php
/*
    echo '<pre>';
    print_r($_GET);
    echo '</pre>';
exit;*/

    include('connect.php');
    $gid = $_GET['gid'];
    $sql = "DELETE FROM `toadmin` WHERE gid ='". $gid ."'";
    $result = mysqli_query($connect,$sql) or die("error in sql : $sql".
                mysqli_error($connect));
        mysqli_close($connect);

     if($result){
         echo "<script type='text/javascript'>";
            echo "window.location = 'fromuser.php';";
        echo "</script>";
        }else{
            echo "<script type='text/javascript'>";
                echo "alert('error')";
                echo "window.location = 'formuser.php';";
           echo "</script>";
           }
           //GG
?>