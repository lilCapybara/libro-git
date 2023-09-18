<?php
    function armarTabla($limite){
           

        for($i=0; $i<=$limite;$i++){ /** HEAD */
            echo "<th>".$i."</th>";
        }



        for($i=1; $i<=$limite;$i++){
            
            echo "<tr>"; /**INICIO DE LA FILA */

            echo "<td>".$i."</td>"; /**HEADER DE LA COLUMNA */

            for($j=1; $j<=$limite; $j++){   /**CELDAS INTERIORES */
                echo "<td>".$i*$j."</td>";
            }
            
            echo "</tr>"; /**FIN DE LA FILA */
        }      
    }
?>
