<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/functions/functions.php';

if (isset($_POST) && !empty($_POST)) {
    $user->addFeedItem($_POST, $_FILES);
    header("Location: /profile/");
}
$data['title'] = 'Добавить запись в ленту'; 
$data['user'] = $user->getUserInfo();

 
$pager->viewPage($data, ['file' => 'additem.php', 'title' => true]);
