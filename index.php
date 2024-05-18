<?php
require_once 'modelo/datospersona.php';
$persona1 = new datospersona();

$persona1-> nombre ='Nicolas' ;
$persona1-> apellido ='Merino';
$persona1-> email ='nicolas@gmail.com';
$persona1 -> edad =26;
$persona1->Mostrarpropiedades();