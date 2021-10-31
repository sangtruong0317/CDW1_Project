<?php
class Product extends Db
{
    //Viet phuong thuc lay ra tat ca san pham và thông tin Protype và Manufacture
    function getAllProducts()
    {
        $sql = self::$connection->prepare("SELECT * 
        FROM products,manufactures,protypes
        WHERE products.manu_id = manufactures.manu_id and products.type_id = protypes.type_id
        ORDER BY products.id");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    //Viet phuong thuc lay ra tat ca san pham
    

    //Viết phương thức lấy ra danh sách tất cả sản phẩm
    

    //Viet phuong thêm 1 products
    

    //Viet phuong thuc sua products
    

     //Viet phuong thuc xóa 1 products
     

    //Viet phuong thuc lọc sản phẩm theo Manufactures
    
    //Viet phuong thuc lọc sản phẩm theo Protype
    function getProductsByProtype($type_id)
    
    
    

    //Phân trang
    
}
