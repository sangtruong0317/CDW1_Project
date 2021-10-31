<?php
class Protype extends Db{
    //Viet phuong thuc lay ra tat ca protype
    function getAllProtype(){
        $sql = self::$connection->prepare("SELECT * FROM protypes");
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    //Viet phuong thuc lay ra tat ca san pham theo type_id
    function getProtypeByID($type_id){
        $sql = self::$connection->prepare("SELECT * FROM products,protypes WHERE products.type_ID = '$type_id' and products.type_ID = protypes.type_id");
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    //phân trang
    
}