<?php
class Manufacture extends Db{
    //Phương thức lấy ra tất cả manufactures
    function getAllManufactures(){
        $sql = self::$connection->prepare("SELECT * FROM manufactures");
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    //Phân trang manu
    
}