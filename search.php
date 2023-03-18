<?php 
        session_start();
        if (!isset($_SESSION['username'])){
            $_SESSION['msg']="you must login frist";
            header('location: login.php ');
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
    <title>search page</title>
    <style>
        label{
            display:inline-block;
            width: 100px;
            margin-bottom: 10px;
        }
    </style>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <!-- ***** Preloader Start ***** -->
     <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="indexT.php" class="logo">
                            Exammine
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="indexT.php" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="upload_pdf.php">Upload</a></li>
                            <li class="scroll-to-section"><a href="#projects">About us</a></li>
                            <li class="scroll-to-section"><a href="search.php">Search</a></li> 
                            <li class="scroll-to-section"><a href="logout.php">Log out</a></li> 
                            <div class="search-icon">
                                <a href="#search"><i class="fa fa-search"></i></a>
                                <div id="search">
                                
                            
                                </div>
                            </div>
                        </ul>        
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    
    <div class="header">
    <h1>
        Search page
    </h1>
    </div>
    <div class="content">    
        <?php if(isset($_SESSION['success'])):?>
            <div class="success">
                <h3>
                    <?php
                        echo $_SESSION['success'] ;
                        unset($_SESSION['success']);
                    ?>
                </h3>
        <?php endif ?>
        <!-- login in user information-->
        <?php if (isset($_SESSION['username'])):?>
            <p>Welcome <strong><?php echo $_SESSION['username'];?></strong></p>
            <div class="left">
            <form method="get" id="form" enctype="multipart/form-data" action="" >
                                <strong> ค้นหารายการข้อสอบ </strong>
                                <input type="text" name="search" size="30" value=""> <br>
                                <input type="submit" value="ค้นหาข้อสอบ">
                            </form> 
<div style="margin: 50px 10px 50px; width: 100%;">
  <div class="col-md-3">
    <div class="pricing hover-effect" style="cursor: pointer; width: 450%;">
        <div class="pricing-head">
        <h3>รายการเอกสาร </h3>
                    <table class="table table-striped  table-hover table-responsive table-bordered">
                        <thead>
                            <tr>
                                <th width="5%">ลำดับ</th>
                                <th width="60%">ชื่อเอกสาร</th>
                                <th width="15%">เปิดดู</th>
                                <th width="20%">วันที่อัพโหลด</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //คิวรี่ข้อมูลมาแสดงในตาราง
                            require_once 'connect.php';
                            $search = isset($_GET['search']) ? $_GET['search']:'';
                            $stmt = $conn->prepare("SELECT* FROM tbl_pdf WHERE doc_name LIKE '%$search%' ");
                            $stmt->execute();
                            $result = $stmt->fetchAll();
                        
                        foreach($result as $row)
                        
                            {     
							?>
                            <tr>
                                <td><?= $row['no'];?></td>
                                <td><?= $row['doc_name'];?></td>
                                <td><a href="docs/<?php echo $row['doc_file'];?>" target="_blank" class="btn btn-info btn-sm"> เปิดดู </a></td>
                                <td><?= $row['dateCreate'];?></td>
                            <?php } ?>
                        </tbody>
                    </table>
                    <div id="pagination_controls"><?php echo $paginationCtrls; ?></div><br>
				</div>
				<div class="col-lg-2">
				</div>
				</div> 
        </div>
    </div>
</div>
</div>
</div> 

        <?php endif ?>
    </div>

</body>
</html>