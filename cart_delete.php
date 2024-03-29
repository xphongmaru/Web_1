<?php
    session_start();
    if(isset($_GET['msp'])){
        $msp = $_GET['msp'];

        if($_SESSION['products'][$msp][3]!=1)
        {
            $_SESSION['products'][$msp][3]--;
            $_SESSION['tt']-=$_SESSION['products'][$msp][2];
            $_SESSION['sl']--;
        }
        else{
            $_SESSION['tt']-=$_SESSION['products'][$msp][2];
            unset($_SESSION['products'][$msp]);
            $_SESSION['sl']--;
        }
    }
    header('location:cart_detail.php')
?>