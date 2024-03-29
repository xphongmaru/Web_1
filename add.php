<?php 
    require('add_process.php');

    $data = array();
    $is_update_action=false;
    // if()

    if(!empty($_POST['add_student']))
    {
        $data['student_name']=isset($_POST['name'])? $_POST['name']:'' ;
        $data['student_msv']=isset($_POST['msv'])? $_POST['msv']:'' ;
        $data['student_phone']=isset($_POST['phone'])? $_POST['phone']:'' ;
        $data['student_email']=isset($_POST['email'])? $_POST['email']:'' ;
        $data['student_gt']=isset($_POST['gt'])? $_POST['gt']:'' ;
        $data['student_addres']=isset($_POST['addres'])? $_POST['addres']:'' ;
        
        updateStudent(
             $data['student_msv'],$data['student_name'], $data['student_phone'], $data['student_email'], $data['student_gt'], $data['student_addres']);
        header("Location:list.php");
    }
    
   
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sinh viên</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
        <form  method="POST" role="form">
            <h1 style="text-align: center;">Nhập thông tin cá nhân</h1>
            <div class="form-group">
                <label for="">Họ và tên</label>
                <input type="text" class="form-control" id="" name="name" placeholder="Họ và tên" require value="">
            </div>    
            <div class="form-group">
                <label for="">Mã sinh viên</label>
                <input type="text" class="form-control" id="" name="msv" placeholder="Mã sinh viên">
            </div> 
            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="text" class="form-control" id="" name="phone" placeholder="Số điện thoại">
            </div> 
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" name="email" placeholder="Email">
            </div>  
            <div class="form-group">
                <label for="">Giới tính</label>
                <input type="radio" id="" name="gt" value="Nam">Nam
                <input type="radio" id="" name="gt" value="Nữ">Nữ
                <input type="radio" id="" name="gt" value="Other">Other
            </div>  
            <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control" id="" name="addres" placeholder="Địa chỉ">
            </div>  
            <input type="submit" class="btn btn-primary" name="add_student" value="Lưu thông tin"></input>
        </form>
    </div>
</body>
</html>