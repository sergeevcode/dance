<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/functions/functions.php';

if (isset($_POST) && !empty($_POST)) {
    $user->addServiceItem($_POST, $_FILES);
    header("Location: /profile/");
}
$data['title'] = 'Добавить услугу в ленту'; 
$data['user'] = $user->getUserInfo();

 
$pager->viewPage($data, ['file' => 'addservice.php', 'title' => true]);
