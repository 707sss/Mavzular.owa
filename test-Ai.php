<?php

// 1. Odamlar ismlari va ishlatgan GB miqdorlarini alohida massivga olamiz
$names = ["1-odam", "2-odam", "3-odam", "4-odam", "5-odam", "6-odam"];
$usage = [10, 7, 3, 8, 11, 28]; // GB miqdorlari

echo "<h3>Tariflar bo'yicha hisobot:</h3>";

// 2. 'for' sikli orqali massiv indekslari bilan ishlaymiz
for ($i = 0; $i < count($names); $i++) {
    
    $user = $names[$i];
    $gb = $usage[$i];
    $mb = $gb * 1024; // MB ga o'tkazish
    $tariff = "";

    // 3. Shartlar bo'yicha tarifni aniqlash
    if ($gb >= 0 && $gb < 5) {
        $tariff = "Oddiy";
    } elseif ($gb >= 5 && $gb < 10) {
        $tariff = "Minimal";
    } elseif ($gb >= 10 && $gb < 15) {
        $tariff = "Yuqori";
    } else {
        $tariff = "Biznes"; // 15 dan baland bo'lsa
    }

    // Natijani chiqarish
    echo "Foydalanuvchi: <b>$user</b> | ";
    echo "Sarflandi: <b>$gb GB</b> ($mb MB) | ";
    echo "Tarif: <span style='color: blue;'>$tariff</span> <br>";
}

?>
