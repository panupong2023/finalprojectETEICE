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
    <link href="style.css" rel="stylesheet">

    <!-- font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Modal -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- datatable -->
    <link href="http://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet">

    <script src="bootstrap-5.0.1-dist/js/bootstrap.min.js"></script>
    <script></script>
    

    <title>Exammine</title>
    <style>
    
    </style>
</head>
<body>
<script src = "https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src = "http://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script >
        $(document).ready( function () {
            $('#myTable').DataTable();
            } );
        </script>
        
     <!--navbar -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="indexT.php">Exammine</a>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
        <div class="navbar-nav">
            <li class="scroll-to-section"><a href="indexT.php" class="active">Home</a></li>
            <li class="scroll-to-section"><a href="upload_pdf.php">Upload</a></li>
            <li class="scroll-to-section"><a href="aboutus.php">About us</a></li>
             
        </div>
    </div>
   
    <div class="navbar-nav">
            
            <!-- Button trigger modal -->
            <div class = "io"> 
            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
            Sign up
            </button>
            

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
            login
            </button>
            </div>

            
</nav>
</div>

    <!--slide ภาพ -->
 <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/pexels-rafael-cosquiere-2041540.jpg" class="d-block w-100" alt="">
            <div class="carousel-caption d-none d-md-block">
            <h5>Welcome to Exammine</h5>
            <p></p>
              <div class="slider-btn">
              <br><br><br><br><br><br><br><br><br><br>
                 <!-- Button trigger modal --><p>
            <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal1">
            @ExammineProject
            </button><p>
                
              </div>
    
            </div>
    </div>
    <div class="carousel-item">
      <img src="img/263753093_2246364578851839_7373537685028903384_n.png" class="d-block w-100" alt="">
      <div class="carousel-caption d-none d-md-block">
      <h5>Able to independently research the exam.</h5>
            <p></p>
              <div class="slider-btn">
              <br><br><br><br><br><br><br><br><br><br>
                 <!-- Button trigger modal --><p>
            <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal1">
            @ExammineProject
            </button><p>
                
              </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/263600425_1829619810572460_1762721871706113264_n.png" class="d-block w-100" alt="">
      <div class="carousel-caption d-none d-md-block">
      <h5>Exams can be published freely.</h5>
            <p></p>
              <div class="slider-btn">
              <br><br><br><br><br><br><br><br><br><br>
                 <!-- Button trigger modal --><p>
            <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal1">
            @ExammineProject
            </button><p>
                
              </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    <!--<h1>
        Exam mine
    </h1>-->
        <div class="yo">
          <!-- Modal -->
          <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ลงทะเบียน User </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="reg_user" class="btn btn-primary">Register</button>
                    </div>
                </form>
                </div>
                </div>
            </div>
        </div>
        </div>
  </div>
  
   

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">เข้าสู่ระบบ User </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                <form action="login_db.php" method="post">
                    <div class = "input-group">
                        <label>username</label>
                        <input type="text" name="username"><br>
                    </div>
                    <div class = "input-group">
                        <label>password</label>
                        <input type="password" name="password"><br>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" name="login_teacher" class="btn btn-primary">Login</button>
                    </div>
                </form> 
                </div>
                </div>
            </div>
        </div>
        


                 
            <!-- Modal -->
            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">เข้าสู่ระบบ Admin</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                <form action="adminlogin_db.php" method="post">
                    <div class = "input-group">
                        <label>username</label>
                        <input type="text" name="username"><br>
                    </div>
                    <div class = "input-group">
                        <label>password</label>
                        <input type="password" name="password"><br>
                    </div>
                
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="login_admin" class="btn btn-primary">Login</button>
                    </div>
                </form>
                </div>
                </div>
            </div>
            </div>
            <br>
    
    <div class="header">
    <h1>
        Exammine
    </h1>
    </div> <br>

            <!-- ตาราง -->
            
            <div class="container">
            <div style="margin: auto ; width: 100%; display: block; ">
            <div class="col-md-3">
            <div class="pricing hover-effect" style="cursor: pointer; width: 400%;">
            <div class="pricing-head">
        <h3>รายการเอกสาร </h3>
                    <table  id = "myTable">
                        <thead>
                            <tr>
                                <th >ลำดับ</th>
                                <th >ชื่อเอกสาร</th>
                                <th >เปิดดู</th>
                                <th >วันที่อัพโหลด</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //คิวรี่ข้อมูลมาแสดงในตาราง
                            require_once 'connect.php';
                            $stmt = $conn->prepare("SELECT* FROM tbl_pdf ");
                            $stmt->execute();
                            $result = $stmt->fetchAll();

                            
                    //แสดงผลตาราง
                        foreach($result as $row)
                        {?>
                            <tr>
                                <td><?= $row['no'];?></td>
                                <td><?= $row['doc_name'];?></td>
                                <td><a href="docs/<?php echo $row['doc_file'];?>" target="_blank" class="btn btn-info btn-sm"> เปิดดู </a></td>
                                <td><?= $row['dateCreate'];?></td>
                            <?php } ?>
                        </tbody>
                    </table>
				</div> 
            </div>
        </div>
        <br><br>
    </div>
    </div>










</body>
</html>