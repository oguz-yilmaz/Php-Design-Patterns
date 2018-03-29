<?php

require_once "Curriculum/InterfaceCurriculum.php";
require_once "Curriculum/Curriculums/MainCurriculum.php";
require_once "Curriculum/Curriculums/SubCurriculum.php";


$trigonometry   = new SubCurriculum("Trigonometry");
$naturalNumbers = new SubCurriculum("Natural Numbers");
$geometry       = new SubCurriculum("Geometry");
$integral       = new SubCurriculum("Integral");

$math = new MainCurriculum("Math", [ $trigonometry,  $naturalNumbers, $geometry, $integral]);

$physicsOfMatter   = new SubCurriculum("Physics of Matter");
$quantumMechanics  = new SubCurriculum("Quantum Mechanics");
$biologicalPhysics = new SubCurriculum("Biological Physics");
$solidState1       = new SubCurriculum("Solid State Physics I");
$solidState2       = new SubCurriculum("Solid State Physics II");

$physics = new MainCurriculum("Physics", [ $physicsOfMatter,  $quantumMechanics, $biologicalPhysics, $solidState1, $solidState2]);

echo $math->getTitle()."<br>";
echo $physics->getTitle()."<br>";