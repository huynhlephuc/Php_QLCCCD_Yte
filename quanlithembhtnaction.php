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

    // Xóa tài khoản 

    if(isset($_GET['delete'])){
        $idtk=$_GET['delete'];
        $sql= "DELETE  from tbl_taiKhoan WHERE id_taiKhoan='$idtk'" or die($conn->error);
        $conn->query($sql);
        
        header("location: adminqltkpage.php");
    }

    // Thêm tài khoản
    if(isset($_POST['qlthemtainan'])){
        $maBHTN=$_POST['maBHTN'];
        $maCCCD=$_POST['maCCCD'];
        $ngayThamGiaBHTN=$_POST['ngayThamGia'];
        $ngayHetHanBHTN=$_POST['ngayHetHan'];
        $mucHuongBHTN=$_POST['mucHuongBHTN'];
        
        $chuyenCCCD = "select idCCCD from tbl_cancuoccongdan where maCCCD = '$maCCCD'";
        $conn->query($chuyenCCCD) or die($conn->error);
        
        $sql ="INSERT INTO tbl_ttbhtn values('$maBHTN','$maCCCD','$ngayThamGiaBHTN', '$ngayHetHanBHTN','$mucHuongBHTN')";
    
        
        $conn->query($sql) or die($conn->error);
        header("location: quanlitainan.php");
    };
    //het phan add user


    
    

    //Update tai khoan
    if(isset($_POST['updateTK'])){
        $idtk = ($idtk);
        $tenDN = $_POST['tenDN'];
        $pass = $_POST['matKhau'];
        $maThue = $_POST['maThue'];
        $phone = $_POST['SDT'];
        $email = $_POST['email'];
        $loaiTK = $_POST['loaiTK'];
        $cmnd = $_POST['maCCCD'];
        $maBHYT = $_POST['maBHYT'];
        
        $sql="update tbl_taiKhoan set id_taiKhoan= '$idtk' ,tenDangNhap='$tenDN', matKhau= '$pass', maThue= '$maThue', SDT='$phone',email='$email', loaiTK='$loaiTK', maCCCD='$cmnd', maBHYT='$maBHYT' where id_taiKhoan='$idtk'";
        $conn->query($sql) or die($conn->error);
        header("location: adminqltkpage.php");
    };
    
    if(isset($_GET['edit'])){
        $username=$_GET['edit'];
        $sql="select * from sinhvien where username='$username'";
        $data= $conn->query($sql) or die($conn->error);
        
            $row=$data->fetch_array();
            $username=$row['username'];
            $pass=$row['pass'];
            $email=$row['email'];
            $phone=$row['phone'];
            $address=$row['address'];
            header("location: formsv.php");
    
    }

     // admin xóa y tế

     if(isset($_GET['xoabhtn'])){
        $idtk=$_GET['xoabhtn'];
        $sql= "DELETE  from tbl_ttbhtn WHERE maBHTN='$idtk'" or die($conn->error);
        $conn->query($sql);
        
        header("location: adminqltainan.php");
    }
    

   

?>