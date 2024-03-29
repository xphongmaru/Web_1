<?php 
    if(isset($_POST['delete'])){
        require('add_process.php');
        $student_msv=isset($_POST['student_msv'])?$_POST['student_msv']:'';
        deleteStudent($student_msv);
    }
    header("location:list.php")
?>