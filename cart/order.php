<?php
    return [
        'getAllOrder' => function($conn,$cusID) {
            $query ="SELECT * FROM `order` WHERE `CustomerID` = $cusID";
            $result = mysqli_query($conn,$query);
            $data = array();
            while($row = mysqli_fetch_array($result)){
                $data[] = $row;
            }
            return $data;
        },
        'getOrderDetail' => function($conn, $orderID) {
            $query ="SELECT * FROM `order` WHERE `OrderID` = $orderID";
            $result = mysqli_query($conn,$query);
            $data = array();
            while($row = mysqli_fetch_array($result)){
                $data[] = $row;
            }
            return $data;
        },
        'addOrder' => function($conn, $order,$detail) {
            $query ="SELECT * FROM `vegetable` WHERE `VegetableID` = $id";
            $result = mysqli_query($conn,$query);
            $data = array();
            while($row = mysqli_fetch_array($result)){
                $data[] = $row;
            }
            return $data;
        },
        'checkAmount' => function($conn, $idProduct) {
            $query ="SELECT * FROM `vegetable` WHERE `VegetableID` = $idProduct";
            $result = mysqli_query($conn,$query);
            $data = array();
            while($row = mysqli_fetch_array($result)){
                $data[] = $row;
            }
            return $data;
        }
    ];