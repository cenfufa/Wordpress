<?php
    $host = "https://ncovdata.market.alicloudapi.com";
    $path = "/ncov/cityDiseaseInfoWithTrend";
    $method = "GET";
    $appcode = "8769cdc2fff34c37b9c92aae6f7f0d36";
    $headers = array();
    array_push($headers, "Authorization:APPCODE " . $appcode);
    $querys = "";
    $bodys = "";
    $url = $host . $path;

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_FAILONERROR, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HEADER, true);
    if (1 == strpos("$".$host, "https://"))
    {
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    }
    var_dump(curl_exec($curl));
?>