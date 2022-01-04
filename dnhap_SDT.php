<?php 
  session_start();
  require_once "db.php";
  $sql ="SELECT *FROM tbl_taikhoan";
  $result = mysqli_query($conn,$sql);

if (isset($_POST["dnhap"])) {
		if (empty($_POST["SDT"])|| empty($_POST["password"])) {
			$message = "Chưa nhập tài khoản hoặc mật khẩu";
			echo "<script type='text/javascript'>alert('$message');</script>";
		
		}
		else{

			$SDT = $_POST["SDT"];
			$password = $_POST["password"];
      $qr ="SELECT * FROM tbl_taikhoan WHERE SDT='".$SDT."'AND matKhau='".$password."' limit 1";
			$result = mysqli_query($conn,$qr);
			foreach ($result as  $value) {
				$password = $value["password"];
				$phanquyen =$value["loaiTK"];
			}
      if(mysqli_num_rows($result)==1){
        if ($phanquyen == 1){
          $_SESSION["password"] = $password;
          $_SESSION["admin"]=$SDT;
          // echo $_SESSION["password"];
        header("location:index.php");
      }else if($phanquyen == 0){
          $_SESSION["password"] = $password;
          $_SESSION["users"]=$SDT;
          // echo $_SESSION["password"];
          header("location:index.php");
        }
          else if($phanquyen == 3){
            $_SESSION["password"] = $password;
            $_SESSION["qlyte"]=$SDT;
            // echo $_SESSION["password"];
            header("location:index.php");
          }	
          else if($phanquyen == 4){
            $_SESSION["password"] = $password;
            $_SESSION["qlnghenghiep"]=$SDT;
            // echo $_SESSION["password"];
            header("location:index.php");
          }		
	
      }else{
					$message = "Tài khoản hoặc mật khẩu không tồn tại";
					echo "<script type='text/javascript'>alert('$message');</script>";
				}
  }
} 

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Đăng nhập SDT</title>
  <link rel="stylesheet" href="css/dangnhap.css" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
  <div class="container">
    <!-- Đăng nhập -->
    <form action="" class="login">
      <h2 class="title">Đăng nhập</h2>

<div class="box" id="box_phone">
    
        <div class="inputtt">
          <i class="fas fa-phone"></i>
          <input type="text" name="SDT" placeholder="SDT" />
        </div>
        <div class="inputtt">
          <i class="fas fa-lock"></i>
          <input type="password" name="password" placeholder="Mật khẩu.." />
        </div>
      </div>



      <input type="submit" value="Đăng nhập" name="dnhap" class="btn solid" />
      <div class="extra">
        <p class="title1">Đăng nhập với</p>
        <a href="dnhapgmail.php">   <i class="fab fa-google btn_gmail"></i></a>
        <a href="dnhap_CCCD.php">  <i  class="fas fa-digital-tachograph btn_CCCD"></i></a>
      
      </div>
      <a id="dki" href="dky.php">Đăng kí</a>




  </div>




</body>

</html>