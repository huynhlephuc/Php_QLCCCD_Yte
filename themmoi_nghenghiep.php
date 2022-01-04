<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm mới nghề nghiệp</title>
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
                        <li><a href="index.php">Trang chủ</a></li>
                        <li><a href="timkiem.php">Tìm kiếm</a></li>
                        <li class="idex"><a href="themmoi_nghenghiep.php">Thêm mới</a></li>
                        <li><a href="capnhat_nghenghiep.php">Cập nhật</a></li>
                        <li><a href="thongke_nghenghiep.php">Thống kê</a></li>
                        <li class="sign-up"><a href="dangxuat.php">Đăng xuất</a></li>
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
                <button type="button">Bắt đầu</button>
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



        <div class="circle" id="circle1"></div>
        <div class="circle" id="circle2"></div>
        <div class="circle" id="circle3"></div>
        <div class="circle" id="circle4"></div>
        <div class="circle" id="circle5"></div>
        <div class="circle" id="circle6"></div>
        <div class="circle" id="circle7"></div>
        <div class="circle" id="circle8"></div>


        <!-- =========THÔNG TIN NGHỀ NGHIỆP============================================ -->

        <p id="point" data-aos="fade-up">Nhập thông tin nghề nghiệp</p>
        <div class="layout__nghe_nghiep">

            <!-- =========FORM THÔNG TIN CÔNG DÂN================== -->

            <form action="" class="form__layout1" data-aos="fade-right">
                <h3>Thông tin công nhân</h3>
                <div class="box1">
                    <label class="box-lable">Mã công dân</label>
                    <input type="text" id="" name="" placeholder="" require="" onchange="uernamecheck()">
                </div>
                <div class="box1">
                    <label class="box-lable">Họ và tên</label>
                    <input type="text" id="" name="" placeholder="" require="" onchange="uernamecheck()">
                </div>
                <div class="box2">
                    <label class="box-lable">Giới tính</label>
                    <input type="radio" class="che" name="gioitinh" id="" value="Nam">Nam
                    <input type="radio" class="che" name="gioitinh" id="" value="Nữ">Nữ
                    <input type="radio" class="che" name="gioitinh" id="" value="Khác">Khác
                </div>
                <div class="box1">
                    <label class="box-lable">Ngày sinh</label>
                    <input type="date" id="" name="" placeholder="" require="" onchange="uernamecheck()">
                </div>
            </form>

            <!-- ==========FORM THÔNG TIN NGHỀ NGHIỆP================= -->

            <form action="" class="form__layout1" data-aos="fade-left">
                <h3>Thông tin nghề nghiệp</h3>
                <div class="box1">
                    <label class="box-lable">Tên nghề nghiệp</label>
                    <input type="text" id="" name="" placeholder="" require="" onchange="uernamecheck()">
                </div>
                <div class="box1">
                    <label class="box-lable">Loại hình</label>
                    <select name="" id="">
                        <option value="">--Chọn--</option>
                        <option value="">Viên chức</option>
                        <option value="">Công nhân</option>
                        <option value="">Lao động tự do</option>
                    </select>
                </div>
                <div class="box1">
                    <label class="box-lable">Ghi chú</label>
                    <input type="text" id="" name="" placeholder="" require="" onchange="uernamecheck()">
                </div>
            </form>

            <!-- =========FORM TRÌNH ĐỘ HỌC VẤN================== -->

            <form action="" class="form__layout1" data-aos="fade-right">
                <h3>Thông tin trình độ học vấn</h3>
                <div class="box1">
                    <label class="box-lable">Tên bậc trình độ</label>
                    <select name="" id="">
                        <option value="">--Chọn--</option>
                        <option value="">Trung học cơ sở</option>
                        <option value="">Trung học phổ thông</option>
                        <option value="">Đại học</option>
                        <option value="">Sau đại học</option>
                    </select>
                </div>
                <div class="box1">
                    <label class="box-lable">Chuyên ngành</label>
                    <input type="text" id="" name="" placeholder="" require="" onchange="uernamecheck()">
                </div>
                <div class="box1">
                    <label class="box-lable">Ghi chú</label>
                    <input type="text" id="" name="" placeholder="" require="" onchange="uernamecheck()">
                </div>
            </form>

            <!-- ===========FORM THÔNG TIN BẰNG CẤP================ -->

            <form action="" class="form__layout1" data-aos="fade-left">
                <h3>Thông tin bằng cấp</h3>
                <div class="box1">
                    <label class="box-lable">Tên bằng</label>
                    <input type="text" id="" name="" placeholder="" require="" onchange="uernamecheck()">
                </div>
                <div class="box1">
                    <label class="box-lable">Ngày cấp</label>
                    <input type="date" id="" name="" placeholder="" require="" onchange="uernamecheck()">
                </div>
                <div class="box1">
                    <label class="box-lable">Ghi chú</label>
                    <input type="text" id="" name="" placeholder="" require="" onchange="uernamecheck()">
                </div>
            </form>

            <!-- ============FORM THÔNG TIN KHÁC=============== -->

            <form action="" class="form__layout1" data-aos="fade-up">
                <h3>Thông tin khác</h3>
                <div class="box1">
                    <label class="box-lable">Nơi công tác</label>
                    <input type="text" id="" name="" placeholder="" require="" onchange="uernamecheck()">
                </div>
                <div class="box1">
                    <label class="box-lable">Từ ngày</label>
                    <input type="date" id="" name="" placeholder="" require="" onchange="uernamecheck()">
                </div>
                <div class="box1">
                    <label class="box-lable">Đến ngày</label>
                    <input type="date" id="" name="" placeholder="" require="" onchange="uernamecheck()">
                </div>
                <div class="box1">
                    <label class="box-lable">Ghi chú</label>
                    <input type="text" id="" name="" placeholder="" require="" onchange="uernamecheck()">
                </div>
            </form>
        </div>
        <button class="btn" type="button" data-aos="fade-down">Thêm </button>


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