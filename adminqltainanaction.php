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
    if(isset($_POST['themtainan'])){
        $maBHYT=$_POST['maBHTN'];
        $maCCCD=$_POST['maCCCD'];
        $ngayThamGiaBHYT=$_POST['ngayThamGia'];
        $ngayHetHanBHYT=$_POST['ngayHetHan'];
        $mucHuongBHYT=$_POST['mucHuongBHTN'];
    
        $sql ="INSERT INTO tbl_ttbhtn values('$maBHTN','$maCCCD','$ngayThamGiaBHTN', '$ngayHetHanBHTN','$mucHuongBHTN')";
    
        
        $conn->query($sql) or die($conn->error);
        header("location: adminaltainan.php");
    };
    //het phan add user


    
    

    //Update tai khoan
    if(isset($_POST['suatainan'])){
        $idtk = ($idtk);
        

        $maBHTN=$_POST['maBHTN'];
        $maCCCD=$_POST['maCCCD'];
        $ngayThamGia=$_POST['ngayThamGia'];
        $ngayHetHan=$_POST['ngayHetHan'];
        $mucHuongBHTN=$_POST['mucHuongBHTN'];
        $update=0;
        
        $sql="update tbl_ttbhtn set ngayThamGia= '$ngayThamGia' ,ngayHetHan='$ngayHetHan', mucHuongBHTN= '$mucHuongBHTN'where maBHTN='$maBHTN'";
        $conn->query($sql) or die($conn->error);
        if (mysqli_query($conn,$sql)) {
            echo "<script type='text/javascript'>alert('UPDATE THÀNH CÔNG!');document.location='adminqltainan.php'</script>";
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

     if(isset($_GET['xoabhtn'])){
        $idtk=$_GET['xoabhtn'];
        $sql= "DELETE  from tbl_ttbhtn WHERE maBHTN='$idtk'" or die($conn->error);
        $conn->query($sql);
        
        header("location: adminqltainan.php");
    }
    

   

?>