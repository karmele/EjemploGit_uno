<?php 

      /*
       * función que calcula el área de un cuadrado
       */
      function calcularArea($lado)
      {
          $area = $lado * $lado;
          return $area;
      }
       /*
       * función que calcula la media
       */
      function calcularMedia($num1, $num2, $num3)
      {
          return ($num1 + $num2 + $num3) / 3;
      }
      /*
       * función que muestra unmensaje
       */
      function mostrarMensaje($mensaje)
      {
         echo "<p>$mensaje</p>";
         
      }