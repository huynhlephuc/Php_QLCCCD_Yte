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
    if(isset($_POST['themtk'])){
        $idtk =  ($idtk);
        $tenDN = $_POST['tenDN'];
        $pass = $_POST['matKhau'];
        $maThue = $_POST['maThue'];
        $phone = $_POST['SDT'];
        $email = $_POST['email'];
        $loaiTK = $_POST['loaiTK'];
        $cmnd = $_POST['maCCCD'];
        $maBHYT = $_POST['maBHYT'];
    
        $sql ="INSERT INTO tbl_taiKhoan values('$idtk','$tenDN','$pass', '$maThue','$phone', '$email','$loaiTK', '$cmnd', '$maBHYT')";
    
        
        $conn->query($sql) or die($conn->error);
        header("location: adminqltkpage.php");
    };

    //het phan add user


    
    

    //Update tai khoan
    if(isset($_POST['updateTK'])){
        $idtk = $_GET["edit"];
        $tenDN = $_POST['tenDangNhap'];
        $pass = $_POST['matKhau'];
        $maThue = $_POST['maThue'];
        $phone = $_POST['SDT'];
        $email = $_POST['email'];
        $loaiTK = $_POST['loaiTK'];
        $cmnd = $_POST['maCCCD'];
        $maBHYT = $_POST['maBHYT'];
        
        $sql="UPDATE tbl_taiKhoan SET tenDangNhap='$tenDN', matKhau= '$pass', maThue= '$maThue', SDT='$phone',email='$email', loaiTK='$loaiTK', maCCCD='$cmnd', maBHYT='$maBHYT' WHERE id_taiKhoan='$idtk'";
        echo $sql;
        if (mysqli_query($conn,$sql)) {
            echo "<script type='text/javascript'>alert('UPDATE THÀNH CÔNG!');document.location='adminqltkpage.php'</script>";
        }
        else{
            echo "Error";
        }
       
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

     if(isset($_GET['xoayte'])){
        $idtk=$_GET['xoayte'];
        $sql= "DELETE  from tbl_ttbhyt WHERE maBHYT='$idtk'" or die($conn->error);
        $conn->query($sql);
        
        header("location: adminquanliyte.php");
    }

    if(isset($_GET['xoa'])){
        $idtk=$_GET['xoa'];
        $sql= "DELETE  from tbl_benhan WHERE maHoSoBenhAn='$idtk'" or die($conn->error);
        $conn->query($sql);
        
        header("location: adminquanlibenhan.php");
    }

    
    

   

?>