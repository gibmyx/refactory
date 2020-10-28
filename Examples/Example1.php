<?php
use App\Origin\Origin_1;
use App\Refactory\Refactory_1;

//Example 1, Origin
$origin_1 = new Origin_1();
$post = $origin_1->excecute();
echo "<h1>(Origin) Posts Publicados " . count($post) ."</h1>";
echo var_dump($post);
exit;

//Example 1, Refactory
$refactory_1 = new Refactory_1();
$post = $refactory_1->excecute();
echo "<h1>(Refactory) Posts Publicados " . count($post) ."</h1>";
echo var_dump($post);
exit;