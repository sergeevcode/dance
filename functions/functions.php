<?php
session_start();
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


global $db;
$db = new mysqli('localhost', 'dance', 'dance123Q!', 'dance');

include_once __DIR__ . '/User.php';
$user = new User();

include_once __DIR__ . '/Pager.php';
$pager = new Pager();


include_once __DIR__ . '/Chat.php';
$chat = new Chat();


function getAuth() {
    if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
        return $_SESSION['user_id'];
    return false;
}

function date_ru($timestamp, $show_time = false)
{
	if (empty($timestamp)) {
		return '-';
	} else {
		$now   = explode(' ', date('Y n j H i'));
		$value = explode(' ', date('Y n j H i', $timestamp));
 
		if ($now[0] == $value[0] && $now[1] == $value[1] && $now[2] == $value[2]) {
			return 'Сегодня в ' . $value[3] . ':' . $value[4];
		} else {
			$month = array(
				'', 'января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 
				'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря'
			);
			$out = $value[2] . ' ' . $month[$value[1]] . ' ' . $value[0];
			if ($show_time) {
				$out .= ' в ' . $value[3] . ':' . $value[4];
			}
			return $out;
		}
	}
}