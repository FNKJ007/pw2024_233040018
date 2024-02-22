<?php
$first_name = 'muhammad haekal';
$last_name = 'alghazy';
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 and $i % 5 == 0) {
        echo $first_name . $last_name . "<br>";
    } else if ($i % 3 == 0) {
        echo $first_name . "<br>";
    } else if ($i % 5 == 0) {
        echo $last_name . "<br>";
    } else {
        echo $i . "<br>";
    }
}
?>  