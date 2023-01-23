<?php

// Post ile gelen veriyi değişkene atadık
$girilenSayi = $_POST['sayi'];

// Boş bir değer gelirse yapılacak işlem
if ($girilenSayi == null) {
    echo 'Lütfen geçerli bir değer giriniz!';
}

// Eğer sayı 3'ile tam bölünüyorsa yapılacak işlem
else if ($girilenSayi % 3 == 0){
    echo 'Girdiğiniz sayı 3 ile tam bölünüyor!';
}

// Eğer sayı 3'ile tam bölünmüyorsa en yakın tam bölünene kadar döngü devam eder
else {
    while ($girilenSayi % 3 !== 0){
        $girilenSayi++;
    }
    echo $girilenSayi;
}
?>


<form action="" method="post">
    <input type="text" name="sayi" placeholder="Bir sayı giriniz."><br><br>
    <input type="submit" name="submit" value="Gönder">
</form>
