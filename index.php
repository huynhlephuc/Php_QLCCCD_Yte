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
                        <?php if (isset($_SESSION["users"])){ ?>
                        <li><a href=".php">Thông tin BHYT</a></li>
                        <li><a href=".php">Thông tin BHTN</a></li>
                        <li><a href=".php">Thông tin bệnh án</a></li>
                        <li><a href="dangxuat.php">Đăng xuất</a></li>
                     
                        <?php }else if(isset($_SESSION["admin"])) { ?>                       
                        <li><a href=".//adminqltkpage.php">Quản lí tài khoản</a></li>
                        <li><a href=".//adminquanliyte.php">Quản lí y tế</a></li>
                        <li><a href=".//adminqltainan.php">Quản lí tai nạn</a></li>
                        <li><a href=".//adminquanlibenhan.php">Quản lí bệnh án</a></li>
                        <li><a href=".//thongke.php">Thống kê</a></li>
                        <li><a href="timkiem.php">Tìm kiếm</a></li>
                        <li><a href="dangxuat.php">Đăng xuất</a></li>
                     
                        
                     
                        <?php }else if(isset($_SESSION["qlyte"])) { ?>                        
                        <li><a href=".//quanliyte.php">Quản lí bảo hiểm y tế </a></li>
                        <li><a href=".//quanlitainan.php">Quản lí bảo hiểm tai nạn</a></li>
                        <li><a href=".//quanlibenhan.php">Quản lí bệnh án</a></li>
                        <li><a href="timkiem.php">Tìm kiếm</a></li>
                        <li><a href="dangxuat.php">Đăng xuất</a></li>
                     s
                        <?php }else if(isset($_SESSION["qlnghenghiep"])) { ?>
                        <li><a href="dangxuat.php">Đăng xuất</a></li>
                        <li><a href="timkiem.php">Tìm kiếm</a></li>
                        <li><a href=".//themmoi_nghenghiep.php">Thêm mới</a></li>
                        <li><a href=".//capnhat_nghenghiep.php">Cập nhật</a></li>
                        <li><a href=".//thongke_nghenghiep.php">Thống kê</a></li>
                     
                        <?php }
                        else { ?>
                        <li><a href="dnhap_username.php">Đăng nhập</a></li>
                        <li><a href="dky.php">Đăng ký</a></li>
                    

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
                </div>
                <!-- <button type="button">Bắt đầu</button> -->
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
    <!--T lam cai cong dan xem thong tin-->
 

    <!-- ==========CONTAINER1============= -->
    <div class="container1" >
        <h1  data-aos="fade-down" >Information about us</h1>
        <p  data-aos="fade-down"  >Phần mềm quản lý căn cước công dân mới nhất 2021</p>
        <div class="row" >
            <div class="container1-col"  data-aos="fade-up"  >
                <h3>Quản lý sơ yếu lí lịch</h3>
                <p>Hệ thống quản lý tất cả các thông tin về sơ yếu lí lịch theo chuẩn sơ yếu lí lịch về cán bộ như: Họ
                    và
                    tên, địa chỉ, điện thoại, nguyên quán, nơi đăng ký hộ khẩu, dân tộc, tôn giáo, trình độ học vấn,
                    trình độ
                    chuyên môn, ngoại ngữ, tin học.</p>
            </div>
            <div class="container1-col"  data-aos="fade-up" >
                <h3>Quản lý nghề nghiệp</h3>
                <p>Thông tin doanh nghiệp nhờ tính năng tìm kiếm. Mỗi ngành nghề được coi là 1 từ khóa, người truy cập
                    nhấp
                    chuột vào các ngành nghề thì module sẽ tìm kiếm trong phần địa điểm của doanh nghiệp với từ khóa là
                    địa danh
                    đó và liệt kê các doanh nghiệp tìm thấy ra.</p>
            </div>
            <div class="container1-col"  data-aos="fade-up" >
                <h3>Quản lý y tế</h3>
                <p>“Hộ chiếu vắc xin” thực chất là giấy chứng nhận đã tiêm chủng đầy đủ 2 mũi vắc xin phòng COVID-19,
                    được
                    điều chỉnh theo Luật Phòng, chống bệnh truyền nhiễm và Điều lệ kiểm dịch Y tế quốc tế.</p>
            </div>
        </div>
    </div>

    <!-- ==========CONTAINER2============= -->
    <div class="container2">
        <h1 id="ch"  data-aos="fade-down" >Why Choose Our CCCD</h1>
        <p  data-aos="fade-down" >Phần mềm quản lý căn cước công dân mới nhất 2021</p>
        <div class="row2"  data-aos="fade-down" >
            <div class="box">
                <div class="imgBx">
                    <img src="./img/men1.png" alt="">
                </div>
                <div class="text">
                    <p>Người quản lí có thể quản lý thông tin mọi lúc mọi nơi, dữ liệu được quản lý tập trung, bảo
                        mật, và an toàn tuyệt đối và tiết kiệm tối đa chi phí vận hành.</p>
                    <div class="rate">
                        <h3>Nguyễn Quốc Quân <br> Trương Văn Vàng </h3>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>

                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="./img/men1.png" alt="">
                </div>
                <div class="text">
                    <p>Giao diện đơn giản, thông minh, giúp quản lý thông tin mọi lúc mọi nơi với dữ liệu được bảo
                        mật an toàn
                        tuyệt đối, tiết kiệm tối đa chi phí vận
                        hành.
                    </p>
                    <div class="rate">
                        <h3>Trần Hải Đăng</h3>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="./img/men1.png" alt="">
                </div>
                <div class="text">
                    <p>Chúng tôi nghiên cứu thiết kế phần mềm phù hợp với nhiều mô hình chuyên nghiệp 2021, thân thiện,
                        thông minh giúp người dùng triển khai quản lý thật
                        dễ
                        dàng và nhanh chóng.</p>
                    <div class="rate">
                        <h3>Huỳnh Lê Hữu Phúc</h3>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==========CONTAINER3============= -->
    <div class="container3" data-aos="fade-down" >
        <h1>Some photos from Our CCCD</h1>
        <p>Phần mềm quản lý căn cước công dân mới nhất 2021</p>
        <div class="row3">
            <div class="wrapper">
                <div class="gallery">
                    <div class="image"><span><img src="./img/team4.jpg" alt=""></span></div>
                    <div class="image"><span><img src="./img/a2.jpg" alt=""></span></div>
                    <div class="image"><span><img src="./img/1.jpg" alt=""></span></div>
                    <div class="image"><span><img src="./img/a4.jpg" alt=""></span></div>
                    <div class="image"><span><img src="./img/a5.jpg" alt=""></span></div>
                    <div class="image"><span><img src="./img/a6.jpg" alt=""></span></div>
                    <div class="image"><span><img src="./img/a7.jpg" alt=""></span></div>
                    <div class="image"><span><img src="./img/a8.jpg" alt=""></span></div>
                    <div class="image"><span><img src="./img/a1.jpg" alt=""></span></div>
                </div>
            </div>
        </div>
    </div>

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