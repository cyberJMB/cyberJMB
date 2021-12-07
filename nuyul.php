<?php
system("clear");
function post($url,$data,$token){
         $host ="https://uptocoin.my.id";
   $header = array(
                   "user-agent: Mozilla/5.0 Linux AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.46 Mobile Safari/597.36,Mozilla/5.0 (Windows; U; Windows NT 6.1) AppleWebKit/531.26.6 (KHTML, like Gecko) Version/4.1 Safari/531.26.6",           "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",   
       "pragma: akamai-x-cache-on, akamai-x-cache-remote-on, akamai-x-check-cacheable, akamai-x-get-cache-key, akamai-x-get-extracted-values, akamai-x-get-ssl-client-session-id, akamai-x-get-true-cache-key, akamai-x-serial-no, akamai-x-get-request-id,akamai-x-get-nonces,akamai-x-get-client-ip,akamai-x-feo-trace",
                    "sec-fetch-site: cross-site",
           "sec-fetch-mode: navigate",
       "sec-fetch-dest: document",
                 "referer: https://uptocoin.tk/fp/",
          "accept-encoding: gzip, deflate, br",
        "accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7",
         );       
     function httpUrl($url){        
        $api = "https://uptocoin.tk/fp/verify.php";
             $url ="https://uptocoin.my.id/fp/faucet.php?r=DPvMBrDK1e8rfxJ93SwMzGv7vDcapvrnm9&rc=DOGE&address=DHnFqcWu7n7BsXieF4jzCQGL5iTLmpGkBR&currency=DOGE&key=c398042dd5291ab5de30e01e6111d0a6";
     $data ="address=&currency=DOGE&key";
       $token ="token=";   
              
       }
       
                    $curl = curl_init($url);
              curl_setopt(curl,  CURLOPT_URL, $api,$url );
                           curl_setopt($curl, CURLOPT_POST, 1);
           curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
                 curl_setopt($curl, CURLOPT_POSTFIELDS, $data,$token);
          curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
                       curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
               curl_setopt($curl,  CURLOPT_SSL_VERIFYPEER, 0 );
         curl_setopt($curl, CURLOPT_COOKIEJAR, "cookie.txt");
                    curl_setopt($curl, CURLOPT_COOKIEFILE, "cookie.txt");
            curl_setopt($curl, CURLOPT_ENCODING, "gzip");
                         $result = curl_exec($curl);
                         
                 curl_close($curl);
        return $response;
}
$biru="\033[1;34m";
$turkis="\033[1;36m";
$ijo="\033[92m";
$putih="\033[1;37m";
$biru="\033[1;35m";
$red="\033[1;31m";
$kuning="\033[1;33m";
echo "\n$ijo -------------------------------------------\n";

echo "\n$biru ====================\n";   
  
echo  date('l,d-m-Y');   
   
echo "\n$ijo ======================\n";

echo date('d/M /y');

echo "\n$kuning ===================\n";    
                  
echo "\n================================================
╔╦╦╦╦╦╦╦╦╦╦╗TOOL Auto Claim Faucet Bot V2.8 
╠╬╬█╬╬╬╬█╬╬╣SEBELUM MENGGUNAKAN TOOL 
╠╬╬╬╬╬╬╬╬╬╬╣BACA KEMBALI CARA MENJALANKAN 
╠╬████████╬╣SCRIPT INI !!!!!!!!!!!!!!!!!!! 
╠╬█╬╬╬╬╬╬█╬╣Pahamkan Bro.......... 
╚╩╩╩╩╩╩╩╩╩╩╝====================================\n";
echo "\n$biru ==       ==    |==================|\n";
echo "\n$ijo ==       =     |                  |\n";
echo "\n$biru ===    ==      |   ¤          ¤   |\n";
echo "\n$ijo ==  ===        |                 |\n";
echo "\n$biru == == == =     |                  |\n";
echo "\n$ijo ==       =     |  Lu Gua And !!!!!|\n";
echo "\n$biru ==       ==    |__________________|\n";
echo "\n$red ____________________________________\n";
echo "\n$biru======================================================\n$turkis"; echo "===========#### AUTOCLAIM FAUCETPAY 2021####==========\n$red"; echo "===================Kapten Oleng=======================\n"; 
echo "\n$ijo======================================================\n";       
echo "\n$ijo===================Lu Gua And=========================\n";
echo "\n Your Url Doge:\n";
$data =trim(fgets(STDIN));
echo "\n Token: $biru \n";
$token =trim(fgets(STDIN));
echo date('h:i:s') . "<br>";

//sleep for 3 seconds
sleep(3);

//start again
echo date('h:i:s');

            function get($url,$data,$token){
         $host ="https://uptocoin.my.id";
   $header = array(
                   "user-agent: Mozilla/5.0 Linux AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.46 Mobile Safari/597.36",
            "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",   
       "pragma: akamai-x-cache-on, akamai-x-cache-remote-on, akamai-x-check-cacheable, akamai-x-get-cache-key, akamai-x-get-extracted-values, akamai-x-get-ssl-client-session-id, akamai-x-get-true-cache-key, akamai-x-serial-no, akamai-x-get-request-id,akamai-x-get-nonces,akamai-x-get-client-ip,akamai-x-feo-trace",
                    "sec-fetch-site: cross-site",
           "sec-fetch-mode: navigate",
       "sec-fetch-dest: document",
                 "referer: https://uptocoin.tk/fp/",
          "accept-encoding: gzip, deflate, br",
        "accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7",
         );       
        $api = "https://uptocoin.tk/fp/verify.php";
         
          function login($url,$data,$token){  
             $url ="https://uptocoin.my.id/fp/faucet.php?r=DK2GJfDWjrhpmTowgegM49Admxku4bdAmB&rc=DOGE&address=DHnFqcWu7n7BsXieF4jzCQGL5iTLmpGkBR&currency=DOGE&key=c398042dd5291ab5de30e01e6111d0a6";
     $data ="address=&currency=DOGE&key";
   $token ="token=";
   }
                    $curl = curl_init($url);
              curl_setopt(curl,  CURLOPT_URL, $api,$url );
                           curl_setopt($curl, CURLOPT_POST, 1);
           curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
                 curl_setopt($curl, CURLOPT_POSTFIELDS, $data,$token);
          curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
                       curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
               curl_setopt($curl,  CURLOPT_SSL_VERIFYPEER, 0 );
         curl_setopt($curl, CURLOPT_COOKIEJAR, "cookie.txt");
                    curl_setopt($curl, CURLOPT_COOKIEFILE, "cookie.txt");
            curl_setopt($curl, CURLOPT_ENCODING, "gzip");
                         $response = curl_exec($curl);
                 curl_close($curl);
        return $response;
}




?>
