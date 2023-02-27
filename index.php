<?php

/*
Ref:
https://stackoverflow.com/questions/19271381/correctly-determine-if-date-string-is-a-valid-date-in-that-format

Regex: '[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])T(2[0-3]|[01][0-9]):[0-5][0-9]:[0-9][0-9]\|[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])T(2[0-3]|[01][0-9]):[0-5][0-9]:[0-9][0-9]'
*/

$datetime = '2023-01-01T23:59:00';
$two_datetime = '2023-01-01T00:00:00|2023-01-31T23:59:00';

$format = 'Y-m-d\TH:i:s';

$d = DateTime::createFromFormat($format, $datetime);
$f = $d->format($format);
$bool = $d->format($format) === $datetime;

echo $d && $d->format($format) === $datetime;

