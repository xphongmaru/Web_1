<?php 
    require('add_process.php');
    $students = getAllStudents();
    // print_r($students)

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sinh viên</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
        <div class="panel-body" style="text-align:center; border:2px solid #ddd">
            <span class="lable" style="color:black; font-size:30px;">Danh sách sinh viên</span>
            <br><br>
            <a href="add.php"><button type="button" class="btn btn-primary">Thêm</button></a>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Mã Sinh viên</th>
                            <th>Họ tên</th>
                            <th>Giới tính</th>
                            <th>Email</th>
                            <th>Địa chỉ</th>
                            <th>Số điện thoại</th>
                            <th colspan="2">Quản lý</th>
    
                            
                        </tr>
                    </thead>
                    <tbody>  
                        <?php foreach($students as $item) { ?>                     
                        <tr style="text-align:left">
                            <td><a href="detail.php?msv=<?php echo $item['student_msv']; ?>"><?php echo $item['student_msv']; ?></a></td>
                            <td><?php echo $item['student_name']; ?></td>
                            <td><?php echo $item['student_gt']; ?></td>
                            <td><?php echo $item['student_email']; ?></td>
                            <td><?php echo $item['student_addres']; ?></td>
                            <td><?php echo $item['student_phone']; ?></td>
                            <td width="5%">
                                <form action="delete.php" method="Post">
                                    <input type="hidden" name="student_msv" value="<?php echo $item['student_msv'];?>">
                                    <input type="submit" onclick="return confirm('Bạn có chắc chắn muốn xóa thông tin của Sinh viên này không?');" value="Delete" class="btn btn-primary" name="delete">
                                </form>
                            </td>                            
                            <td width="5%">
                                    <a href="add.php?msv=<?php echo $item['student_msv'];?>"><button class="btn btn-primary">Cập nhật</button></a>
                            </td>
                        </tr>
                        <?php }?>     
                
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>