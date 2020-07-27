<?php
$input = $_GET['S'];
$c = 1;

for ($a=1; $a <= $input; $a++) {
    echo "@";
    for ($b=2; $b <= $input; $b++) {
        if ($a % 2 == 1) {
           if ($a == $c) {
                if ($b == 2) {
                    echo " ";
                } else {
                    echo "@";
                }
           } else {
                if ($b == $input - 1) {
                    echo " ";
                    $c+=2;
                } else {
                    echo "@";
                }
           }
        } else {
            if ($b < $input) {
                echo " ";
            } else {
                echo "@";
                $c+=1;
            }
        }
    }
    echo '<br>';
}
