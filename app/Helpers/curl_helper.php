<?php function curl_post($url, $data)
{
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $r = curl_exec($curl);
    curl_close($curl);
    return $r;
}

function curl_get($url)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $r = curl_exec($curl);
    curl_close($curl);
    return $r;
}
