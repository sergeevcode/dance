<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/functions/functions.php';
  
$data['title'] = 'Профиль'; 
$data['user'] = $user->getTeacherInfo($_GET['id']);
$data['feed'] = $user->getUserFeed($data['user']['id']);
$data['services'] = $user->getUserServices($data['user']['id']);

$pager->viewPage($data, ['file' => 'teacher.php', 'title' => true]);
