<?php 

class Pager {

    public function viewPage($data, $options = array()) {
        $page = $_SERVER['REQUEST_URI'];
        
        //убираем $_GET-параметры
        $page = explode("?", $page);

        //получаем папку
        $page = $page[0];

        include_once $_SERVER['DOCUMENT_ROOT'] . '/template/global/header.php';
        if (isset($options['file']))
            include_once $_SERVER['DOCUMENT_ROOT'] . '/template/'.$options['file'];

        include_once $_SERVER['DOCUMENT_ROOT'] . '/template/global/footer.php';
    }
}