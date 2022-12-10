<?php
/*
function pageCheck($curl, $page, $delimiter)
{
    $curl->url($page)
        ->openConnection();
    $curl->sendRequest();
    
    $columnColor = getColumnColor($curl->info['http_code']);

    echo '<td class="' . $columnColor . '" >' . $curl->info['url'] . '</td>';
    echo '<td class="' . $columnColor . '" >' . $curl->info['http_code'] . '</td>';

    if ($delimiter > 4)
        echo '<td class="loopWarning" >Prawdopodobna pętla przekierowań</td>';

    if ($curl->info['http_code'] >= 300 && $curl->info['http_code'] < 400) {
        $delimiter++;
        pageCheck($curl, $curl->info['redirect_url'], $delimiter);
    }
}*/
/*
function pageCheck($page, $delimiter)
{
    $curl = curl_init();
    curl_setopt_array($curl, [CURLOPT_URL => $page, CURLOPT_HEADER => true, CURLOPT_NOBODY => true, CURLOPT_RETURNTRANSFER => 1, CURLOPT_SSL_VERIFYPEER => false]);
    curl_exec($curl);
    if (curl_errno($curl)) {
        $error_msg = curl_error($curl);
    }
    $info = curl_getinfo($curl);
    echo '<h2>' . $error_msg . '</h2>';
    $columnColor = getColumnColor($info['http_code']);

    echo '<td class="' . $columnColor . '" >' . $info['url'] . '</td>';
    echo '<td class="' . $columnColor . '" >' . $info['http_code'] . '</td>';

    if ($delimiter > 4)
        echo '<td class="loopWarning" >Prawdopodobna pętla przekierowań</td>';

    if ($info['http_code'] >= 300 && $info['http_code'] < 400) {
        $delimiter++;
        pageCheck($info['redirect_url'], $delimiter);
    }
    curl_close($curl);
}*/
function pageCheck($page, $delimiter)
{/*
    $info = [];
    $headers = get_headers($page);
    $info['http_code'] = substr($headers[0], 9, 3);
    $info['url'] = $page;
    $columnColor = getColumnColor($info['http_code']);

    echo '<td class="' . $columnColor . '" >' . $info['url'] . '</td>';
    echo '<td class="' . $columnColor . '" >' . $info['http_code'] . '</td>';

    if ($delimiter > 4)
        echo '<td class="loopWarning" >Prawdopodobna pętla przekierowań</td>';

    if ($info['http_code'] >= 300 && $info['http_code'] < 400) {
        $delimiter++;
        pageCheck($info['redirect_url'], $delimiter);
    }*/
    echo 'test'; 
}

function getColumnColor($httpCode)
{
    if ($httpCode >= 200 && $httpCode < 300)
        return 'green';
    elseif ($httpCode >= 300 && $httpCode < 400)
        return 'yellow';
    elseif ($httpCode >= 400 && $httpCode < 600)
        return 'red';
    else
        return 'white';
}
