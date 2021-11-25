<?php
class Protype extends Db
{
    //Viet phuong thuc lay ra tat ca Protype
    function getAllProtype()
    {
        $sql = self::$connection->prepare("SELECT * FROM protypes");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    //Viet phuong thêm 1 protype
    

    //Viet phuong thuc xóa 1 protype
    function delProtype($type_id)
    {
        $sql = self::$connection->prepare("DELETE
    FROM protypes
    WHERE type_id = ?");
        $sql->bind_param("i", $type_id);
        $sql->execute(); //return an object
    }
    //lay id 
    function getProtypeID($id){
        $sql = self::$connection->prepare("SELECT * FROM protypes WHERE type_id = ?");
            $sql->bind_param("i", $id);
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items;
        }
    //update
    
    
    
}
?>
