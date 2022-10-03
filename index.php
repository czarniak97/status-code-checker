<?php
include 'classes/Curl.php';
include 'includes/functions.php';
include 'templates/header.html';
include 'templates/content.html';

if (isset($_POST['pagesToCheck'])) {
    $curl = new Curl();
    
    $pagesArray = explode(PHP_EOL, $_POST['pagesToCheck']);

    echo '<table>';
    foreach ($pagesArray as $page) {
        $delimiter = 0;
        echo '<tr>';
        pageCheck($curl, $page, $delimiter);
        echo '</tr>';
    }
    echo '</table>';

}

include 'templates/footer.html';
