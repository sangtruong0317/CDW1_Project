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
    function getProductID($id)
    {
        $sql = self::$connection->prepare("SELECT * 
        FROM products,manufactures,protypes
        WHERE products.manu_id = manufactures.manu_id and products.type_id = protypes.type_id AND products.id = ?");
        $sql->bind_param("i",$id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    //Viết phương thức lấy ra danh sách tất cả sản phẩm
    function getAllProductsByPage($page, $perPage)
    {
        // Tính số thứ tự trang bắt đầu  
        $firstLink = ($page - 1) * $perPage;
        //Dùng LIMIT để giới hạn số lượng hiển thị 1 trang 
        $sql = self::$connection->prepare("SELECT * 
    FROM products,manufactures,protypes 
    WHERE products.manu_id = manufactures.manu_id and products.type_id = protypes.type_id
    ORDER BY products.id DESC
    LIMIT $firstLink, $perPage");
        $sql->execute(); //return an object	 
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array	   
    }

    //Viet phuong thuc lọc sản phẩm theo Manufactures
    function getProductsByManufacture($manu_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM products,manufactures WHERE products.manu_id = manufactures.manu_id and products.manu_id = ?");
        $sql->bind_param("i", $manu_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    //Viet phuong thuc lọc sản phẩm theo Protype
    function getProductsByProtype($type_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM products,protypes WHERE products.type_id = protypes.type_id and products.type_id = ?");
        $sql->bind_param("i", $type_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    
    function getProductsByPageAndByResult($page, $perPage, $key)
    {
        // Tính số thứ tự trang bắt đầu  
        $firstLink = ($page - 1) * $perPage;
        $key = "%" . trim($key) . "%";
        //Dùng LIMIT để giới hạn số lượng hiển thị 1 trang 
        $sql = self::$connection->prepare("SELECT * 
        FROM products,manufactures,protypes
        WHERE name LIKE ? AND products.manu_id = manufactures.manu_id AND products.type_id = protypes.type_id
        LIMIT $firstLink, $perPage");
        $sql->bind_param("s", $key);
        $sql->execute(); //return an object 
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array   
    }

    //Phân trang
    function paginateForResult($url, $total, $page, $perPage, $key)
    {
        $totalLinks = ceil($total / $perPage);
        $link = "";
        for ($j = 1; $j <= $totalLinks; $j++) {
            $link = $link . "<a href='$url?page=$j&key=$key'> $j </a>";
        }
        return $link;
    }
}
