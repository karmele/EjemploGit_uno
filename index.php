<?php

// 1º Admin: incluir funciones.php el admin
include "utilidades/funciones.php";

// 2º El Colaborador: incluir la función calcularArea() con la rama: func1
 echo "<h3>Cálculo del área de un cuadrado</h3>";
 $lado = 3;
 $area = calcularArea($lado); 
 $resultado = "<p>El &aacute;rea de un cuadrado de lado $lado es $area " . "</p>";


// 3º Uno de ellos:incluir la función calcularMedia() con la rama: func2
 $resultado.= "<h3>La media de 4, 5, 6 es ".calcularMedia(4, 5, 6)."</h3>"; 

// $resultado .= mostrarMensaje("Ejemplo de función sin valor de retorno"); 
// $resultado.= mostrarLineaHorizontal(); 


include "vistas/vista_resultado.php";
