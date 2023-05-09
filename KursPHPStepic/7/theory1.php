<?php
$str = 'Example line of text';
if (!$fd = fopen('test2.txt', 'wb')) {
    print "File test2.txt cannot be make";
} else {
    if (fwrite($fd, $str) === false) {
        print "An error occurred. The entry was not made";
    } else {
        print "String was saved\n";
    }
    $str = "<br>Next line of text";
    if (fwrite($fd, $str, 10) === false) {
        print "An error occurred. The entry was not made";
    } else {
        print "A string of length 10 was written";
    }
}
?>