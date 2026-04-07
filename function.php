<?php

// function chatbot() {
//     echo "salom" . ".\n";
//     $answer = readline("Sizing balingiz:");
    
//     if ($answer >= 90 && $answer <= 100){;
//         echo "alo";
// }elseif($answer >= 70 && $answer < 90){
//     echo "Yahshi";
// }elseif($answer >= 50 && $answer < 70){
//     echo "Qoniqarsiz";
// };
// };
// chatbot();

// function salom($ism) {
//     echo "Salom, $ism";
// }
// salom("Mergen\n");
// salom("Falonchi");

// function yosh($ism, $yil = 18){
//     echo "$ism $yil yoshda.\n";
// }
// yosh("Ali");
// yosh("Vai" , 25)



// function kivadrat($son) {
//     return $son * $son;
// }
// $natija = kivadrat(10);
// echo $natija;

function umumiySumma($mahsulotlar) {
    $sum = 0;
    foreach ($mahsulotlar as $mahsulot) {
         $sum += $mahsulot['narxi']*$mahsulot['soni'];
         
    }
    return $sum;
}
$savat = [
    ['nomi' => 'kitob','narxi' =>1500,'soni' => 1],
    ['nomi' => 'olma','narxi' =>1900,'soni' => 3],
    ['nomi' => 'nok','narxi' =>1700,'soni' => 6],
    
    ];
    $umumiy_narx = umumiySumma($savat);
    echo "Jami summa:" . $umumiy_narx ."so'm.";






















?>
