<?php
class Product extends Db
{
    //Viet phuong thuc lay ra tat ca san pham
    function getAllProducts()
    {
        $sql = self::$connection->prepare("SELECT * FROM products");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    //Viet phuong thuc lay ra 3 sp moi nhat

    //Viet phuong thuc lay ra 3 san pham noi bat
    
    //Hàm viết ra danh sách tất cả sản phẩm (phân trang) 
    
    //Viet phuong thuc lay ra san pham theo ID
    
    //Viet phuong thuc lay ra san pham theo từ khóa
    
    //Viet phuong thuc lay ra san pham theo từ khóa (phân trang)
    
    //Phân trang (Viết cái này trong DB nghe có vẻ hớp lý hơn ==')
    
    //Phân trang cho trang Reasult
    
    //Viet phuong thuc lay ra san pham theo manu_id
    function getProductsByManu_ID($manu_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM products,manufactures
        WHERE products.manu_id = ? AND products.manu_id = manufactures.manu_id");
        $sql->bind_param("i", $manu_id);
        //Thuc thi cau lanh truy van
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    //Viet phuong thuc lay ra san pham theo manu_id (phân trang)
    
    //Viet phuong thuc lay ra san pham theo type_id
    
    //Viet phuong thuc lay ra san pham theo type_id (phân trang)
    
}
