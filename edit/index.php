<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/functions/functions.php';
 
if (isset($_POST) && !empty($_POST)) {
    $user->updateUser($_POST, $_FILES); 
    header("Location: /profile/");  
}
$data['user'] = $user->getUserInfo();
$data['title'] = 'Профиль - Dance'; 
$pager->viewPage($data, ['file' => 'edit.php', 'title' => false]);
