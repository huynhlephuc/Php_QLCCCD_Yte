<?php
  $server ="localhost"; // tên host
  $username ="root";// username
  $password ="";
  $namedb ="qlcccd"; //  tên database

  $conn = mysqli_connect($server,$username,$password,$namedb ); /// câu kết nối
  if ($conn) {
      
      mysqli_query($conn,"SET NAMES 'utf8'");
      // echo "kết nối thành công";

  }
  else{

      echo "kết nối thất bại";
  }
?> 