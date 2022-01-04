<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thống kê y tế</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>

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
                        <li class="idex"><a href="themmoi_yte.php">Thêm mới</a></li>
                        <li><a href="capnhat_yte.php">Cập nhật</a></li>
                        <li><a href="thongke_yte.php">Thống kê</a></li>
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

    <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 220">
        <path fill="#dfe2f1" fill-opacity="1"
            d="M0,64L48,96C96,128,192,192,288,202.7C384,213,480,171,576,170.7C672,171,768,213,864,213.3C960,213,1056,171,1152,138.7C1248,107,1344,85,1392,74.7L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>

    <div class="container">
   

       <!-- =Y tế= -->

        <p id="point" data-aos="fade-down">Thông tin y tế</p>
        <div class="layout_tk_y_te">
            <div class="box_op" >
                <h3 id="title1">Thống kê theo</h3>

                <div class="form1">
                    <label class="box-lable">Khu vực</label>
                    <select name="" id="">
                        <option value="">TP.Cần Thơ</option>
                        <option value="">Sóc Trăng</option>
                        <option value="">Bạc Liêu</option>
                        <option value="">Hậu Giang</option>
                        <option value="">Cà Mau</option>
                    </select>
                </div>
            </div>
            <div class="box_view"  >
                <h3 id="title1">Kết quả</h3>
                <div class="box_around_chart">
                    <div class="box_percent">
                        <svg>
                            <circle cx="70" cy="70" r="70" ></circle>
                            <circle cx="70" cy="70" r="70" ></circle>
                          </svg>
                          <div class="box_number">
                              <h4>80<span>%</span></h4>
                          </div>
                          <div>
                             <h4 class="text" >Viên chức</h4>
                          </div>
                    </div>

                
                        <div class="box_percent">
                            <svg>
                                <circle cx="70" cy="70" r="70" ></circle>
                                <circle cx="70" cy="70" r="70" ></circle>
                              </svg>
                              <div class="box_number">
                                  <h4>80<span>%</span></h4>
                              </div>
                              <div>
                                 <h4 class="text" >Công nhân</h4>
                              </div>
                        </div>
                  

                
                        <div class="box_percent">
                            <svg>
                                <circle cx="70" cy="70" r="70" ></circle>
                                <circle cx="70" cy="70" r="70" ></circle>
                              </svg>
                              <div class="box_number">
                                  <h4>80<span>%</span></h4>
                              </div>
                              <div>
                                 <h4 class="text" >Lao động tự do</h4>
                              </div>
                    </div>
                    <span id="namebd2">Biểu đồ thống kê độ tuổi trung bình</span>
                </div>
            </div>
        </div>


        <div class="circle" id="circle1"></div>
        <div class="circle" id="circle2"></div>
        <div class="circle" id="circle3"></div>
        <div class="circle" id="circle4"></div>
        <div class="circle" id="circle5"></div>
        <div class="circle" id="circle6"></div>
        <div class="circle" id="circle7"></div>
        <div class="circle" id="circle8"></div>
    </div>





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

        $(function () {
            $('.bars li .bar').each(function (key, bar) {
                var percentage = $(this).data('percentage');
                $(this).animate({
                    'height': percentage + '%'
                }, 1000);
            });
        });
    </script>

    <script src="#"></script>

</body>

</html>