<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/functions/functions.php';
 


$data['orders'] = $user->getTeacherOrders();
$data['user'] = $user->getUserInfo();
$users = $user->getUsersList(1);
$teachers = $user->getUsersList(2);
 
$data['chats'] = array_merge($users, $teachers);

if (isset($_POST) && !empty($_POST)) {
    $chat->setMess($_POST);
}

if (isset($_GET['id'])) {
    $data['chat'] = $chat->getChat($_GET['id']);
    uasort($data['chat'], 'cmp_function');
}


function cmp_function($a, $b){
	return ($a['id'] > $b['id']);
}
 


$data['title'] = 'Чат'; 
$pager->viewPage($data, ['file' => 'chat.php', 'title' => true]);
