<?php
$file_path = '/var/www/html/day_16/index.php';
if (file_exists($file_path)){
echo 'this file size is: '.filesize($file_path).'bytes<br>';
} else {
    echo 'file doesn\'t exist';
}
echo date('Y M d, g:i a',filectime($file_path)).PHP_EOL;
echo (is_readable($file_path)? 'yes':'no').PHP_EOL;
echo (is_file($file_path)? 'yes ok':'no').'<br>';
$file2 = 'https://en.wikipedia.org/wiki/ Hypertext_Transfer_Protocol';
$file_read = file_get_contents($file2);
echo $file_read;

$my_file = '/var/www/html/day_14/Array.txt';
$file4 = fopen($my_file, 'a');
$get_file = file_put_contents($my_file,'ohoho oo  ooo o');
echo $get_file;


$file5 = "/var/www/html/day_14/employees.csv";
$f = fopen($file5, "a");

$newFields = array(
    array('Tom', 'Jones', 36, 'Accountant'),
    array('Freda', 'Williams', 45, 'Analyst'),
    array('Brenda', 'Collins', 34, 'Engineer'));

foreach($newFields as $fields)  {
    fputcsv($f, $fields);
}
fclose($f);