<?php

// PLAIN TEXT
cariTigaLima(1, 100);

// ARRAY GROUP
tigaLimaWithRange(1, 100);


// Main condision
function mainConditional($i)
{
    if ($i % 5 == 0 && $i % 3 == 0) {
        return 'TigaLima';
    } else if ($i % 5 == 0) {
        return 'Lima';
    } else if ($i % 3 == 0) {
        return 'Tiga';
    } else {
        return $i;
    }
}

// With normal loop
function cariTigaLima($start, $end)
{
    for ($i = $start; $i <= $end; $i++) {
        echo mainConditional($i) . '<br>';
    }
}

// with array
function tigaLimaWithRange($start, $end)
{
    $range = range($start, $end);

    $return = [
        'TigaLima' => [],
        'Tiga' => [],
        'Lima' => [],
        'other' => []
    ];

    foreach ($range as $rg) {
        $target = mainConditional($rg);
        if (isset($return[$target])) {
            $return[$target][] = $rg;
        } else {
            $return['other'][] = $rg;
        }
    }

    echo '<pre>';
    print_r($return);
    echo '</pre>';
}
