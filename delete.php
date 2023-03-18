<?php
/*
    echo '<pre>';
    print_r($_GET);
    echo '</pre>';
exit;*/

    include('connect.php');
    $no = $_GET['no'];
    $sql = "DELETE FROM `tbl_pdf` WHERE `no` ='". $no ."'";
    $result = mysqli_query($connect,$sql) or die("error in sql : $sql".
                mysqli_error($connect));
        mysqli_close($connect);

     if($result){
         echo "<script type='text/javascript'>";
            echo "window.location = 'indexsd.php';";
        echo "</script>";
        }else{
            echo "<script type='text/javascript'>";
                echo "alert('error')";
                echo "window.location = 'indexsd.php';";
           echo "</script>";
           }
           
?>