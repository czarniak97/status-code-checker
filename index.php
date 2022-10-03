<?php
include 'classes/Curl.php';
include 'includes/functions.php';
include 'templates/header.html';
include 'templates/content.html';

if (isset($_POST['pagesToCheck'])) {
    
    
    $pagesArray = explode(PHP_EOL, $_POST['pagesToCheck']);

    echo '<table>';
    foreach ($pagesArray as $page) {
        $curl = new Curl();
        $delimiter = 0;
        echo '<tr>';
        pageCheck($curl, $page, $delimiter);
        echo '</tr>';
        $curl->closeConnection();
    }
    echo '</table>';

}

include 'templates/footer.html';
