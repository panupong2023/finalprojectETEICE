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
    <link href="style.css" rel="stylesheet">
    <script src="bootstrap-5.0.1-dist/js/bootstrap.min.js"></script>
    

    <!-- datatable -->
    <link href="http://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet">
    
    <!-- font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>About us</title>
    <style></style>
</head>
<body>

<div class="tbe">
    <!--navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" >
  <div class="container">
    <a class="navbar-brand" href="indexT.php">Exammine</a>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
        <div class="navbar-nav">
            <li class="scroll-to-section"><a href="indexT.php" class="active">Home</a></li>
            <li class="scroll-to-section"><a href="upload_pdf.php">Upload</a></li>
            <li class="scroll-to-section"><a href="aboutus.php">About us</a></li>
            <li class="scroll-to-section"><a href="toadmin.php">Report</a></li>
             
        </div>
    </div>
    <a class="navbar-brand">Welcome <strong><?php echo $_SESSION['username'];?></strong></a>
    <div class="navbar-nav">
            <li class="scroll-to-section"><a href="logout.php">Log out</a></li>  
        </div>
  </div>
</nav>

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
              
                
              </div>
    
            </div>
    </div>
    <div class="carousel-item">
      <img src="img/263753093_2246364578851839_7373537685028903384_n.png" class="d-block w-100" alt="">
      <div class="carousel-caption d-none d-md-block">
      <h5>Able to independently research the exam.</h5>
            <p></p>
              <div class="slider-btn">
              
                
              </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/263600425_1829619810572460_1762721871706113264_n.png" class="d-block w-100" alt="">
      <div class="carousel-caption d-none d-md-block">
      <h5>Exams can be published freely.</h5>
            <p></p>
              <div class="slider-btn">
             
                
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


        <script src = "https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src = "http://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script >
        $(document).ready( function () {
            $('#myTable').DataTable();
            } );
        </script>

<div class="tbe">
    <br>
    
    <div class="header">
    <br>
    <h1>
        About us
    </h1>
    </div>
    <div class="content justify-content-center" >    
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
            <!-- <p>Welcome <strong><?php echo $_SESSION['username'];?></strong></p>-->
            <br>
            </div>
        <!-- about us -->
        <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>About Examnine</h6>
                            <br><br>
                            <h2>สามารถค้นคว้าข้อสอบได้อย่างอิสระ</h2>
                            <h2>สามารถเผยแพร่ข้อสอบได้อย่างอิสระ</h2>
                            <h2>สามารถนำข้อสอบไปใช้ได้อย่างอิสระ</h2>
                            <h2>สามารถตรวจสอบที่มาของข้อสอบได้อย่างอิสระ</h2>
                        </div>
                        <div class="row">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-text-content">
                    <!-- about us -->  
                    <div class="section-heading">
                            <h6>Objective</h6>
                            <br><br>
                            <h2>เพื่อสร้างคลังข้อสอบที่มีความครอบคลุม</h2>
                            <h2>เพื่อสร้างคลังข้อสอบที่สามารถใช้งานได้ง่าย</h2>
                            <h2>เพื่อให้เกิดอิสระภาพในการค้นคว้าข้อสอบ</h2>
                            <h2>เพื่อเผยแพร่ข้อสอบทีมีคุณภาพให้ตรงความต้องการของผู้ใช้</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- ***** Testimonials Starts ***** -->
    <section class="section" id="testimonials">
        <div class="container">
            <div class="row">
                
                </div>
            </div>
        </div>
    </section>
    <br><br><br><br><br><br><br><br>
</div>
</div> 

        <?php endif ?>
    </div>
    
    <div class = "love">
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xs-12">
                    <div class="left-text-content">
                    <div class = "ss">
                        <p>@Copyright &copy; 2021 Examnine Co., Ltd. </p>
                    </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                
                                <li> <div class = "ss"><p>Follow Us</p> </div></li>
                                
                                <li><a rel="nofollow" href="https://fb.com/templatemo"><i class="fab fa-facebook"></i></a></li>
                                <li><a rel="nofollow" href="https://fb.com/templatemo"><i class="fab fa-twitter"></i></a></li>
                                <li><a rel="nofollow" href="https://fb.com/templatemo"><i class="fab fa-instagram"></i></a></li>
                                <li><a rel="nofollow" href="https://fb.com/templatemo"><i class="fab fa-tiktok"></i></a></li>
                            </ul>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    </div>

</body>
</html>