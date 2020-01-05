<?php

$input = [
    'phone_code' => '+38', // optional
    'phone_number' => '(000) 111-2233',
    'first_name' => 'John',
    'middle_name' => 'Malcolm', // optional
    'last_name' => 'Doe'

];

$output = [
    'phone' => ($input['phone_code'] ?? null) . ' ' . $input['phone_number'],
    'name' => $input['first_name'] . ' ' . ($input['middle_name'] ?? null) . ' ' . $input['last_name'],
];

?>

<ul>
    <li><a href="tel:<? echo $output['phone']; ?>"><? echo $output['phone']; ?></a></li>
    <li><? echo $output['name']; ?></li>
</ul>
