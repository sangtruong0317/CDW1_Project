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
    function addNewProtype($type_name)
    {
        $sql = self::$connection->prepare("INSERT INTO `protypes`(`type_name`) 
        VALUES (?)");
        $sql->bind_param("s", $type_name);
        $sql->execute(); //return an object
    }
}
?>
