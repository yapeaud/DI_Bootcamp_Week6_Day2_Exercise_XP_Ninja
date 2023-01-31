<?php
function factorial($nbr) {

    if ($nbr < 2) {
        return 1;
    } else {
        return ($nbr * factorial($nbr-1));
    }
}
$nbr = 5;
echo "Factorial of $nbr is " .factorial($nbr);
?>