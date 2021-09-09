<?php

//color
$hijau = "\33[0;32m";
$hijau1 = "\33[32;1m";
$hijau2 = "\e[1;32m";
$biru = "\33[0;36m";
$biru1 = "\33[36;1m";
$biru2 = "\e[1;34m";
$merah = "\33[31;1m";
$merah2 = "\e[1;31m";
$putih2 = "\33[37;1m";
$putih1 = "\e[1;37m";
$hitam = "\33[30;1m";
$kuning = "\33[33;1m";
$kuning1 = "\33[1;33m";
$kuning2 = "\e[1;33m";
$cyan = "\e[0;36m";
$cyan1 = "\e[1;36m";
$ungu = "\e[0;35m";
$ungu2 = "\e[1;35m";
$abu =	"\e[0;33m";
$abu1 = "\e[0;37m";
$abu2 = "\e[1;30m";

system('clear');
sleep(1);
echo$hijau2."Welcome to script :";
sleep(1);
echo$cyan1." ~> ".$kuning2."DOGEFAUCETMINER\n";
sleep(2);
echo$hijau2."CREATED BY...\n";
sleep(2);
echo$biru2."Faucet".$cyan1."Pay".$hijau2." lovers\n";
sleep(2);
echo $banner = "
$merah2 ██╗   ██╗███████╗███████╗███████╗████████╗██╗   ██╗    
$merah2 ╚██╗ ██╔╝╚══███╔╝╚══███╔╝╚══███╔╝╚══██╔══╝██║   ██║    
 $merah ╚████╔╝   ███╔╝   ███╔╝   ███╔╝    ██║   ██║   ██║    
  $putih2 ╚██╔╝   ███╔╝   ███╔╝   ███╔╝     ██║   ╚██╗ ██╔╝    
  $putih2  ██║   ███████╗███████╗███████╗   ██║    ╚████╔╝ 
   $putih1 ╚═╝   ╚══════╝╚══════╝╚══════╝   ╚═╝     ╚═══╝\n";

sleep(2);
echo$kuning2."        PLEASE DO NOT SKIP THE TUTORIAL VIDEO!\n";
sleep(5);
system('clear');

echo$hijau2."Inject data from file ".$merah2."[".$kuning2."cfg.php!".$merah2."]";

include('cfg.php');

sleep(3);
system('clear');

echo$hijau2."Applying configuration. ";
sleep(1);
system('clear');
echo$hijau2."Applying configuration. . ";
sleep(1);
system('clear');
echo$hijau2."Applying configuration. . . ";
sleep(1);

system('clear');
echo$hijau2."√ SUCCESS inject file".$kuning2." cfg.php!";
sleep(3);
system('clear');
echo$hijau2."STARTING SCRIPT NOW";
sleep(3);
system('clear');

//banner
echo $banner2 = "
$merah2 ██╗   ██╗███████╗███████╗███████╗████████╗██╗   ██╗    
$merah2 ╚██╗ ██╔╝╚══███╔╝╚══███╔╝╚══███╔╝╚══██╔══╝██║   ██║    
 $merah ╚████╔╝   ███╔╝   ███╔╝   ███╔╝    ██║   ██║   ██║    
  $putih2 ╚██╔╝   ███╔╝   ███╔╝   ███╔╝     ██║   ╚██╗ ██╔╝    
  $putih2  ██║   ███████╗███████╗███████╗   ██║    ╚████╔╝ 
   $putih1 ╚═╝   ╚══════╝╚══════╝╚══════╝   ╚═╝     ╚═══╝
$cyan1   <[ LETS MAKE OUR ZERO BITCOIN TO ONE BITCOIN! ]>
$merah2 ≠=================================================≠\n";
//menerima data
$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "cookie:".$cookie;

    $ch = curl_init(); 
	curl_setopt($ch, CURLOPT_URL, "https://dogecoin.host/account/dashboard");
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_ENCODING, "");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$d = curl_exec($ch);
	$t0 = explode('<input type="hidden" name="_token" value="',$d)[1];
	$t = explode('">',$t0)[0];
	$usr0 = explode('<h4>',$d)[1];
	$usr = explode('</h4>',$usr0)[0];
	
echo$putih2."Your Wallet : ".$kuning2.$usr."\n";
echo$merah2." ≠=================================================≠\n";
//mengirim data
while(true){
$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "cookie:".$cookie;
$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://dogecoin.host/account/payout");
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_ENCODING, "");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $py = curl_exec($ch);

$tr0 = explode('<option style="background: black;" value="',$py)[1];
$tr = explode('">',$tr0)[0];
$wd0 = explode('placeholder="Withdraw Amount" value="',$py)[1];
$wd = explode('">',$wd0)[0];

if($wd > $withdraw){

$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "cookie:".$cookie;
$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://dogecoin.host/account/payout");
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_ENCODING, "");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $py = curl_exec($ch);
$tr0 = explode('<option style="background: black;" value="',$py)[1];
$tr = explode('">',$tr0)[0];
$wd0 = explode('placeholder="Withdraw Amount" value="',$py)[1];
$wd = explode('">',$wd0)[0];

$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "cookie:".$cookie;
$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://dogecoin.host/account/withdraw-post-faucetpay?_token=".$t."&track=".$tr."&amount=".$wd);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_ENCODING, "");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $wdp = curl_exec($ch);

echo$hijau2.$wd." DOGE sent to your ".$biru2."Faucet".$cyan1."Pay".$hijau2." account\n";
sleep(1);

}else{

for($x=300;$x>0;$x--){echo "\r \r";
echo$abu2." Please wait ".$merah."[".$kuning2.$x.$merah."] ".$abu2."seconds ☕🚬";
echo "\r \r";
sleep(1);}

$header = array();
$header[] = "user-agent:".$useragent;
$header[] = "cookie:".$cookie;
$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://dogecoin.host/account/payout");
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_ENCODING, "");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $py = curl_exec($ch);
$tr0 = explode('<option style="background: black;" value="',$py)[1];
$tr = explode('">',$tr0)[0];
$wd0 = explode('placeholder="Withdraw Amount" value="',$py)[1];
$wd = explode('">',$wd0)[0];

echo$kuning2."Updating your balance : ".$wd." DOGE\n";
sleep(1);


}}