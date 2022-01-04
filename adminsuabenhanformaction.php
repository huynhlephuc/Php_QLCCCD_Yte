<?php
    include "db.php"; 

    //Update tai khoan
    if(isset($_POST['adminsuabenhan'])){
        $maHoSo=  $_GET['edit1'];
        
        $ngayDiKham=$_POST['ngayDiKham'];
        $tenBenh=$_POST['tenBenh'];
        $tenBenhVien=$_POST['tenBenhVien'];
        $vienPhi=$_POST['vienPhi'];
        $nhapVien=$_POST['nhapVien'];
        $ngayNhapVien=$_POST['ngayNhapVien'];
        $ngayXuatVien=$_POST['ngayXuatVien'];
        $thuocDaLanh=$_POST['thuocDaLanh'];
        $tienBHYT=$_POST['tienBHYT'];
        $tienBHTN=$_POST['tienBHTN'];
        $soTienThucTePhaiTra=$_POST['soTienThucTePhaiTra'];
        $sql="update tbl_benhan set ngayDiKham= '$ngayDiKham', tenBenh= '$tenBenh', tenBenhVien='$tenBenhVien', vienPhi='$vienPhi', nhapVien='$nhapVien', ngayNhapVien='$ngayNhapVien', ngayXuatVien='$ngayXuatVien', thuocDaLanh='$thuocDaLanh', tienBHYT='$tienBHYT', tienBHTN='$tienBHTN', soTienThucTePhaiTra='$soTienThucTePhaiTra' where maHoSoBenhAn='$maHoSo'";
        echo $sql;
        if (mysqli_query($conn,$sql)) {
            echo "<script type='text/javascript'>alert('UPDATE THÀNH CÔNG!');document.location='adminquanlibenhan.php'</script>";
        }
        else{
            echo "Error";
        }
        
    };
    
    
    

   

?>
