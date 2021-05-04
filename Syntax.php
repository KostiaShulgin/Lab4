<?php
//hash array + string concat.
$hashArray = [
    'first' => 'Hello',
    'second' => 'world!'
];
echo $hashArray['first'] . ' ' . $hashArray['second'];
echo '<br/>';

//loops, comparing values
$a = 10;
for ($i=0;$i<10;$i++){
    echo $a+$i;
    echo ' ';
}
echo '<br/>';
while($a!==30){
    echo $a;
    echo ' ';
    $a++;
}
echo '<br/>';

//explode,  implode
$str = 'This is string for explode.';
$strArr = explode(' ',$str);

foreach ($strArr as $word){
    echo $word;
    echo '<br/>';
}

$strImpl = implode(' ', $strArr);
echo $strImpl;
?>
