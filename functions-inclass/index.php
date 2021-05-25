<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

//  FIRST
$rev = 'string';
echo 'string in reverse is ' .strrev($rev);

//  SECOND
$cookies = ['chocolate', 'vanila', 'red velvet'];
echo end($cookies);

//  THIRD
function mixing() {
    $fru = ['melon', 'apple', 'banana'];
    $it = ['orange', 'plumb', 'apricot'];

    $fruit = array_merge($fru, $it);

    echo $result = shuffle($fruit);
}

//  FOURTH
$drinks = ['coffee', 'juice', 'beer', 'tea'];

$length = array_map('strlen', $drinks);

$longest = max($length);
$shortest = min($length);

?>

</body>
</html>