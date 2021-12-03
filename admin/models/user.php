<?php
class User extends Db
{
    //Phương thức lấy ra tài khoảng admin
    function getAccount()
    {
        $sql = self::$connection->prepare("SELECT * 
        FROM users");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    //Phương thức login
    function login($user_name, $user_password)
    {
        foreach ($this->getAccount() as $value) {
            if ($value['name'] == $user_name && password_verify($user_password, $value['password'])) {
                return $value['role'];
            }
        }
        return -1;
    }
    //Phương thức register
    function register($user_name, $user_password, $role)
    {
        $check = false;
        foreach($this->getAccount() as $value){
            if($value['name']==$user_name){
                $check=true;
                break;
            }
        }
        var_dump($check);
         if ($check == false) {
             $user_password = password_hash($user_password, PASSWORD_DEFAULT);
             $sql = self::$connection->prepare("INSERT INTO `users`(`name`, `password`, `role`) 
             VALUES (?,?,?)");
             $sql->bind_param("ssi", $user_name, $user_password, $role);
             $sql->execute(); //return an object
             return true;
         } else  if ($check == true){
             return false;
         }
    }

    //Them user
    function addUser($name,$password,$role){
        $sql = self::$connection->prepare("INSERT INTO `users`(`name`, `password`, `role`)
        VALUES (?,?,?)");
        $sql->bind_param("ssi", $name,$password,$role);
        $sql->execute();
    }

    //Xoa user
    function delUser($id){
        $sql = self::$connection->prepare("DELETE FROM users WHERE user_id = ?");
        $sql->bind_param("i", $id);
        $sql->execute();
    }

    //Sua thong tin user
    function updateUser($id,$name,$password,$role){
        $query= self::$connection->prepare("UPDATE users SET name = ?,password = ?,role = ? WHERE user_id = ? ");
        $query->bind_param("ssii",$name,$password,$role,$id);
        return $query->execute();
    }

    //lay user bang id
    function getUserID($id){
        $sql = self::$connection->prepare("SELECT * FROM users WHERE user_id = ?");
            $sql->bind_param("i", $id);
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items;
    }
}
