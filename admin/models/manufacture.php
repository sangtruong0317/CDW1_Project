<?php
class Manufacture extends Db
{
    //Phương thức lấy ra tất cả sản phẩm
    function getAllManufactures()
    {
        $sql = self::$connection->prepare("SELECT * FROM manufactures");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    //Viet phuong thuc lay ra tat ca manufacture trong 1 trang
    
    //Viet phuong thêm 1 Manufacture
    
    
    //Viet phuong thuc xóa 1 manufacture
    

    //Viet phuong thuc sua sp
    

    //Lay san bang id
    
}
