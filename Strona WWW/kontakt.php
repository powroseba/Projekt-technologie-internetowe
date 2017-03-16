<?php


$name = $_POST['name'];


$email = $_POST['email'];

$message = $_POST['message'];


$odkogo = "biuro@79level.pl";

// Podajesz adres email na który chcesz otrzymaæ wiadomoœæ
$dokogo = "powroseba@o2.pl";

// Podajesz tytu³ jaki ma mieæ ta wiadomoœæ email
$tytul = "Formularz kontaktowy z Machine Factory";

// Przygotowujesz treœæ wiadomoœci
$wiadomosc = "";
$wiadomosc .= "Imie i nazwisko: " . $name . "\n";
$wiadomosc .= "Email: " . $email . "\n";
$wiadomosc .= "Wiadomoœæ: " . $message . "\n";

// Dodajemy UTF-8 do naglowka naszej wiadomoœci
$naglowek = "";
$naglowek .= "Od:" . $odkogo . " \n";
$naglowek .= "Content-Type:text/plain;charset=utf-8";

// Wysy³amy wiadomoœæ
$sukces = mail($dokogo, $tytul, $wiadomosc, $naglowek);

// Przekierowywujemy na potwierdzenie
if ($sukces){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=potwierdzenie.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
}
?>