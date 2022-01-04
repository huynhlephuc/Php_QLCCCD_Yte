<?php
    include "db.php";

    

    $idtk="";
    $tenDN="";
    $pass="";
    $maThue="";
    $phone="";
    $email="";
    $loaiTK="";
    $update=0;
    $cmnd="";
    $maBHYT="";
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

    <!-- Bắt đầu cập nhât tài khoản-->
    <?php
            if(isset($_GET['edit'])){}
            $idtk= $_GET['edit'];
            $sql="SELECT *FROM tbl_taiKhoan WHERE id_taiKhoan='$idtk'";
            $type = mysqli_query($conn,$sql);
            foreach($type as $value) {?> 
            
          

           <!-- Đăng kí -->
      <form action="adminaction.php?edit=<?php echo $value["id_taiKhoan"]; ?>" method="POST" class="signform">
        <h2 class="title">Sửa tài khoản</h2>
  
        <h2 class="title">Thông tin tài khoản</h2>
  
        <div class="inputtt">
          <i class="fas fa-user"></i>
          <input type="text" name="tenDangNhap" value="<?php echo $value["tenDangNhap"];?>"  />
        </div>
  
        <div class="inputtt">
          <i class="fas fa-lock"></i>
          <input type="password" name="matKhau" value="<?php echo  $value["matKhau"]?>"  />
        </div>
  
        <div class="inputtt">
          <i class="fas fa-archive"></i>
          <input type="text" name="maThue" value="<?php echo  $value["maThue"];?>"/>
        </div>
  
        <div class="inputtt">
          <i class="fas fa-envelope"></i>
          <input type="text" name="SDT" value="<?php echo  $value["SDT"];?>"/>
        </div>
  
        <div class="inputtt">
          <i class="fas fa-phone"></i>
          <input type="email"  name="email" value="<?php echo $value["email"];?>"/>
        </div>
        <div class="inputtt">
            <i class="fas fa-comments-dollar"></i>
          <input type="text" name="loaiTK" value="<?php echo  $value["loaiTK"];?>"/>
        </div>
        <div class="inputtt">
            <i class="fas fa-comments-dollar"></i>
          <input type="text" name="maCCCD" value="<?php echo  $value["maCCCD"];?>"/>
        </div>
        <div class="inputtt">
            <i class="fas fa-comments-dollar"></i>
          <input type="text" name="maBHYT" value="<?php echo  $value["maBHYT"];?>"/>
        </div>
        

        
        <input type="submit" class="btn" name="updateTK" value="Cập nhật tài khoản" />
      </form>
      <?php
            }
        ?>
     
    </div>
   
</body>
</html>