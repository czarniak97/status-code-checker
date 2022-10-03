<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);

include 'classes/Curl.php';
include 'includes/functions.php';
include 'templates/header.html';
include 'templates/content.html';

if (isset($_POST['pagesToCheck'])) {
    $curl = new Curl();
    echo $curl;
    $pagesArray = explode(PHP_EOL, $_POST['pagesToCheck']);

    echo '<table>';
    foreach ($pagesArray as $page) {
        $delimiter = 0;
        echo '<tr>';
        pageCheck($curl, $page, $delimiter);
        echo '</tr>';
        $curl->closeConnection();
    }
    echo '</table>';

}

include 'templates/footer.html';
