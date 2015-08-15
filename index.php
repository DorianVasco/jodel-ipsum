<?php require_once 'gga-BaconIpsumGenerator.php';
$bacon_ipsum_generator = new BaconIpsumGenerator();
print $bacon_ipsum_generator->Make_Some_Meaty_Filler('meat-and-filler', 3, true);
?>
