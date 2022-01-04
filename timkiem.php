<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm kiếm</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d7d59571b2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>

    <div class="header">
        <div class="header-top">
            <div class="logo">
                <img src="img/logo.png" alt="">
            </div>
            <div class="navbar">
                <nav id="navLinks">
                    <i class="fas fa-times" onclick="hideMenu()"></i>
                    <ul>
                        <li><a href="index.php">Trang chủ</a></li>
                        <!-- <li class="idex"><a href="timkiem.html">Tìm kiếm</a></li>
                        <li><a href=".//dangnhap.html">Thêm mới</a></li>
                        <li><a href=".//dangnhap.html">Cập nhật</a></li>
                        <li><a href=".//dangnhap.html">Thống kê</a></li>
                        <li class="sign-up"><a href=".//dangnhap.html">Đăng nhập</a></li> -->
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

    <div class="container">
        
                    <div class="form__row">
                        <input class="form__input" id="search_sanpham" type="search" name="search1"  placeholder="Seacrh" onkeyup="search()">
                    </div>
        
                    <div id="card-sanpham" class="layout1">
            <h3>Thông tin y tế của bạn là:</h3>
            <table class="table">
        <thead>
            <tr>
                <th>Mã bảo hiểm y tế</th>
                <th>ID CCCD</th>               
                <th>Ngày tham gia</th>
                <th>Ngày hết hạn</th>
                <th>Mức hưởng bảo hiểm y tế</th>
            </tr>
        </thead>
        <tbody>
            
            <tr>
                <td></td> 
                <td></td>
                <td></td>
                <td></td>
                <td></td>
       
            </tr>
          
        </tbody>
        </table>
        </div>

    </div>


    <!-- =====================FOOTER============================== -->
    <div class="footer">
        <h4>About us</h4>
        <p>Trên đây là những thông tin về vai trò, nhiệm vụ cũng như những kỹ năng cần thiết khi thực hiện việc quản trị
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

    <script src="js/reposive_menu.js">

    </script>
</body>
<script>
 function search(){
      var idSanPham = document.getElementById('search_sanpham').value;
      $.post("timkiemaction.php",{search1:idSanPham},function(data){
          $("#card-sanpham").html(data); 
      });
      $.post("timkiemaction.php",{search1:idSanPham},function(data){
          $("#card-sanpham").html(data); 
      });
     
   }
</script>

</html>