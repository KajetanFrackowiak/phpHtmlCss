<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Test PHP</title>
</head>
<body>
<?php
$dir = "./";
if (!($fd = opendir($dir))){
    exit("Nie mogę otworzyć katalogu $dir");
}
while (($file = readdir($fd)) !== false)
    echo "$file<br/>";
closedir($fd);
?>
</body>
</html>