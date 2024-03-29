<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏi hàng</title>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="table-responsive">
            <h2>Giỏ hàng của bạn</h2>
            <br>
            <table class="table table-hover">
                <thead>
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Hình ảnh</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php foreach($_SESSION['products'] as $key => $item) {?>
                        <tr>
                            <td><?php  echo $item[0] ?></td>
                            <td><?php  echo $item[1] ?></td>
                            <td><?php  echo $item[2] ?><i class="bi bi-plus-square"></i></td>
                            <td><?php  echo $item[3] ?></td>
                            <td><img src="<?php  echo $item[4] ?>" alt="" width="50px"></td>
            
                            <td><a href="cart_delete.php?msp=<?php echo $item[0]?>"><button class="btn btn-danger">Xóa sản phẩm</button></a></td>
                        </tr>
                    
                   <?php  }?>
                   <tr>
                       <td>Tổng</td>
                       <td colspan="2"></td>
                       <td ><?php echo $_SESSION['sl'];?></td>
                       
                       <td colspan="2"> <?php echo "Thành tiền: ".$_SESSION['tt']." VNĐ";?></td>
                   </tr>
                </tbody>
                

            </table>
            
            <a href="cart_list.php" class="btn btn-success">Quay lại trang sản phẩm</a> 
        </div>
    </div>
</body>
</html>