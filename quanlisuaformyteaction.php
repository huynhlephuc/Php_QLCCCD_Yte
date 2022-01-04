<?php
    include "db.php"; 

    //Update tai khoan
    if(isset($_POST['suayte'])){
        $maBHYT=  $_GET['edit1'];
        $maBHYT = $_POST['maBHYT'];
        /* $maCCCD = $_POST['maCCCD']; */
        $ngayThamGiaBHYT = $_POST['ngayThamGiaBHYT'];
        $ngayHetHanBHYT = $_POST['ngayHetHanBHYT'];
        $mucHuongBHYT = $_POST['mucHuongBHYT'];
        $sql="update tbl_ttbhyt set ngayThamGia= '$ngayThamGiaBHYT', ngayHetHan= '$ngayHetHanBHYT', mucHuongBHYT='$mucHuongBHYT' where maBHYT='$maBHYT'";
        $conn->query($sql) or die($conn->error);
        echo $sql;
        if (mysqli_query($conn,$sql)) {
            echo "<script type='text/javascript'>alert('UPDATE THÀNH CÔNG!');document.location='adminquanliyte.php'</script>";
        }
        else{
            echo "Error";
        }
        
    };
    
    
    

   

?>