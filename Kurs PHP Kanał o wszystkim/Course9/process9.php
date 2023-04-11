<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BREAK CONTINUE GOTO</title>
    <link rel="stylesheet" href="style_process.css">
</head>
<body>
<div class="result">
    <table>
        <tr>
            <th>WHILE</th>
            <th>DO WHILE</th>
            <th>FOR</th>
        </tr>
        <tr>
            <td>
                <?php
                if (isset($_GET['num']) and is_numeric($_GET['num'])) {
                    $a = $_GET['num'];
                    while ($a > 0) {
                        echo "$a<br>";
                        if ($a == 5) {
                            break;
                        }
                        $a--;
                    }
                } else {
                    echo "Not given number";
                }
                ?>
            </td>
            <td>
                <?php
                if (isset($_GET['num']) and is_numeric($_GET['num'])) {
                    $a = $_GET['num'];
                    do {
                        if ($a % 2 == 1) {
                            goto lab1;
                        }
                        echo "$a - liczba parzysta<br>";
                        $a--;
                        continue;
                        lab1:
                        echo "$a - nieparzysta<br>";
                        $a--;

                    } while ($a > 0);
                } else {
                    echo "Not given number";
                }
                ?>
            </td>
            <td>
                <?php
                if (isset($_GET['num']) and is_numeric($_GET['num'])) {
                    $a = $_GET['num'];
                    for ($i = 0; $a > $i; $a--) {
                        if ($a % 2 == 1) {
                            continue;
                        }
                        echo "$a<br>";
                    }
                } else {
                    echo "Not given number";
                }
                ?>
            </td>
        </tr>
    </table>
</div>
</body>
</html>
