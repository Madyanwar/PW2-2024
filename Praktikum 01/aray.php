<?php
$hewan = ["kucing", "Ayam", "harimau", "singa", "jerapah"];

echo  $hewan[0] ."<br>";
echo  $hewan[4] . "<br>";
echo "<br>";

foreach ($hewan as $key => $value){
    echo $value . "<br>";
}

$hewan[2] = "musang";
echo $hewan[2];
?>