<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm mới y tế</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;600;700&family=Playfair+Display:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>

    <div class="header">
        <div class="header-top">
            <div class="logo">
                <img src="img/logo.png" alt="">
            </div>
            <div class="navbar">
                <nav>
                    <ul>
                        <!-- <li><a href="index.php">Trang chủ</a></li>
                        <li><a href="timkiem.php">Tìm kiếm</a></li>
                        <li class="idex"><a href="themmoi_yte.php">Thêm mới</a></li>
                        <li><a href="capnhat_yte.php">Cập nhật</a></li>
                        <li><a href="thongke_yte.php">Thống kê</a></li>
                        <li class="sign-up"><a href="dangxuat.php">Đăng xuất</a></li> -->
                    </ul>
                </nav>
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
    <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 150">
        <path fill="#dfe2f1" fill-opacity="1"
            d="M0,128L48,117.3C96,107,192,85,288,90.7C384,96,480,128,576,133.3C672,139,768,117,864,101.3C960,85,1056,75,1152,80C1248,85,1344,107,1392,117.3L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>


    <div class="container">

        <!-- ========THÔNG TIN Y TẾ=================================================== -->
        <p id="point" data-aos="fade-up">Nhập thông tin y tế</p>
        <div class="layout__y_te">

            <!-- ==========FORM THÔNG TIN CÔNG DÂN================= -->

            

            <!-- ===========FORM BỆNH ÁN================ -->

            <form action="qlbenhanaction.php" method="POST" class="form__layout1" data-aos="fade-left">
                <h3>Thông tin bệnh án</h3>
                <div class="box1">
                    <label class="box-lable">Mã hồ sơ</label>
                    <input type="text" id="" name="maHoSoBenhAn" placeholder="" require="" onchange="uernamecheck()">
                </div>
                <div class="box1">
                    <label class="box-lable">Mã CCCD</label>
                    <input type="text" id="" name="maCCCD" placeholder="" require="" onchange="uernamecheck()">
                </div>
                <div class="box1">
                    <label class="box-lable">Ngày đi khám</label>
                    <input type="date" id="" name="ngayDiKham" placeholder="" require="" onchange="uernamecheck()">
                </div>
                <div class="box1">
                    <label class="box-lable">Tên bệnh</label>
                    <input type="text" id="" name="tenBenh" placeholder="" require="" onchange="uernamecheck()">
                    
                </div>
                <div class="box1">
                    <label class="box-lable">Tên bệnh viện</label>
                    <input type="text" id="" name="tenBenhVien" placeholder="" require="" onchange="uernamecheck()">
                </div>
                <div class="box1">
                    <label class="box-lable">Viện phí</label>
                    <input type="text" id="" name="vienPhi" placeholder="" require="" onchange="uernamecheck()">
                </div>
                <div class="box1">
                    <label class="box-lable">Nhập viện</label>
                    <input type="text" id="" name="nhapVien" placeholder="" require="" onchange="uernamecheck()">
                </div>
                <div class="box1">
                    <label class="box-lable">Ngày nhập viện</label>
                    <input type="date" id="" name="ngayNhapVien" placeholder="" require="" onchange="uernamecheck()">
                </div>
                <div class="box1">
                    <label class="box-lable">Ngày xuất viện</label>
                    <input type="date" id="" name="ngayXuatVien" placeholder="" require="" onchange="uernamecheck()">
                </div>
                <div class="box1">
                    <label class="box-lable">Thuốc đã lãnh</label>
                    <input type="text" id="" name="thuocDaLanh" placeholder="" require="" onchange="uernamecheck()">
                </div>
                <div class="box1">
                    <label class="box-lable">Tiền bảo hiểm y tế</label>
                    <input type="text" id="" name="tienBHYT" placeholder="" require="" onchange="uernamecheck()">
                </div>
                <div class="box1">
                    <label class="box-lable">Tiền bảo hiểm tai nạn</label>
                    <input type="text" id="" name="tienBHTN" placeholder="" require="" onchange="uernamecheck()">
                </div>
                <div class="box1">
                    <label class="box-lable">Số tiền thực tế trả</label>
                    <input type="text" id="" name="soTienThucTePhaiTra" placeholder="" require="" onchange="uernamecheck()">
                </div>
                <input type="submit" class="btn" name="qlthembenhan" value="Thêm" />

            </form>

            <!-- =============FORM BẢO HIỂM Y TẾ============== -->

            
            <!-- ============FORM BẢO HIỂM TAI NẠN=============== -->

            
        </div>
        

        <!-- =====================FOOTER============================== -->
        <div class="footer">
            <h4>About us</h4>
            <p>Trên đây là những thông tin về vai trò, nhiệm vụ cũng như những kỹ năng cần thiết khi thực hiện việc quản
                trị
                website CCCD. <br> Nếu doanh nghiệp của bạn không thể tự thực hiện các công việc liên quan đến quản trị
                website, <br> hãy
                tìm đến một đơn vị cung cấp dịch vụ quản trị website CCCD.</p>
            <div class="icons">
                <i class=" fa fa-facebook"></i>
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
        <script src="./js/bubble.js"></script>

</body>

</html>