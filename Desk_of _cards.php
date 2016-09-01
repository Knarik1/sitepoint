<?php

//cards
$suits = ['harts', 'clubs', 'diamonds', 'spades'];
$faces = ['A','2','3','4','5','6','7','8','9','10','J','Q','K'];

//desk of cards
$desk = array();
foreach ($suits as $suit){
    foreach ($faces as $face){
        $desk[] = $face.' | '.$suit;
    }
}
// representing cards
echo 'count of all cards is '. count($desk).'<br>';
foreach ($desk as $key)
{
    echo $key.'<br>';
}

//taking a random 11 cards, but array_rand func returns keys not values so we create another array to represent the values
echo 'random 11 cards<br>';
$random_cards_keys = array_rand($desk,11);

foreach ($random_cards_keys as $key) {
    $random_cards = $desk[$key];
    echo $random_cards.'<br>';
   // unset($desk[$key]);// we are taking random 11 cards so the can't more exist in $desk array
}
//guessing the card
echo $message = (in_array('3 | diamonds',$desk))? 'its ok':'sorry, you don\'t pass';
//number of card in array
echo ': what is the number of that card in desk array? - ';
echo array_search('3 | diamonds',$desk);
echo sort($desk);
foreach ($desk as $sortedDesk){
    echo 'sorted desk: '.$sortedDesk."<br>";
}
$slicedDesk = array_slice($desk,0,13);
$desk = array_slice($desk,14,51);
var_dump($slicedDesk);
echo '<br>here is my discarded desk<br>';
var_dump($desk);
echo 'here is my all desk<br>';
$desk = array_merge($desk, $slicedDesk);
foreach ($desk as $value){
    echo $value.'<br>';
}
//don't work
//echo '<br>so I pick up 2 cards<br>';
//foreach ($desk as $card){
//$handcards = explode('|',$card);
//    echo  $faces[$handcards[0]];
//}


