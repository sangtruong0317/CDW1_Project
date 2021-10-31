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

    //Viết phương thức lấy ra danh sách tất cả sản phẩm
    

    //Viet phuong thêm 1 Protype
    function addNewProduct($name, $manu_id, $type_id, $price, $pro_image, $description, $feature, $created_at)
    {
        $sql = self::$connection->prepare("INSERT INTO `products`(`name`, `manu_id`, `type_id`, `price`, `pro_image`, `description`, `feature`, `created_at`)
        VALUES ('$name',$manu_id,$type_id, ? ,'$pro_image',' $description',$feature,'$created_at')");
        $sql->bind_param("i", $price);
        $sql->execute(); //return an object
    }


    
}
