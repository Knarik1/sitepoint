<?php


function recursion($number){
    if ($number<0){
        throw new InvalidArgumentException('number can not be less than zero');
    }
    $factorial = 1;
    if($number >0){
        while($number!=0)
        {$factorial *= $number;
        $number --;
        }
    }
    return $factorial;
}
echo recursion(4);

function recursion2($number){
    if ($number < 0){
        throw new InvalidArgumentException('number can not be less than zero');
    }
   if ($number == 1){
        return 1;
    }
    return $number * recursion2($number - 1);
}
echo recursion2(5);

//the simplest form of recursion
function my_recursion($arg){
    if ('simplest case'){
        //the base case that stops it running forever
        return 'simple value';
    }
    else {
        'call function again with simpler args';
        return my_recursion('$argsimplfied');
    }
}

function find_in_array($key,$arr){
    foreach ($arr as $k => $v) {
        if ($key == $k){
            return $v;
        }
        if (is_array($v)){
            $result = find_in_array($key,$v);
            if ($result != false){
            return $result;}
            }
        }

    }
}