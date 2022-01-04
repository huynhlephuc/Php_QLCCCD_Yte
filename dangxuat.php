<?php
        session_start();
        if(isset($_SESSION["users"])){
            unset($_SESSION["users"]);
            echo "<script type='text/javascript'>alert('Đăng xuất thành công !');document.location='index.php'</script>";
            

        }else if($_SESSION["admin"]){
            unset($_SESSION["admin"]);
            echo "<script type='text/javascript'>alert('Đăng xuất thành công !');document.location='index.php'</script>";
            

        }
        else if($_SESSION["qllylich"]){
            unset($_SESSION["qllylich"]);
            echo "<script type='text/javascript'>alert('Đăng xuất thành công !');document.location='index.php'</script>";
            

        }
        else if($_SESSION["qlyte"]){
            unset($_SESSION["qlyte"]);
            echo "<script type='text/javascript'>alert('Đăng xuất thành công !');document.location='index.php'</script>";
            

        }
        else if($_SESSION["qlnghenghiep"]){
            unset($_SESSION["qlnghenghiep"]);
            echo "<script type='text/javascript'>alert('Đăng xuất thành công !');document.location='index.php'</script>";
            

        }
?>