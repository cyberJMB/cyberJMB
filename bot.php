<?php
system("clear");
$biru="\033[1;34m";
$turkis="\033[1;36m";
$ijo="\033[92m";
$putih="\033[1;37m";
$biru="\033[1;35m";
$red="\033[1;31m";
$kuning="\033[1;33m";
echo "\n $turkis ================================================
╔╦╦╦╦╦╦╦╦╦╦╗TOOL Auto Claim Faucet Bot V2.8 
╠╬╬█╬╬╬╬█╬╬╣SEBELUM MENGGUNAKAN TOOL 
╠╬╬╬╬╬╬╬╬╬╬╣BACA KEMBALI CARA MENJALANKAN 
╠╬████████╬╣SCRIPT INI !!!!!!!!!!!!!!!!!!! 
╠╬█╬╬╬╬╬╬█╬╣Pahamkan Bro.......... 
╚╩╩╩╩╩╩╩╩╩╩╝====================================\n";
echo "
\033[1;96m┌─┐┌─┐┬ ┬┌─┐┌─┐┌┬┐\033[1;97m  ┌─┐┌─┐┬ ┬
\033[1;96m├┤ ├─┤│ ││  ├┤  │ \033[1;97m  ├─┘├─┤└┬┘
\033[1;96m└  ┴ ┴└─┘└─┘└─┘ ┴ \033[1;97m  ┴  ┴ ┴ ┴
\033[1;90m------------------------------
\033[1;97mCreated by \033[1;96mKapten Oleng\n\n";
echo "\n$biru======================================================\n$turkis"; echo "===========#### AUTOCLAIM FAUCETPAY 2021####==========\n$red";
echo date('d/M /y');
echo "===================Kapten Oleng=======================\n"; 
echo  date('l,d-m-Y');   
echo "\n$ijo======================================================\n";       
echo "\n$ijo===================Lu Gua And=========================\n";
$ua=array(
"Host: uptocoin.my.id",
"cache-control: max-age=0",
"upgrade-insecure-requests: 1",
"user-agent: ISI DENGAN USER AGENT SAMPEAN",
"accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3",
"referer: https://uptocoin.my.id/fp/faucet.php?address=DK2GJfDWjrhpmTowgegM49Admxku4bdAmB&currency=DOGE&key=535a4560730b690a35459526c30a9ee5",
"accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7",
"cookie: a=ISI DARI HTTP CANARY",
"cookie: TOKEN HASIL HTTP CANARY");
$url="https://uptocoin.my.id/fp/faucet.php?address=DI ISI WALLET DOGE &currency=DOGE&key=key dari web uptocoin";
echo "\033[1;97m[\033[1;96m*\033[1;97m]Start Claiming...\n";
while (true){
   $ch=curl_init();
   curl_setopt($ch,CURLOPT_URL, $url);
   curl_setopt($ch,CURLOPT_FOLLOWLOCATION, true);
   curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
   curl_setopt($ch,CURLOPT_HTTPHEADER, $ua);
   curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
   $result=curl_exec($ch);
   if (strpos($result,"Just leave this page open, and it should automatically send you more DOGE every 5 minutes!")){
   	for ($i=300;$i>0;$i--){
           echo "\r\033[1;97m[\033[1;96m?\033[1;97m]Waiting in \033[1;96m".$i." \033[1;97mSecond";
           sleep(1);
       }
   }else{
     $one=explode('<div class="alert alert-success">',$result);
     $two=explode('<a target=',$one[1]);
     echo "\r\033[1;97m[\033[1;92mâ\033[1;97m]".$two[0]." your faucet account\n";
   }
}
?>
