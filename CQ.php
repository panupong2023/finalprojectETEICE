<?php
    session_start();
    include_once 'connect.php';
    $sql="SELECT * FROM `cq` ";
    $result=mysqli_query($connect,$sql);
    if ($result)
    {
    // Return the number of rows in result set
     $rowcount=mysqli_num_rows($result)+1;
     $rowcount=strval($rowcount);
     $rowcount='Q00'.$rowcount;
  // Free result set
  mysqli_free_result($result);
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Quiz</title>
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
        Create Quiz
    </h1>
    <form action="CQ_db.php" method="post">
    <?php include('errors.php');?>
    <input type="hidden" id="Qid" name="Qid" value="<?php echo $rowcount ?>">
        <div class = "input-group">
            <label>ข้อสอบ11</label><br>
            <input type="text" name="Q"><br>
        </div>
        <div class = "input-group">
            <label>คำตอบที่ 1 </label><br>
            <input type="text" name="A1"><br>
        </div>
        <div class = "input-group">
            <label>คำตอบที่ 2</label><br>
            <input type="text" name="A2"><br>
        </div>
        <div class = "input-group">
            <label>คำตอบที่ 3</label><br>
            <input type="text" name="A3"><br>
        </div>
        <div class = "input-group">
            <label>คำตอบที่ 4</label><br>
            <input type="text" name="A4"><br>
        </div>
        <div class = "input-group">
            <label>เฉลย</label><br>
            <input type="text" name="ANS"><br>
        </div>
        <div class = "input-group">
            <button type="submit" name="CreateQ" class="bin">Create</button><br>
        </div>
        <p><a href = "logout.php">logout</a></p>
    </form>
</body>
</html>