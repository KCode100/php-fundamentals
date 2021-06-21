<?php

// ARRAY LENGTH
$family= array("father","mother", "sister", "brother");
$arrLength = count($family);
echo "$arrLength";
echo "<br>";

// LOOP THROUGH ARRAY
for ($i = 0; $i < $arrLength; $i++) {
    echo $family[$i];
    echo "<br>";
}

// ASSOCIATIVE ARRAYS
$myArray= array("Kivi"=>27, "Chani" => 22, "Zehava"=> 3);

// LOOP THROUGH ASSOCIATIVE ARRAY (USING FOREACH)
foreach($myArray as $i => $i_value) {
    echo "I am " . $i . ", and I am " . "$i_value" . " years old";
    echo "<br>";
}

// SORT IN ALPHABETICAL ORDER
sort($family);

for ($i = 0; $i <$arrLength; $i++) {
    echo $family[$i];
    echo "<br>";
}
// SORT NUMBER IN ASCENDING ORDER
$numbers = array(3,54,2,52,577,44);
sort($numbers);
$arrLength = count($numbers);
for ($i = 0; $i < $arrLength; $i++) {
    echo $numbers[$i];
    echo "<br>";
}
// SORT IN DESCENDING ALPHABETICAL ORDER

// SORT IN DESCENDING NUMERICAL ORDER
echo "<br>";
rsort($numbers);
$arrLength = count($numbers);
for ($i = 0; $i < $arrLength; $i++) {
    echo $numbers[$i];
    echo "<br>";
}

?>