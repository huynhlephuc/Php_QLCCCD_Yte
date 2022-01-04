<?php 
	session_start();
	require_once "db.php";
	$key = $_POST["search1"];
	$sql = " SELECT * FROM `tbl_ttbhyt` WHERE maBHYT LIKE '%$key%' or mucHuongBHYT LIKE '%$key%'  ";
    echo $sql;
	$result = mysqli_query($conn,$sql);

 ?>
 

        
 <div id="card-sanpham" class="layout1">
  
 
            <h3>Thông tin y tế của bạn là:</h3>
            <table class="table">
            
        <thead>
            <tr>
                <th>Mã bảo hiểm y tế</th>
                <th>ID CCCD</th>               
                <th>Ngày tham gia</th>
                <th>Ngày hết hạn</th>
                <th>Mức hưởng bảo hiểm y tế</th>
            </tr>
        </thead>
        <tbody>
            
            <tr>
            <?php 
    while ($row = mysqli_fetch_array($result)) {?>
                <td><?php echo $row['maBHYT']?></td> 
                <td><?php echo $row['maCCCD']?></td>
                <td><?php echo $row['ngayThamGia']?></td>
                <td><?php echo $row['ngayHetHan']?></td>
                <td><?php echo $row['mucHuongBHYT']?></td>
       
            </tr>
          
        </tbody>
        <?php 
                            }
                        ?>
        </table>
        </div>

                   

