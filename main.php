$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy); // $proxy is ip of proxy server
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);

$httpCode = curl_getinfo($ch , CURLINFO_HTTP_CODE); // this results 0 every time
$response = curl_exec($ch);

if ($response === false) 
    $response = curl_error($ch);

echo stripslashes($response);

curl_close($ch);
