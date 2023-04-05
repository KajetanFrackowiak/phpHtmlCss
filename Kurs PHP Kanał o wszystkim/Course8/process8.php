<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Loops 8</title>
    <link rel="stylesheet" href="style8php.css">
</head>
<body>
<div class="result">
    <table>
        <tr> <!--tr (table row) to wiersz tabeli. Używany do definiowania wiersza tabeli.-->
            <th>WHILE</th>
            <!--th (table header) to nagłówek tabeli. Zwykle używany do oznaczenia pierwszego wiersza lub pierwszej kolumny tabeli, gdzie znajdują się opisy kolumn lub wierszy.-->
            <th>DO WHILE</th>
            <th>FOR</th>
        </tr>
        <tr>
            <td> <!--td (table data) to komórka tabeli. Używany do definiowania pojedynczej komórki w tabeli.-->
                <?php
                //WHILE
                if (isset($_GET['num']) and is_numeric($_GET['num'])) {
                    $a = $_GET['num'];
                    while ($a > 0) {
                        echo "$a<br>";
                        $a--;
                    }
                } else {
                    echo "Not given number";
                }
                ?>
            </td>
            <td>
                <?php
                //DO WHILE
                if (isset($_GET['num']) and is_numeric($_GET['num'])) {
                    $a = $_GET['num'];
                    DO {
                        echo "$a<br>";
                        $a--;
                    } while($a > 0);
                } else {
                    echo "Not given number";
                }
                ?>
            </td>
            <td>
                <?php
                // FOR
                if (isset($_GET['num']) and is_numeric($_GET['num'])) {
                    $a = $_GET['num'];
                    for ($i = 0; $a > 0; $a--) {
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













<?php
//    if (isset($_GET['num']) and is_numeric($_GET['num'])) {
//        $a = $_GET['num'];
//        echo "<br>a = $a <br><br>";
//
//        echo '<table><tr><th>WHILE</th><th>DO WHILE</th><th>FOR</th></tr>';
//        echo '<tr>';
//
//
//        // WHILE
//        echo '<td>';
//        $i = $a;
//        while ($i > 0) {
//            echo "$i<br>";
//            $i--;
//        }
//        echo '</td>';
//
//        // DO WHILE
//        echo '<td>';
//        $j = $a;
//        do {
//            echo "$j<br>";
//            $j--;
//        } while ($j > 0);
//        echo '</td>';
//
//        // FOR
//        echo '<td>';
//        for (; $a > 0; $a--) {
//            echo "$a<br>";
//        }
//        echo '</td>';
//
//        echo '</tr>';
//        echo '</table>';
//    } else {
//        echo "Not given number";
//    }
//    ?>