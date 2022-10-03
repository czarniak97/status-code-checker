<?php
include 'classes/Curl.php';
include 'includes/functions.php';
include 'templates/header.html';
include 'templates/content.html';

if (isset($_POST['pagesToCheck'])) {
    //$curl = new Curl();
    $curl = '';
    $pagesArray = explode(PHP_EOL, $_POST['pagesToCheck']);

    echo '<table>';
    foreach ($pagesArray as $page) {
        $delimiter = 0;
        echo '<tr>';
        pageCheck($curl, $page, $delimiter);
        echo '</tr>';
    }
    echo '</table>';
    //$curl->closeConnection();
}

include 'templates/footer.html';
