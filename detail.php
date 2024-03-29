<?php 
    require "add_process.php";
    $students=getAllStudents();
    $msv=$_GET['msv'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin sinh viên</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="table-responsive" >
            <table class="table table-hover" style="width:50%; margin:auto; border:2px solid #ddd;font-size:16px" >
                <thead>
                    <tr >
                        <th colspan="2"style="text-align:center;"><span style="font-size: 30px;">Thông tin sinh viên</span></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($students as $item) {
                        if($msv==$item['student_msv']){      
                    ?>
                    <tr>
                        <th style="width:30%">Mã sinh viên:</th>
                        <td><?php echo $item['student_msv'] ?></td>
                    </tr>
                    <tr>
                        <th>Họ tên:</th>
                        <td><?php echo $item['student_name'] ?></td>
                    </tr>
                    <tr>
                        <th>Giới tính:</th>
                        <td><?php echo $item['student_gt'] ?></td>
                    </tr>
                    <tr>
                        <th>Số điện thoại:</th>
                        <td><?php echo $item['student_phone'] ?></td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td><?php echo $item['student_email'] ?></td>
                    </tr>
                    <tr>
                        <th>Địa chỉ:</th>
                        <td><?php echo $item['student_addres'] ?></td>
                    </tr>
                    <tr>
                        <td style="text-align:right;">
                        <form action="delete.php" method="Post" style="">
                                    <input type="hidden" name="student_msv" value="<?php echo $item['student_msv'];?>">
                                    <input type="submit" onclick="return confirm('Bạn có chắc chắn muốn xóa thông tin của Sinh viên này không?');" value="Delete" class="btn btn-primary" name="delete">
                                </form>
                        </td>
                        <td >
                            <a href="list.php"><button style="margin-right: 50px;" class="btn btn-primary">Trở lại</button></a>
                        </td>
                    </tr>
                <?php } }?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
