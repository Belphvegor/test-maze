<?php
$input = $_GET['S'];
$c = 1;

for ($a=1; $a <= $input; $a++) {
    echo "@";
    for ($b=2; $b <= $input; $b++) {
        if ($a % 2 == 1) {
            // echo $a." ".$c;
           if ($a == $c) {
                if ($b == 2) {
                    echo "&nbsp;";
                } else {
                    echo "@";
                }
           } else {
                if ($b == $input - 1) {
                    echo "&nbsp;";
                    $c+=2;
                } else {
                    echo "@";
                }
           }
        } else {
            if ($b < $input) {
                echo "&nbsp;";
            } else {
                // echo "@".$a."".$c;
                echo "@";

                $c+=1;
            }
        }
    }
    echo '<br>';
}
