<?php

/* 
 * imprimir en pantalla todas las tablas de multiplicar del
 * 1-10 en una tabla html.
 */
echo '<table border="1"><tr>';
echo '<tr>';//inicio fila 1
      for($c = 1;$c <= 10;$c++){  
              echo "<td>Tabla de Multiplicar del $c</td>";
       }
echo '</tr>';//final fila 1
echo '<tr>';//inicio fila2
      for($f = 1;$f <= 10;$f++){ 
         echo '<td>';
              for ($i = 1;$i <= 10 ;$i++) {
                   echo "$f x $i = ".($f * $i)."<br/>";   
    
               }
         echo '</td>';

      }
echo '<tr>';//final fila 2
echo '</table>'; 