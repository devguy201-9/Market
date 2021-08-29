<?php
    session_start();
    $res = "";
    require_once('../connect_db.php');
    if(isset($_POST["idCustomer"])){
        $idCustomer = $_POST["idCustomer"];
        $PasswordCustomer = $_POST["PasswordCustomer"];
        ['getByIDAndPassword' => $func] = require '../customer/customer.php';
        $customer = $func($conn,$idCustomer,$PasswordCustomer);
        if(!empty($customer)) {
            $_SESSION['customerID']=$customer[0][0];
            $_SESSION['fullName']=$customer[0][2];
            echo "<script>window.location.replace((window.location.href).split('/').slice(0, -1).join('/') + '/index.php');</script>";
        } else {
            echo "<script>alert('sai mat khau');</script>";
        }
    } else if(isset($_POST["fullName"])) {
        echo "hello";
    }
    require_once('../close_db.php');
    
