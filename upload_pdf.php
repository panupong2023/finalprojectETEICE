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
    <script></script>
    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- sweet alert  -->
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

        <title>Upload page</title>
    </head>
    
    <body>

    <div class="tbe">
      <!--navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
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


        <div class="container">
            <div class="row">
              <div class="col-md-1"></div>
                <div class="col-md-10"> <br>
                <div class="header"><br>
                    <h1>Upload PDF File</h1>
    </div>
                    <br><br><br>
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="text" name="doc_name" required class="form-control" placeholder="ชื่อเอกสาร"> <br>
                         <font color="red">*อัพโหลดได้เฉพาะ .pdf เท่านั้น </font>
                        <input type="file" name="doc_file" required   class="form-control" accept="application/pdf"> <br>
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </form>
                    <br>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br>
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

<?php 

if (isset($_POST['doc_name'])) {
    require_once 'connect.php';
     //สร้างตัวแปรวันที่เพื่อเอาไปตั้งชื่อไฟล์ใหม่
    $date1 = date("Ymd_His");
    //สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
    $numrand = (mt_rand());
    $doc_file = (isset($_POST['doc_file']) ? $_POST['doc_file'] : '');
    $upload=$_FILES['doc_file']['name'];

    //มีการอัพโหลดไฟล์
    if($upload !='') {
    //ตัดขื่อเอาเฉพาะนามสกุล
    $typefile = strrchr($_FILES['doc_file']['name'],".");

    //สร้างเงื่อนไขตรวจสอบนามสกุลของไฟล์ที่อัพโหลดเข้ามา
    if($typefile =='.pdf'){

    //โฟลเดอร์ที่เก็บไฟล์ **สร้างไฟล์ index.php หรือ index.html (ไม่ต้องมี code) ไว้ในโฟลเดอร์ด้วยนะครับจะได้ป้องกันการเข้าถึงทุกไฟล์ในโฟลเดอร์
    $path="docs/";
    //ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
    $newname = 'doc_'.$numrand.$date1.$typefile;
    $path_copy=$path.$newname;
    //คัดลอกไฟล์ไปยังโฟลเดอร์
    move_uploaded_file($_FILES['doc_file']['tmp_name'],$path_copy); 

     //ประกาศตัวแปรรับค่าจากฟอร์ม
    $doc_name = $_POST['doc_name'];
    
    //sql insert
    $stmt = $conn->prepare("INSERT INTO tbl_pdf (doc_name, doc_file)
    VALUES (:doc_name, '$newname')");
    $stmt->bindParam(':doc_name', $doc_name, PDO::PARAM_STR);
    $result = $stmt->execute();
    $conn = null; //close connect db
    //เงื่อนไขตรวจสอบการเพิ่มข้อมูล
            if($result){
                echo '<script>
                     setTimeout(function() {
                      swal({
                          title: "อัพโหลดไฟล์เอกสารสำเร็จ",
                          type: "success"
                      }, function() {
                          window.location = "upload_pdf.php"; //หน้าที่ต้องการให้กระโดดไป
                      });
                    }, 1000);
                </script>';
            }else{
               echo '<script>
                     setTimeout(function() {
                      swal({
                          title: "เกิดข้อผิดพลาด",
                          type: "error"
                      }, function() {
                          window.location = "upload_pdf.php"; //หน้าที่ต้องการให้กระโดดไป
                      });
                    }, 1000);
                </script>';
            } //else ของ if result

        
        }else{ //ถ้าไฟล์ที่อัพโหลดไม่ตรงตามที่กำหนด
            echo '<script>
                         setTimeout(function() {
                          swal({
                              title: "คุณอัพโหลดไฟล์ไม่ถูกต้อง",
                              type: "error"
                          }, function() {
                              window.location = "upload_pdf.php"; //หน้าที่ต้องการให้กระโดดไป
                          });
                        }, 1000);
                    </script>';
        } //else ของเช็คนามสกุลไฟล์
   
    } // if($upload !='') {

    } //isset
?>