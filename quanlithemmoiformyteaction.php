<?php
    include "db.php";

    

    $maBHYT="";
    $maCCCD="";
    $ngayThamGiaBHYT="";
    $ngayHetHanBHYT="";
    $mucHuongBHYT="";
    $update=0;
 
    

    // Thêm tài khoản
    if(isset($_POST['themyte'])){
        $maBHYT=$_POST['maBHYT'];
        $maCCCD=$_POST['maCCCD'];
        $ngayThamGiaBHYT=$_POST['ngayThamGiaBHYT'];
        $ngayHetHanBHYT=$_POST['ngayHetHanBHYT'];
        $mucHuongBHYT=$_POST['mucHuongBHYT'];

        /* Chuyen maCCCD tu nguoi quan ly nhap vao thanh idCCCD trong tbl_cancuoccongdan */
        $qr = "SELECT `idCCCD` FROM `tbl_cancuoccongdan` WHERE  maCCCD = '$maCCCD'";
        $conn->query($qr) or die($conn->error);
    /* hung gia tri tra ve tu cau truy van vao bien $idCCCD */
        

        $sql ="INSERT INTO tbl_ttbhyt values('$maBHYT','$idCCCD','$ngayThamGiaBHYT', '$ngayHetHanBHYT','$mucHuongBHYT')";   
        $conn->query($sql) or die($conn->error);
        echo 15;
        /* header("location: quanliyte.php"); */
    };

    if(isset($_POST['themyteadmin'])){
        $maBHYT=$_POST['maBHYT'];
        $maCCCD=$_POST['maCCCD'];
        $ngayThamGiaBHYT=$_POST['ngayThamGiaBHYT'];
        $ngayHetHanBHYT=$_POST['ngayHetHan'];
        $mucHuongBHYT=$_POST['mucHuongBHYT'];
    
        $sql ="INSERT INTO tbl_ttbhyt values('$maBHYT','$maCCCD','$ngayThamGiaBHYT', '$ngayHetHanBHYT','$mucHuongBHYT')";
    
        
        $conn->query($sql) or die($conn->error);
        header("location: adminquanliyte.php");
    };



?>