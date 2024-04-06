<?php
class Chat {
    public function __construct() {
        global $db;
        $this->db = $db;
    }

    public function getChats() {
        $q = "SELECT * FROM `chats` WHERE `user_from` = '".$_SESSION['user_id']."'";
        $sql = $this->db->query($q);
        $users = [];
        while ($row = $sql->fetch_assoc()) {
            if (!in_array($row['user_to'], $users)) {
                $users[] = $row['user_to'];
            }
        }
        return $users;
    }

    public function setMess($array) {
        $q = "INSERT INTO `chats`(`user_from`, `user_to`, `message`) VALUES ('{$array['user_from']}','{$array['user_to']}','{$array['message']}' )";
        $this->db->query($q);
    }

    public function getChat($user_id) {

        $q = "SELECT * FROM `chats` WHERE `user_from` = '".$_SESSION['user_id']."' AND `user_to`='".$user_id."'";
        $sql = $this->db->query($q);
        $messages = [];
        while ($row = $sql->fetch_assoc()) { 
            $messages[] = $row;
        }

        $q = "SELECT * FROM `chats` WHERE `user_to` = '".$_SESSION['user_id']."' AND `user_from`='".$user_id."'";
        $sql = $this->db->query($q);
        while ($row = $sql->fetch_assoc()) { 
            $messages[] = $row;
        }


        return $messages;

    }
}