<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/functions/functions.php';
 
$data['title'] = 'Главная страница - Dance'; 
$pager->viewPage($data, ['title' => false, 'file' => 'index.php']);