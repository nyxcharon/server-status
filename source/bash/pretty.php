<?php
$filename="status";

$lines = file($filename, FILE_IGNORE_NEW_LINES);

foreach ($lines as &$value)
    {
        echo "$value\n";
    }

?>
