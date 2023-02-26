

   <!-----           Miguel Angel Ortiz Escobar
                       Desarrollo web en PHP
                    Actividad 2 - Sintaxis en PHP      ----->
                  
                                                                           
<!DOCTYPE html>
<html>
    <head>
        <title>Actividad 2 - Sintaxis de PHP</title>
        <meta http-equiv="Content-Type"
            content="text/html; charset=ISO-8859-1" />
    </head>
        <h3>Taller: Uso de arreglos - Miguel Angel Ortiz Escobar</h3>
        <?php
            $Colores = array (
                "Amarillo" => "Riqueza y Alegria",
                "Cafe" => "Pureza y Naturaleza",
                "Azul" => "Mar y Suavidad"
            );
            
        /* Agregamos un arreglo que contenga los colores favoritos de cada persona */
            
            $Directorio = array (
                array("Nombre","Dirección","Teléfono","Fecha de Cumpleaños","Color Favorito","Significado"),
                array("Miguel Ortiz","Cra. 63 # 23 - 36",3425746789,"06/08/2004","Azul"),
                array("Jorge Ortiz","Clle 27 # 26 - 78 sur",32146354567,"04/20/1970","Verde"),
                array("Andrea Escobar","Av 37 # 17 - 34",31862135423,"04/18/1985","Cafe"),
            );
          
        /* Agregamos un arreglo que contenga el directorio (datos) de las personas  */

        for($i=1;$i<4;$i++){
            $color=$Directorio[$i][4];
                if(empty($Colores[$color])){
                    $Directorio[$i][5]='No se encuentra el significado'; 
                }
              
        /* Mediante el for, decimos que $color esta ubicado en la 4 casilla
        (color favorito), despues decimos que si en el arreglo de colores no se 
        encuentra color en el directorio, imprima 'No se encuentra el significado'  */      
              
                else {
                   $Directorio[$i][5]=$Colores[$color];
                }  
             
        /* Y aqui decimos que de lo contrario, si se encuentra color en colores, va a imprimirlo 
        en la quinta casilla que es significado */
             
        }
        ?>
        
    <table border="2" width="50%" cellspacing="0">
             
    <!-- aqui creamos la tabla y le damos medidas para que se arregle mejor -->
             
        <?php
            foreach ($Directorio as $fila){
                echo "<tr>";
                    foreach ($fila as $celda){
                        echo "<td> $celda </td>";
                    }
                echo "</tr>";
            }
        ?>
    
    <!-- Mediante foreach, recorremos el arreglo y presentamos los datos organizados en la tabla que creamos -->
            
    </table>
</html>