<?php 
require_once "db.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d7d59571b2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>

    <!-- ==========HEADER========================================================== -->
    <div class="header">
        <div class="header-top">
            <div class="logo">
                <img src="img/logo.png" alt="">
            </div>
            <div class="navbar">
                <nav id="navLinks">
                    <i class="fas fa-times" onclick="hideMenu()"></i>
                    <ul>
                        <li class="idex"><a href="index.php">Trang chủ</a></li>
                        <!-- <li><a href="timkiem.php">Tìm kiếm</a></li> -->
                        <?php if (isset($_SESSION["users"])){ ?>
                        <li><a href="dangxuat.php">Đăng xuất</a></li>
                     
                        <?php }else if(isset($_SESSION["admin"])) { ?>
                        <li><a href=".//adminqltkpage.php">Quản lí tài khoản</a></li>
                        <li><a href=".//adminquanliyte.php">Quản lí y tế</a></li>
                        <li><a href=".//adminqltainan.php">Quản lí tai nạn</a></li>
                        <li><a href=".//adminquanlibenhan.php">Quản lí bệnh án</a></li>
                        <li><a href=".//thongke.php">Thống kê</a></li>
                        <li><a href="timkiem.php">Tìm kiếm</a></li>
                        <li><a href="dangxuat.php">Đăng xuất</a></li>
                     
                     
                        <?php }else if(isset($_SESSION["qllylich"])) { ?>
                        <li><a href="dangxuat.php">Đăng xuất</a></li>
                        <li><a href=".//themmoi_lilich.php">Thêm mới</a></li>
                        <li><a href=".//capnhat_lilich.php">Cập nhật</a></li>
                        <li><a href=".//thongke_lilich.php">Thống kê</a></li>
                     
                        <?php }else if(isset($_SESSION["qlyte"])) { ?>
                        <li><a href="dangxuat.php">Đăng xuất</a></li>
                        <li><a href=".//themmoi_yte.php">Thêm mới</a></li>
                        <li><a href=".//capnhat_yte.php">Cập nhật</a></li>
                        <li><a href=".//thongke_yte.php">Thống kê</a></li>
                     s
                        <?php }else if(isset($_SESSION["qlnghenghiep"])) { ?>
                        <li><a href="dangxuat.php">Đăng xuất</a></li>
                        <li><a href=".//themmoi_nghenghiep.php">Thêm mới</a></li>
                        <li><a href=".//capnhat_nghenghiep.php">Cập nhật</a></li>
                        <li><a href=".//thongke_nghenghiep.php">Thống kê</a></li>
                     
                        <?php }
                        else { ?>
                        <li><a href="dnhap_username.php">Đăng nhập</a></li>
                    

                     <?php } ?>
                    </ul>
                </nav>
                <i class="fas fa-bars" onclick="showMenu()"></i>
            </div>
        </div>
        <div class="header-main">
            <div class="main">
                <div class="main-list">
                    <h1>Management program <span>CCCD</span> </h1>
                    <p>Hệ thống quản lý căn cước công dân</p>
                    <!-- <a href="adminhomepage.php" class="btn btn-danger">Home</a> -->
                </div>
                
            </div>
        </div>
        <div class="bubbles">
            <img src="img/light.png" alt="">
            <img src="img/light.png" alt="">
            <img src="img/light.png" alt="">
            <img src="img/light.png" alt="">
            <img src="img/light.png" alt="">
            <img src="img/light.png" alt="">
            <img src="img/light.png" alt="">
        </div>
    </div>

    <svg  class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200">
        <path fill="#dfe2f1" fill-opacity="1" d="M0,128L48,117.3C96,107,192,85,288,90.7C384,96,480,128,576,133.3C672,139,768,117,864,101.3C960,85,1056,75,1152,80C1248,85,1344,107,1392,117.3L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
      </svg>
   
    <!-- ==========CONTAINER======================= -->

    <!-- ==========CONTAINER1============= -->
    <div  class="adduser">
    
    <td>
                    
        <a href="adminthembhtnform.php">+ Thêm thông tin BHTN</a>
    </td>


</div>

<!-------------  bắt đầu Thêm + Xóa -------------->
<!-----thêm xóa thông tin y tế công dân-------->
<div style="width:80%;margin:0 auto;">
    <table class="table">
        <?php
            $servername = "localhost";
            $username1 = "root";
            $password1 = "";
            $dbname = "qlcccd";
            
            $maBHTN="";
            $maCCCD="";
            $ngayThamGia="";
            $ngayHetHan="";
            $mucHuongBHTN="";
            $update=0;
            

            // Create connection

            $conn = new mysqli($servername, $username1, $password1,$dbname);
            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            $sql="select * from tbl_ttbhtn";
            $data=$conn->query($sql);
            
        ?>
        <thead>
            <tr>
                <th>Mã BHTN</th>
                <th>Mã CCCD</th>               
                <th>Ngày tham gia</th>
                <th>Ngày hết hạn</th>
                <th>Mức hưởng BHTN</th>
                <th>Xóa</th>
                <th>Cập nhật</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $data->fetch_assoc()):?>
            <tr>
                <td><?php echo $row['maBHTN']?></td> 
                <td><?php echo $row['maCCCD']?></td>
                <td><?php echo $row['ngayThamGia']?></td>
                <td><?php echo $row['ngayHetHan']?></td>
                <td><?php echo $row['mucHuongBHTN']?></td>
                
                <td>
                    
                    <a href="adminqltainanaction.php?xoabhtn=<?php echo $row['maBHTN'];?>" class="btn btn-danger">Xóa</a>
                </td>
                
                <td>
                
                    
                    <a href="adminsuatainan.php?edit1=<?php echo $row['maBHTN'];?>" class="btn btn-danger">Sửa</a>
                </td>
            </tr>
            <?php endwhile; 

            ?>
        </tbody>
        </table>
        </div>

    <!-- hết thêm + xóa tài khoản --------->
    <!-- ==========CONTAINER4============= -->
    <div class="container4"  data-aos="fade-up">
        <h1  >Contact CCCD</h1>
        <p>Phần mềm quản lý căn cước công dân mới nhất 2021</p>
        <button type="button" onclick="lienhe()">Contact</button>
    </div>
    <div class="circle" id="circle1"></div>
    <div class="circle" id="circle2"></div>
    <div class="circle" id="circle3"></div>
    <div class="circle" id="circle4"></div>
    <div class="circle" id="circle5"></div>
    <div class="circle" id="circle6"></div>
    <div class="circle" id="circle7"></div>
    <div class="circle" id="circle8"></div>

    <!-- ==========FOOTER========================================================== -->
    <div class="footer">
        <h4>About us</h4>
        <p>Trên đây là những thông tin về vai trò, nhiệm vụ cũng như những kỹ năng cần thiết khi thực hiện việc quản trị
            website CCCD. <br> Nếu doanh nghiệp của bạn không thể tự thực hiện các công việc liên quan đến quản trị
            website, <br> hãy
            tìm đến một đơn vị cung cấp dịch vụ quản trị website CCCD.</p>
        <div class="icons">
            <i id="ic" class=" fa fa-facebook"></i>
            <i class=" fa fa-twitter"></i>
            <i class=" fa fa-instagram"></i>
            <i class=" fa fa-linkedin"></i>
        </div>
        <div class="last">
            <p>Được thực hiện <i class=" fa fa-heart-o"></i> bởi nhóm KTPM0118</p>
        </div>
    </div>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 400,
            duration: 1000
        });
    </script>
    <script src="./js/reposive_menu.js"></script>
    <script>
        function lienhe(){
            location.assign("lienhe.php");
        }
    </script>
   

</body>

</html>