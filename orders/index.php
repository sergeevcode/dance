<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/functions/functions.php';
 


$data['orders'] = $user->getTeacherOrders();
$data['user'] = $user->getUserInfo();
$data['users'] = $user->getUsersList(1);
$data['services'] = $user->getUserServices($_SESSION['user_id']);
$data['title'] = 'Заказы - Dance'; 
$pager->viewPage($data, ['file' => 'orders.php', 'title' => false]);
