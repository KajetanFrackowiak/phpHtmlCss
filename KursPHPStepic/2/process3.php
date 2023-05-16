<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Test PHP</title>
</head>
<body>
<?php
mkdir("nowy_katalog"); # Utworzy katalog w projekcie
mkdir("C:\xampp\htdocs\WEBOWE własne kursy\PHP-HTML-CSS\KursPHPStepic\nowy katalog"); # #Nie utworzy katalogu nowy_katalog, ponieważ nie ma katalogu o nazwie nieistniejący katalog
mkdir("C:\xampp\htdocs\WEBOWE własne kursy\PHP-HTML-CSS\KursPHPStepic\nowy katalog", 0777,true); #Tutaj zostanie utworzona ścieżka katalogu oraz zostanie jemu przydzielone pełne prawa dostępu w systemie Linux

mkdir("new_directory");
mkdir("C:\xampp\htdocs\WEBOWE własne kursy\PHP-HTML-CSS\KursPHPStepic\new_directory", 0777, true);
$i = 2;
$j = 3;
print "$j $i";
?>
</body>
</html>