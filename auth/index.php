<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/functions/functions.php';
 
if (isset($_POST) && !empty($_POST)) {
  if ($user->auth($_POST)) 
    header("Location: /profile/");  
}

$data['title'] = 'Авторизация - Dance'; 
$pager->viewPage($data, ['file' => 'auth.php', 'title' => false]);
