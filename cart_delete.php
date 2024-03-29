<?php
    session_start();
    if(isset($_GET['msp'])){
        $msp = $_GET['msp'];

        if($_SESSION['products'][$msp][3]!=1)
        {
            $_SESSION['products'][$msp][3]--;
        }
        else{
            unset($_SESSION['products'][$msp]);
        }
    }
    header('location:cart_detail.php')
?>