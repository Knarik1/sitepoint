<?php

$options = [
//    'salt' => custom_function_for_salt(), //it's  my own function
    'cost' => '15' //the default is 10
];
$hash = password_hash('hi', PASSWORD_BCRYPT,$options);
var_dump(password_get_info($hash));
if (password_verify('hi',$hash)){
    echo '<br>the password is correct!<br>';
} else {
    echo '<br>the password is wrong!<br>';
};

if (password_needs_rehash('hi',PASSWORD_BCRYPT,['cost' => 7])){
    $hash = password_hash('hi',PASSWORD_BCRYPT,['cost' => 7]);
    var_dump(password_get_info($hash));
}
function custom_function_for_salt(){
    $x = rand();//need to be 22 bits
    return $x;
}