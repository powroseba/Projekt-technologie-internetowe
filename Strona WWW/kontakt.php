<?php


$name = $_POST['name'];


$email = $_POST['email'];

$message = $_POST['message'];


$odkogo = "biuro@79level.pl";

// Podajesz adres email na kt�ry chcesz otrzyma� wiadomo��
$dokogo = "powroseba@o2.pl";

// Podajesz tytu� jaki ma mie� ta wiadomo�� email
$tytul = "Formularz kontaktowy z Machine Factory";

// Przygotowujesz tre�� wiadomo�ci
$wiadomosc = "";
$wiadomosc .= "Imie i nazwisko: " . $name . "\n";
$wiadomosc .= "Email: " . $email . "\n";
$wiadomosc .= "Wiadomo��: " . $message . "\n";

// Dodajemy UTF-8 do naglowka naszej wiadomo�ci
$naglowek = "";
$naglowek .= "Od:" . $odkogo . " \n";
$naglowek .= "Content-Type:text/plain;charset=utf-8";

// Wysy�amy wiadomo��
$sukces = mail($dokogo, $tytul, $wiadomosc, $naglowek);

// Przekierowywujemy na potwierdzenie
if ($sukces){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=potwierdzenie.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
}
?>