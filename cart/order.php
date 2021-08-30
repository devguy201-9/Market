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
        'getOrderDetail' => function($conn, $orderID, $cusID) {
            $query ="SELECT * FROM `order` AS Orders INNER JOIN `orderdetail` AS detail ON Orders.OrderID = detail.OrderID INNER JOIN `vegetable` AS vegetable ON detail.VegetableID = vegetable.VegetableID  WHERE Orders.OrderID = $orderID AND Orders.CustomerID = $cusID";
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