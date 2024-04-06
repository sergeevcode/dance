<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/functions/functions.php';
if (isset($_POST['service_id']) && !empty($_POST['service_id'])) {
    $user->setUserOrder($_POST['service_id'], $_SESSION['user_id']);
}
$data['title'] = 'Профиль'; 
$data['user'] = $user->getTeacherInfo($_GET['id']);
$data['feed'] = $user->getUserFeed($data['user']['id']);
$data['services'] = $user->getUserServices($data['user']['id']);
$data['orders'] = $user->getUserOrders($_SESSION['user_id']);


$pager->viewPage($data, ['file' => 'teacher.php', 'title' => true]);
