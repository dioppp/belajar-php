<?php

function http_request($url){
    // persiapkan curl
    $ch = curl_init();

    // set url 
    curl_setopt($ch, CURLOPT_URL, $url);
    
    // set user agent    
    curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

    // return the transfer as a string 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    // $output contains the output string
    $response = curl_exec($ch);

    // tutup curl
    curl_close($ch);

    // mengembalikan hasil curl
    return $response;
}

$response = http_request("https://dummyjson.com/products?limit=28");

// ubah string JSON menjadi array
$response = json_decode($response, TRUE);

// ambil data product
$products = $response['products'];
return $products;

?>