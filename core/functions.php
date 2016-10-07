<?php

/* Dump and Die */
function dd($theData) {
    echo '<pre>';
    die(var_dump($theData));
    echo '</pre>';
}



/* Silly age homework */
// if (age(15)) {
//     echo 'you are old enough';
// } else {
//     echo 'too young';
// }

function age($age) {
    if ($age >= 21) {
        return true;
    } else {
        return false;
    }
}
