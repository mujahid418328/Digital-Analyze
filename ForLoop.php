<?php
$rows = 5;
$columns = 5;
for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $columns; $j++) {
        echo "$j ";
    }
    echo "<br>";
}

// tangle paren start hear
// *
// * *
// * * *
// * * * *
// * * * *

    $row = 5;
    // $column = 5;
    for($i = 1; $i<=$row; $i++){
        for($j = 1; $j<=$i; $j++){
            print "$i ";
        }
        print "<br>";
    }
// tangle paren ends hear

// permit tangle preteen start hear

$rows = 5;
//  $columns = 5;
for ($i = 1; $i <= $rows; $i++) {
    for ($k = 1; $k < ($rows - $i); $k++) {
        print "&nbsp;";
    }
    for ($j = 1; $j <= $i; $j++) {
        print "* ";
    }
    print "<br>";
}

        // permit tangle preteen ends hear


// 10 to 10 namta print with for loop start hear

$rows = 100;
$column = 10;

for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $column; $j++) {
        print "$i × $j = " . $i * $j . "<br>";
    }
    print "<br>";
}
// 10 to 10 namta print with for loop ends hear
