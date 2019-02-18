<?php 

$names = array('Train', 'Plain', 'Rain',);

/*
// Alternative way of looping in PHP
$count = 0;

while ($count < count($names)) {
echo "<li> My favourite list of Names is $names[$count]</li>";
$count++;
}
// count($names) works just as [.lenght [read-only]] property would work in JS 
*/

for ($count = 0; $count < count($names); $count++) {
    echo "<li> My favourite list of words is $names[$count]</li>";
} 


?>
