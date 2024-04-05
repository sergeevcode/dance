<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/functions/functions.php';
  
$data['title'] = 'Профиль'; 
$data['user'] = $user->getUserInfo();


if ($data['user']['role'] == 1) {
  $data['users'] = $user->getUsersList(2);
} else {
  $data['feed'] = $user->getUserFeed($data['user']['id']);
  $data['services'] = $user->getUserServices($data['user']['id']);
}
$pager->viewPage($data, ['file' => 'profile.php', 'title' => true]);
