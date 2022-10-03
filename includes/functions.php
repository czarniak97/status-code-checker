<?php
function pageCheck($curl, $page, $delimiter)
{
    $curl->url($page)
        ->openConnection();
    $curl->sendRequest();
    $info = curl_getinfo($curl);
    echo $info;
    echo '<pre>' . var_export($curl->info, true) . '</pre>';
    
    $columnColor = getColumnColor($curl->info['http_code']);

    echo '<td class="' . $columnColor . '" >' . $curl->info['url'] . '</td>';
    echo '<td class="' . $columnColor . '" >' . $curl->info['http_code'] . '</td>';

    if ($delimiter > 4)
        echo '<td class="loopWarning" >Prawdopodobna pętla przekierowań</td>';

    if ($curl->info['http_code'] >= 300 && $curl->info['http_code'] < 400) {
        $delimiter++;
        pageCheck($curl, $curl->info['redirect_url'], $delimiter);
    }
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
