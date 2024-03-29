<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏi hàng</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

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
                    <!-- <tr>
                        <td>SP01</td>
                        <td>Ipnhone promax 15</td>
                        <td>35.000.000</td>
                        <td>5</td>
                        <td><img src="https://cdn.tgdd.vn/Products/Images/42/305658/iphone-15-pro-max-blue-thumbnew-600x600.jpg" width="50px" alt=""></td>
                        <td><a href="#"><button class="btn btn-primary">Thêm vào giỏ hàng</button></a></td>
                    </tr> -->
                    <?php foreach($_SESSION['products'] as $key => $item) {?>
                        <tr>
                            <td><?php  echo $item[0] ?></td>
                            <td><?php  echo $item[1] ?></td>
                            <td><?php  echo $item[2] ?></td>
                            <td><?php  echo $item[3] ?></td>
                            <td><img src="<?php  echo $item[4] ?>" alt="" width="50px"></td>
                            <!-- <td><a href="addToCart.php?msp=<?php echo $item[0] ?>"><button class="btn btn-primary">Thêm vào giỏ hàng</button></a></td> -->
                            <td><a href="cart_delete.php?msp=<?php echo $item[0]?>"><button class="btn btn-danger">Xóa sản phẩm</button></a></td>
                        </tr>
                    <?php  }?>
                </tbody>
            </table>
            <a href="cart_list.php" class="btn btn-success">Quay lại trang sản phẩm</a>
        </div>
    </div>
</body>
</html>