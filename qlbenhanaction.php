<?php
    include "db.php";

    $maHS="";
    $maCCCD="";
    $ngayKham = "";
    $tenBenh="";
    $tenBenhVien="";
    $vienPhi="";
    $nhapVien="";
    $ngayNhapVien="";
    $ngayXuatVien="";
    $thuocDaLanh="";
    $tienBHYT="";
    $tienBHTN="";
    $soTienThucTe="";
    $update=0;


    if(isset($_POST['qlthembenhan'])){
        $maHS=$_POST['maHoSoBenhAn'];
        $maCCCD=$_POST['maCCCD'];
        $ngayKham=$_POST['ngayDiKham'];
        $tenBenh=$_POST['tenBenh'];
        $tenBenhVien=$_POST['tenBenhVien'];
        $vienPhi=$_POST['vienPhi'];
        $nhapVien=$_POST['nhapVien'];
        $ngayNhapVien=$_POST['ngayNhapVien'];
        $ngayXuatVien=$_POST['ngayXuatVien'];
        $thuocDaLanh=$_POST['thuocDaLanh'];
        $tienBHYT=$_POST['tienBHYT'];
        $tienBHTN=$_POST['tienBHTN'];
        $soTienThucTe=$_POST['soTienThucTePhaiTra'];
    
        $sql ="INSERT INTO tbl_benhan values('$maHS','$maCCCD','$ngayKham', '$tenBenh','$tenBenhVien', '$vienPhi','$nhapVien','$ngayNhapVien','$ngayXuatVien', '$thuocDaLanh' , '$tienBHYT', '$tienBHTN', '$soTienThucTe')";
    
        
        $conn->query($sql) or die($conn->error);
        header("location: quanlibenhan.php");
    };

    ?>