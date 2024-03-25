<?php
class hewanMamalia
{
    public $warna;
    public $namaHewan;
    public $habitat;
    function makan()
    {
        return "Mamalia Makan";
    }
    function minum()
    {
        return "Mamalia Minum";
    }
    function menyusui()
    {
        return "Mamalia Menyusui";
    }
    
}

$mamalia = new hewanMamalia();
$mamalia->namaHewan = "Lumba Lumba";
echo $mamalia->namaHewan;
echo "<br>";
echo $mamalia->warna = "Abu ABu";
echo "<br>";
echo $mamalia->habitat = "Laut";
echo "<br>";
echo $mamalia->makan();
echo "<br>";
echo $mamalia->minum();
echo "<br>";
echo $mamalia->menyusui();
echo "<br>";


?>