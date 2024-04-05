<?php
class User {
    public function __construct() {
        global $db;
        $this->db = $db;
    }
    
    public function auth($array) {
        $q = "SELECT `id` FROM `users` WHERE `email`='".$array['email']."' AND `password` = '".$array['password']."'";
 
        $query = $this->db->query($q);
        if ($query->num_rows) {
            $_SESSION['user_id'] = $query->fetch_assoc()['id'];
            return true;
        }
        return false;
    }

    public function register($array) {
        $q = "INSERT INTO `users`(`name`, `email`, `password`, `role`) VALUES ('".$array['name']."', '".$array['email']."','".$array['password']."','".$array['role']."')";
        $this->db->query($q);
        return $this->db->insert_id;
    }

    public function getUsersList($role) {
        $q = "SELECT * FROM `users` WHERE `role`='".$role."'";
        $sql = $this->db->query($q);
        $users  = [];
        while ($row = $sql->fetch_assoc()) {
            $users[] = $row;
        }
        return $users;
    }

    public function getUserInfo() {
        if (isset($_SESSION['user_id'])) {
            $q = "SELECT * FROM `users` WHERE `id`='".$_SESSION['user_id']."'";
            $sql = $this->db->query($q);
            return $sql->fetch_assoc();
        }
        return false;
    }

    public function getTeacherInfo($id) { 
        $q = "SELECT * FROM `users` WHERE `id`='".$id."'";
        $sql = $this->db->query($q);
        return $sql->fetch_assoc();
        
        return false;
    }


    public function getUserFeed($user_id) {
        $q = "SELECT * FROM `usersfeed` WHERE `user_id`='{$user_id}'";
        $sql = $this->db->query($q);
        $feed = [];
        while ($row = $sql->fetch_assoc()) {
            $feed[] = $row;
        }
        return $feed;
    }

    public function addFeedItem($data, $files) {
        $uploads_dir = $_SERVER['DOCUMENT_ROOT'] . '/uploads';
        $tmp_name = $files["file"]["tmp_name"]; 
        $name = basename($files["file"]["name"]);
        move_uploaded_file($tmp_name, "$uploads_dir/$name");
        $file = "/uploads/$name";
        $descr = $data['descr'];
        $q = "INSERT INTO `usersfeed`(`user_id`, `src`, `descr`) VALUES ('{$_SESSION['user_id']}', '{$file}', '{$descr}')";
        $sql = $this->db->query($q);
        return true;
    }

    public function getUserServices($user_id) {
        $q = "SELECT * FROM `usersservices` WHERE `user_id`='{$user_id}'";
        $sql = $this->db->query($q);
        $feed = [];
        while ($row = $sql->fetch_assoc()) {
            $feed[] = $row;
        }
        return $feed;
    }

    public function addServiceItem($data, $files) {
        $uploads_dir = $_SERVER['DOCUMENT_ROOT'] . '/uploads';
        $tmp_name = $files["file"]["tmp_name"]; 
        $name = basename($files["file"]["name"]);
        move_uploaded_file($tmp_name, "$uploads_dir/$name");
        $file = "/uploads/$name";
        $name = $data['name'];
        $city = $data['city'];
        $date = $data['date'];

        $q = "INSERT INTO `usersservices`(`user_id`, `name`, `icon`, `city`, `date`) VALUES ('{$_SESSION['user_id']}', '{$name}', '{$file}', '{$city}', '{$date}')";
        $sql = $this->db->query($q);
        return true;
    }


}
