<?php

use App\Utils\Countries;

$countries = Countries::getCountiesList();
$values = $keys = array_values($countries);

return array_combine($keys, $values);
