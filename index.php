<?php
//Include the clases
Include 'Pet.php';
Include 'Owner.php';
//Include 'Expedient.php'

$test = new Pet();

$test->setName("manchas");
echo $test->getName();

$owner = new Owner();
$owner->setName("Fabiola");
echo $owner->getName();

?>