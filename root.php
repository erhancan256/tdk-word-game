<?php 
ini_set("display_errors", 1);
include "words.php";

$rand=rand(0,63838);

/*
$orj= $word[$rand];
$yan1=$word[$rand+8];
$yan2=$word[$rand+14];
$yan3=$word[$rand+20];
$yan4=$word[$rand+49];
$yan5=$word[$rand+29];

*/

/*
//echo "Orjinal Kelime => $orj<br>Yan1:$yan1<br>Yan2:$yan2<br>Yan3:$yan3<br>Yan4:$yan4<br>Yan5:$yan5<br>";

$curl=file_get_contents("https://sozluk.gov.tr/gts?ara=$orj");
//print_r($curl);
$control=json_decode($curl,true);
$kelime_anlami_tdk=$control[0]["anlamlarListe"][0]["anlam"];
//echo "Kelime Anlamı : ".$kelime_anlami_tdk;
*/

$wordGet=array();
$randomTexts1=array();
$randomTexts2=array();
$randomTexts3=array();
$randomTexts4=array();
$randomTexts5=array();
$wordOfMain=array();

for($m=0;$m<10;$m++){
$getRandom=rand(0,63338);	
$wordGet[$m]=$word[$getRandom];
$find=file_get_contents("https://sozluk.gov.tr/gts?ara=$wordGet[$m]");
$filter=json_decode($find,true);
$pinnedMain=$filter[0]["anlamlarListe"][0]["anlam"];
$wordOfMain[$m]=$pinnedMain;
$randomTexts1[$m]=$word[$getRandom+7];
$randomTexts2[$m]=$word[$getRandom+12];
$randomTexts3[$m]=$word[$getRandom+15];
$randomTexts4[$m]=$word[$getRandom+35];
$randomTexts5[$m]=$word[$getRandom+80];

}
/*
print_r(json_encode($randomTexts1));
echo "*";
print_r(json_encode($randomTexts2));
echo "*";
print_r(json_encode($randomTexts3));
echo "*";

print_r(json_encode($wordOfMain));
echo "*";
print_r(json_encode($wordGet));
echo "*";

*/

?>