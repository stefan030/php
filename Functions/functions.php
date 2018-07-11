<?php

/* Age Verification for a Night Club enterance */

function ageVerification($minAge, $userAge) {
    if ($userAge >= $minAge) {
        echo 'You are allowed to enter, have fun!';
    } else {
        echo 'Sorry buddy, you are not allowed to enter, good night!';
    }
}

/* Another way


function ageVerification($age) {
    return $age >= 21;
}

$clientage = 22;
if(ageVerification($clientage)) {
    echo 'You are allowed to enter, have fun!';
} else {
    echo 'Sorry buddy, you are not allowed to enter, good night!';
}

*/




function dd($data) {
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}