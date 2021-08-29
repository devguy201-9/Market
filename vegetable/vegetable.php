<?php
    return [
        'getAll' => function($conn) {
            $query ="SELECT * FROM `vegetable`";
            $result = mysqli_query($conn,$query);
            $data = array();
            while($row = mysqli_fetch_array($result)){
                $data[] = $row;
            }
            return $data;
        },
        'getListByCateID' => function($conn, $idCate) {
            $query ="SELECT * FROM `vegetable` WHERE `CategoryID` = $idCate";
            $result = mysqli_query($conn,$query);
            $data = array();
            while($row = mysqli_fetch_array($result)){
                $data[] = $row;
            }
            return $data;
        },
        'getListByCateIDs' => function($conn, $idCates) {
            $ids = "(";
            foreach ($idCates as $value) {
                $ids .= $value . ",";
            }
            $ids = rtrim($ids, ", ");
            $ids .= ")";
            $query ="SELECT * FROM `vegetable` WHERE `CategoryID` in $ids";
            $result = mysqli_query($conn,$query);
            $data = array();
            while($row = mysqli_fetch_array($result)){
                $data[] = $row;
            }
            return $data;
        },
        'getByID' => function($conn, $id) {
            $query ="SELECT * FROM `vegetable` WHERE `VegetableID` = $id";
            $result = mysqli_query($conn,$query);
            $data = array();
            while($row = mysqli_fetch_array($result)){
                $data[] = $row;
            }
            return $data;
        }
    ];