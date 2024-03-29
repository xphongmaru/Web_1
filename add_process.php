<?php 
    session_start();
    function getAllStudents(){
        return isset($_SESSION['students'])? $_SESSION['students'] :array();
    }

    function getStudent($student_msv){
        $students = getAllStudents();
        $data = array();

        foreach($students as $item){
            if($item['student_msv'] == $student_msv){
                $data[]=$item;
            }
            return $data;
        }
    }
    function DeleteStudent($student_msv){
        $students =getAllStudents();

        foreach($students as $key => $item){
            if($item['student_msv']==$student_msv)
                unset($students[$key]);
        } 
        $_SESSION['students']=$students;
        
        return $students;
    }

    function updateStudent($student_msv, $student_name, $student_phone, $student_email, $student_gt, $student_addres){
        $students =getAllStudents();

        $new_student=array(
            'student_msv'=>$student_msv,
            'student_name'=>$student_name,
            'student_phone'=>$student_phone,
            'student_email'=>$student_email,
            'student_gt'=>$student_gt,
            'student_addres'=>$student_addres
        );

        $is_update_action=false;
        foreach($students as $key =>$item){
            if($item['student_msv']==$student_msv){
                $students[$key]=$new_student;
                $is_update_action=true;
            }
        }

        if(!$is_update_action){
            $students[]=$new_student;
        }

        $_SESSION['students']=$students;
        return $students;
        
    }

?>