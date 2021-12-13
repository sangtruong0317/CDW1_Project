<?php
session_start();
unset($_SESSION['last_id']);
if (isset($_GET['id'])){
    $id=$_GET['id'];
    $control = $_GET['control'];
    if ($control == 1){
        $_SESSION['wishlist'][$id]++;
    }else if ($control == 2){
        $_SESSION['wishlist'][$id]--;
        if ( $_SESSION['wishlist'][$id] <= 0){
            $_SESSION['wishlist'][$id]=0;
        }
    }
    else if ($control == 3){
        unset($_SESSION['wishlist'][$id]);
        unset($_SESSION['id'][$id]);
    }
    header("location:wishlist.php");
}
else if (isset($_GET['control'])){
    $control = $_GET['control'];
    if ($control == 4){
        session_unset();
    }
    header("location:wishlist.php");
}
else{
    header("location:index.php");
}