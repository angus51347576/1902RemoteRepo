<?php

for ($i = 7; $i < 11; $i++) {
    for ($b = 1; $b < 5; $b++) {
        for ($c = 1; $c < 5; $c++) {
            if (($i + $b + $c == 13) && ($i * $b * $c < 50) && ($i * $b * $c > 30)) {
                echo $i, '<br>';
                echo $b, '<br>';
                echo $c, '<br><hr>';

            }
        }
    }
}

$int = '';
for ($i = 1; $i < 100; $i++) {
    if ($i % 2 && $i % 3 && $i % 5 && $i % 7) {
        $int .= $i . '<br>';

    }

}
echo $int, '<br>';
