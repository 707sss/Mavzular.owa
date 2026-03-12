<?php 
//if, da
$yosh = 20;
if($yosh >=18) { 
    echo "Voyaga yetmagan";
}else{
    echo "Voyaga yetmagan";
}


// if, else, if, da ishlash

$baho = 75;

if($baho >= 90) {
    echo "Alo";
}elseif($baho >= 70) {
    echo "Yahshi";
}elseif($baho >= 50) {
    echo "Qoniqarli";
}else{
    echo "Qoniqsatsiz";
}

// == -scaLAR, === -SCALAR ni qo'shadi, !== -
 

$shur = false;
$suvli = false;
$kata = false;
$urtacha = true;
$giram = 10;
$narx = 5000;

if ($shur == false && $suvli == true && $kata == false && $urtacha == true && $giram !== 25 && $narx == 5000) {
 echo "menga kerak";
}else{
    echo "manga kerakmas";
}

//sanani chiqaradi

echo date(Y-m-d);




?>