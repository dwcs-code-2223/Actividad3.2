<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
require_once "Persoa.php";
require_once 'Profesor.php';
require_once 'Alumno.php';
require_once 'Academia.php';
require_once 'Baile.php';
require_once "util.php";



$academia = new Academia();
$profe1 = new Profesor("Silvia", "López López", "666777888", "12345678D");

$salsa = new Baile("Salsa");
$bachata = new Baile("Bachata", 12);
$tango = new Baile("Tango", 16);
$afro = new Baile("AFRO", 18);
$afro2 = new Baile("AFRO", 8);

$profe1->engadir($salsa);
$profe1->engadir($bachata);
$profe1->engadir($tango);
$profe1->engadir($afro);
$profe1->engadir($afro2);

//$profe1->engadirSoDiferenteNome($salsa);
//$profe1->engadirSoDiferenteNome($bachata);
//$profe1->engadirSoDiferenteNome($tango);
//$profe1->engadirSoDiferenteNome($afro);
//$profe1->engadirSoDiferenteNome($afro2);

$alumno1 = new Alumno("Juan", "Antas Ulla", "650650650");
$alumno2 = new Alumno("Rita", "Román Rueda", "652652652");

$alumno1->setNumClases(0);
$alumno2->setNumClases(4);

$academia->engadirAlumno($alumno1);
$academia->engadirAlumno($alumno2);

$academia->engadirProfe($profe1);

$profe1->verInformacion();

$soldo = $profe1->calcularSoldo(2);
echo "O soldo do profe é: " . $soldo . "<br/>";

echo $profe1->getNome() . " imparte os seguintes bailes: <br/>";
$profe1->mostrarBailes();

mostrarImporte($alumno1);
mostrarImporte($alumno2);

$profe1->eliminar(new Baile("AFRO"));
$profe1->mostrarBailes();




function mostrarImporte(Alumno $alumno) {
    $cuotaA1 = $alumno->aPagar();
    echo "Alumno/a: " . $alumno->getNome() . " debe pagar $cuotaA1 €<br/>";
}
