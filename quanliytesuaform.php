
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
                <!-- <a href="quanlihomepage.php" class="btn btn-danger">Home</a> -->
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

            

            <!-- ============FORM BẢO HIỂM TAI NẠN=============== -->
            <?php
                include "db.php";
                if(isset($_GET['edit1'])){
                $maBHYT=$_GET['edit1'];
                $sql="select * from tbl_ttbhyt where maBHYT='$maBHYT'";
                $data= $conn->query($sql) or die($conn->error);              
                $row=$data->fetch_array(); 
                
                // tên biến = [tên các thuộc tính trong databasse]
                
                
                
                
                $maBHYT=$row['maBHYT'];
                $maCCCD=$row['maCCCD'];
                $ngayThamGiaBHYT=$row['ngayThamGia'];
                $ngayHetHanBHYT=$row['ngayHetHan'];
                $mucHuongBHYT=$row['mucHuongBHYT'];
                $update=0;

                }?>

            <form action="quanlisuaformyteaction.php?edit1=<?php echo $value["maBHYT"]; ?>" method="POST" class="form__layout1" data-aos="fade-left">
                <h3>Thông tin BHYt</h3>
                <div class="box1">
                    <label class="box-lable">Mã BHYT</label>
                    <input type="text" id="" name="maBHYT" value="<?php echo $maBHYT;?>" placeholder="" require="" onchange="uernamecheck()">
                </div>
                <div class="box1">
                    <label class="box-lable">Mã CCCD</label>
                    <input type="text" id="" name="maCCCD" value="<?php echo $maCCCD;?>" placeholder="" require="" onchange="uernamecheck()">
                </div>
                <div class="box1">
                    <label class="box-lable">Ngày tham gia</label>
                    <input type="date" id="" name="ngayThamGiaBHYT" value="<?php echo $ngayThamGiaBHYT;?>"   onchange="uernamecheck()">
                </div>
                <div class="box1">
                    <label class="box-lable">Ngày hết hạn</label>
                    <input type="date" id="" name="ngayHetHanBHYT" value="<?php echo $ngayHetHanBHYT;?>"   onchange="uernamecheck()">
                </div>
                <div class="box1">
                    <label class="box-lable">Mức hưởng</label>
                    <input type="text" id="" name="mucHuongBHYT" value="<?php echo $mucHuongBHYT;?>" placeholder=""  require="" onchange="uernamecheck()">
                </div>
                <input type="submit" class="btn" name="suayte" value="Sửa" />
            </form>
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