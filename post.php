<?php
$data = array();
if(!empty($_POST['add_student']))
{
    $data['student_name']=isset($_POST['name'])? $_POST['name']:'' ;
    $data['student_msv']=isset($_POST['msv'])? $_POST['msv']:'' ;
    $data['student_phone']=isset($_POST['phone'])? $_POST['phone']:'' ;
    $data['student_email']=isset($_POST['email'])? $_POST['email']:'' ;
    $data['student_gt']=isset($_POST['gt'])? $_POST['gt']:'' ;
    $data['student_addres']=isset($_POST['addres'])? $_POST['addres']:'' ;
}
print_r($data);

?>
