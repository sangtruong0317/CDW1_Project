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
    function getProductsByID($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM products,manufactures WHERE id = ? and products.manu_id = manufactures.manu_id");
        $sql->bind_param("i", $id);
        //Thuc thi cau lanh truy van
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    //Viet phuong thuc lay ra san pham theo từ khóa
    function getProductsByKey($key)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE name LIKE ?");
        $key = "%" . trim($key) . "%";
        $sql->bind_param("s", $key);
        //Thuc thi cau lanh truy van
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    //Viet phuong thuc lay ra san pham theo từ khóa (phân trang)
    function getProductsByPageAndByResult($page, $perPage, $key)
    {
        // Tính số thứ tự trang bắt đầu  
        $firstLink = ($page - 1) * $perPage;
        $key = "%" . trim($key) . "%";
        //Dùng LIMIT để giới hạn số lượng hiển thị 1 trang 
        $sql = self::$connection->prepare("SELECT * FROM products WHERE name LIKE ? LIMIT $firstLink, $perPage");
        $sql->bind_param("s", $key);
        $sql->execute(); //return an object 
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array   
    }
    //Phân trang (Viết cái này trong DB nghe có vẻ hớp lý hơn ==')
    
    //Phân trang cho trang Reasult
    function paginateForResult($url, $total, $page, $perPage, $key)
    {
        $totalLinks = ceil($total / $perPage);
        $link = "";
        for ($j = 1; $j <= $totalLinks; $j++) {
            $link = $link . "<a style='padding:20px;' href='$url?page=$j&key=$key'> $j </a>";
        }
        return $link;
    }
    
    //Viet phuong thuc lay ra san pham theo manu_id
    
    //Viet phuong thuc lay ra san pham theo manu_id (phân trang)
    
    //Viet phuong thuc lay ra san pham theo type_id
    
    //Viet phuong thuc lay ra san pham theo type_id (phân trang)
    
}
