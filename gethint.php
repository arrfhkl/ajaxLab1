<?php
// Array with names
$a[] = "Honda";
$a[] = "Yamaha";
$a[] = "Hyundai";
$a[] = "Porsche";
$a[] = "Buggati";
$a[] = "Ford";
$a[] = "Toyota";
$a[] = "Ferrari";
$a[] = "Koniegseg";
$a[] = "Perodua";
$a[] = "Proton";
$a[] = "BMW";
$a[] = "Lamborghini";
$a[] = "Volkswagen";
$a[] = "Audi";
$a[] = "Mitsubishi";
$a[] = "Tuatara";
$a[] = "Mercedes";
$a[] = "Kawasaki";
$a[] = "Suzuki";
$a[] = "Yamaha";
$a[] = "Mazda";
$a[] = "Subaru";
$a[] = "Chevrolet";
$a[] = "KIA";
$a[] = "Nissan";
$a[] = "Land Rover";
$a[] = "Volvo";
$a[] = "Fiat";
$a[] = "Lotus";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>