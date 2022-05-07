<?php

$data = $_GET['q'];
$domain = parse_url($data, PHP_URL_HOST);

if (empty($data)) {
    $kata = 'Sorry This Query Is NULL';
    header('Content-Type: application/json');
    echo json_encode($kata);
}elseif ($domain == 'files.catbox.moe' || $domain == 'siasky.net') {
        

    $ch = curl_init($data);
    curl_setopt($ch, CURLOPT_HEADER, true);    // we want headers
    curl_setopt($ch, CURLOPT_NOBODY, true);    // we don't need body
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_TIMEOUT,10);
    $output = curl_exec($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
     if ($httpcode == 200) {
      header('Content-Description: File Transfer');
      header('Content-Type: application/octet-stream');
      header('Content-Disposition: attachment; filename='.basename($data));
      header('Content-Transfer-Encoding: binary');
      header('Expires: 0');
      header('Cache-Control: must-revalidate');
      header('Pragma: public');
      header('Content-Length: ' . filesize($data));
      ob_clean();
      flush();
      readfile($data);
      exit;
     
     } else {
        $kata = 'Sorry This Query Is Not Found Or Die';
        header('Content-Type: application/json');
        echo json_encode($kata);
     }
 
 
 
 
     }else{
        $kata = 'Sorry This Link Is Wrong';
        header('Content-Type: application/json');
        echo json_encode($kata);
     }
 
 
 
 
 

?>