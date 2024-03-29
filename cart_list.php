<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<?php
    $product = array(
        'SP01' => array('SP01','iphone 15 promax 512GB','35.000.000',4,'https://cdn.tgdd.vn/Products/Images/42/305658/iphone-15-pro-max-blue-thumbnew-600x600.jpg'),
        'SP02' => array('SP02','iphone 12 promax 512GB','23.000.000',5,'data:image/jpeg;base64,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'),
        'SP03' => array('SP03','iphone 15 promax 512GB','35.000.000',6,'https://cdn.tgdd.vn/Products/Images/42/305658/iphone-15-pro-max-blue-thumbnew-600x600.jpg'),
        'SP04' => array('SP04','iphone 12 promax 512GB','23.000.000',10,'data:image/jpeg;base64,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'),
        'SP05' => array('SP05','iphone 15 promax 512GB','35.000.000',20,'https://cdn.tgdd.vn/Products/Images/42/305658/iphone-15-pro-max-blue-thumbnew-600x600.jpg'),
        'SP06' => array('SP06','iphone 12 promax 512GB','23.000.000',46,'data:image/jpeg;base64,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'),

    );
?>
</head>
<body>
    <div class="container" style="text-align: center;">
    
        <h1>Danh mục sản phẩm</h1>    <br>
        <div class="table-reponsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá tiền</th>
                        <th>Số lượng</th>
                        <th>Hình ảnh</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody style="text-align: left;">
                    <!-- <tr>
                        <td>SP01</td>
                        <td>Ipnhone promax 15</td>
                        <td>35.000.000</td>
                        <td>5</td>
                        <td><img src="https://cdn.tgdd.vn/Products/Images/42/305658/iphone-15-pro-max-blue-thumbnew-600x600.jpg" width="50px" alt=""></td>
                        <td><a href="#"><button class="btn btn-primary">Thêm vào giỏ hàng</button></a></td>
                    </tr> -->
                    <?php foreach($product as $key => $item) {?>
                        <tr>
                            <td><?php  echo $item[0] ?></td>
                            <td><?php  echo $item[1] ?></td>
                            <td><?php  echo $item[2] ?></td>
                            <td><?php  echo $item[3] ?></td>
                            <td><img src="<?php  echo $item[4] ?>" alt="" width="50px"></td>
                            <td><a href="addToCart.php?msp=<?php echo $item[0] ?>"><button class="btn btn-primary">Thêm vào giỏ hàng</button></a></td>
                        </tr>
                    <?php  }?>
                </tbody>
            </table>
            <a href="cart_detail.php" class="btn btn-success">Xem giỏ hàng</a>
        </div>
    </div>
</body>
</html>