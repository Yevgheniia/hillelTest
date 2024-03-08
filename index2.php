<?php
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
$res=count($arr);
echo ($res.'--------------');
$arr2=array_slice($arr,0,4);
$arr3=array_slice($arr,4);
$new_array=array_merge($arr3,$arr2);
print_r($new_array);

$sum=$arr[3]+$arr[4]+$arr[5];
echo ('Сумма равна '.$sum.'----------');

$firstArr = [

    'one' => 1,

    'two' => 2,

    'three' => 3,

    'foure' => 5,

    'five' => 12,

];

$secondArr = [

    'one' => 1,

    'seven' => 22,

    'three' => 32,

    'foure' => 5,

    'five' => 13,

    'six' => 37,

];
foreach ($secondArr as $key => $value) {
    if (!array_key_exists($key, $firstArr)) {
        $result[$key] = $value;
    }
}

print_r($result);

foreach ($firstArr as $key => $value) {
    if (!array_key_exists($key, $secondArr)) {
        $result1[$key] = $value;
    }
}

print_r($result1);

echo '-------------------';

$match = [];

foreach ($firstArr as $key => $value) {
    foreach ($secondArr as $key2 => $value2)
    if ( $value2 == $value) {
        $match[$key] = $value;
    }
}

print_r($match);

echo '-------------------';


$differentValues = array_values(array_diff($firstArr, $secondArr));
$differentValues2 = array_values(array_diff($secondArr, $firstArr));
$res=array_merge($differentValues,$differentValues2);
print_r($res);

echo '-------------------';

$NewArr = [

    'one' => 1,

    'two' => [

        'one' => 1,

        'seven' => 22,

        'three' => 32,

    ],

    'three' => [

        'one' => 1,

        'two' => 2,

    ],

    'foure' => 5,

    'five' => [

        'three' => 32,

        'foure' => 5,

        'five' => 12,

    ],

];

$secondElements = [];

foreach ($NewArr as $key => $value) {
    if (is_array($value)) {
        $count=0;
        foreach ($value as $key2 => $Value2) {
            if ($count==1) {
                $secondElements[$key2] = $Value2;
            }
            $count++;
        }
    }
}

print_r($secondElements);

echo '-------------------';

$countArr = 0;
foreach ($NewArr as $value) {
    $countArr++;
    if (is_array($value)) {
        $countArr +=count($value);
    }
}
echo $countArr.'___________________';
echo '-------------------';

$result = 0;
foreach ($NewArr as $key => $value) {

    if (is_array($value)) {
       foreach ($value as $key2 => $value2){
           $result+=$value2;
        }
    }
    else{
        $result+=$value;
    }

}
echo $result.'___________________';





