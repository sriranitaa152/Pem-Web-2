<?php
// array index
$animals = ['Kambing', 'Kucing', 'Ayam'];

// akses array
foreach($animals as $animal){
    echo $animal . '<br>';
}

// array assosiatif
$student = [
    'name' => 'Nita',
    'major' => 'Informatict',
    'ege' => 20
];

echo $student['name'];
