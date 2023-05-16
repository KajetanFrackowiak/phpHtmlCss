<?php
//if (!$fd = fopen('test3.txt', 'r')) {
//    echo "test3.txt file cannot be opened";
//} else {
//    $str = fgets($fd);
//    echo $str;
//    $str = fgets($fd);
//    echo $str;
//    fseek($fd, SEEK_SET); // moves us to the beginning of the file
//    $str = fgets($fd);
//    echo $str;
//}
//?>

<?php
$fp = fopen("test2.txt", "r+");

if (flock($fp, LOCK_EX)) {
    fwrite($fp, "Write something here\n");
    flock($fp, LOCK_UN);
    echo filesize('test2.txt') . "<br>";
    echo filetype('test2.txt') . "<br>";
} else {
    echo "Couldn't get the lock!";
}
?>
