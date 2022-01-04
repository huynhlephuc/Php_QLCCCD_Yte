<?php 
	require_once "db.php";
	if (isset($_POST["dky"])) {
		
        $username = $_POST["username"];
        $password = $_POST["password"];
        $maCCCD= $_POST["maCCCD"];
        $maThue= $_POST["maThue"];
        $maBHYT= $_POST["maBHYT"];
	      $email =$_POST["email"];
        $SDT=$_POST["SDT"];
		    $sql ="INSERT INTO `tbl_taikhoan` (`tenDangNhap`, `matKhau`,`maCCCD`,`email`,`SDT`,`maThue`,`maBHYT`) VALUES ('$username','$password','$maCCCD','$email','$SDT','$maThue','$maBHYT')";
        
        if(mysqli_query($conn,$sql)){
            $message = "Đăng ký thành công";
            echo "<script type='text/javascript'>alert('$message');</script>";
			
		}
		else{

			echo "error";
		}
    }
    
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng kí</title>
    <link rel="stylesheet" href="css/dangnhap.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    
</head>
<body>
    <div class="container">

           <!-- Đăng kí -->
      <form action="adminaction.php" method="POST" class="signform">
        <h2 class="title">Đăng ký</h2>
  
        <div class="inputtt">
          <i class="fas fa-user"></i>
          <input type="text" name="tenDN" placeholder="Tên đăng nhập.." />
        </div>
  
        <div class="inputtt">
          <i class="fas fa-lock"></i>
          <input type="password" name="matKhau" placeholder="Mật khẩu.." />
        </div>
  
        <div class="inputtt">
          <i class="fas fa-archive"></i>
          <input type="text" name="maThue" placeholder="Mã Thuế.." />
        </div>
  
        <div class="inputtt">
          <i class="fas fa-envelope"></i>
          <input type="text" name="SDT" placeholder="Số điện thoại.." />
        </div>
  
        <div class="inputtt">
          <i class="fas fa-phone"></i>
          <input type="email"  name="email" placeholder="Email.." />
        </div>
        <div class="inputtt">
            <i class="fas fa-comments-dollar"></i>
          <input type="text" name="loaiTK" placeholder="Loại tài khoản.." />
        </div>
        <div class="inputtt">
            <i class="fas fa-comments-dollar"></i>
          <input type="text" name="maCCCD" placeholder="Mã CCCD.." />
        </div>
        <div class="inputtt">
            <i class="fas fa-comments-dollar"></i>
          <input type="text" name="maBHYT" placeholder="Mã BHYT.." />
        </div>
        

        
        <input type="submit" class="btn" name="themtk" value="Thêm tài khoản" />
        
      </form>
     
    </div>
   
</body>
</html>