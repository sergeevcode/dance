<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/functions/functions.php';
 
if (isset($_POST) && !empty($_POST)) {
  if ($_SESSION['user_id'] = $user->register($_POST)) 
    header("Location: /profile/");  
}

$data['title'] = 'Регистрация - Dance'; 
$pager->viewPage($data, ['file' => 'register.php', 'title' => false]);
