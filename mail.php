<?php
error_reporting(0);

function get($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    return $result = curl_exec($ch);
    curl_close($ch);
}

function res7ock()
{
    $ambil_nama = get('https://name-fake.com/id_ID');
    preg_match('/<div class="subj_div_45g45gg" id="copy1">(.*?)<\/div>/s', $ambil_nama, $firstname);
    preg_match('/<div class="subj_div_45g45gg" id="copy2">(.*?)<\/div>/s', $ambil_nama, $lastname);
    $str = '1234567890'; //range for string generation
    $shufflestr = str_shuffle($str);
    $ft =strtolower($firstname[1]);
    $lt = strtolower($lastname[1]);
    echo "$ft$lt@mailsac.com|Akugans23\n";
    $fp = fopen("email_bocom.txt", 'a');
        fwrite($fp, "$ft$lt@mailsac.com|Akugans23\n");
        fclose($fp);
}

for ($i = 0;$i < 10;$i++)
{	
	$f++;
	echo "$f => ";
    res7ock();
}
?>
