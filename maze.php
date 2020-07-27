<?php
$input = $_GET['S'];
$S = (4 * $input) - 1;
$c = 1;

for ($a=1; $a <= $S; $a++) {
    echo "@";
    for ($b=2; $b <= $S; $b++) {
        if ($a % 2 == 1) {
           if ($a == $c) {
                if ($b == 2) {
                    echo " ";
                } else {
                    echo "@";
                }
           } else {
                if ($b == $S - 1) {
                    echo " ";
                    $c+=2;
                } else {
                    echo "@";
                }
           }
        } else {
            if ($b < $S) {
                echo " ";
            } else {
                echo "@";
                $c+=1;
            }
        }
    }
    echo '<br>';
}
