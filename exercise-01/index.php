<?php
/**
 *  The file index.php   with routing functionality .
 */
// var $title, $requestPage
$title = '';
// get the request
$requestPage = $_GET['page'];
// concatinate to get the file folder and extention
$page = 'pages/'.$requestPage.'.html';
// if  file exist  set the page as title
    if (file_exists($page)) {
        $title = $_GET['page'];
        // include the  the file from the path
        include $page;
    } else {
        // otherwise send the 404 page
        header('HTTP/1.0 404 Not Found');
        $title = '404 Not Found';
        include 'pages/404.html';
    }
?> 

 
