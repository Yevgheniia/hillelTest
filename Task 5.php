<?php
function FindElem($arr, $num)
{
    if(is_array($arr)){

      $result = [];
    if(isset($arr,$num)){

        $result[0] = $arr[$num];
    }
        foreach ($arr as  $value ){
            if (is_array($value)){
                $result = array_merge($result,FindElem($value,$num));
            }
        }
    }


    return $result;
}
$arr = [ 1,5,11=>[111,3,4], 2, 33=>[55,66,77], 7, 31, 4, 1111, 8=>[11111,222,333,444], 6];

print_r(FindElem($arr,1));

function CountLet($line)
{
    if (is_string($line)){
        $count =0;
        $array = str_split($line);

        foreach ($array as $value){
            if ($value=='b'){
                $count++;
            }
        }

    }
    else{
        return false;
    }
    return $count;

}

echo '_________________'.CountLet('wkibchbjwikbid');

