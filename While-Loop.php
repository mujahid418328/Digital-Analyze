<?php
// while loop start hear//
$i = 0;
while ($i < 10) {
    $i++;
    if ($i == 3) {
        continue;
    }
    echo $i . "<br>";
}
// while loop ends hear//


//  do while loop start hear//
$i = 1;
do {
    echo $i . "<br>";
    $i++;
    if ($i == 6) {
        break;
    }
} while ($i < 10);
//  do while loop ends hear//
