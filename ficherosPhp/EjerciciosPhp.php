

    
    

<?php
    // 1. Muestra hola mundo por pantalla (sin estructura HTML).
        echo "Hola mundo"
?>

<p></p>

<?php
    // 2. Crea dos variables y sumarlas y muestra el resultado.

    //Variables
        $x = 3;
        $y = 4;
    // Mostrar por Pantalla
        echo $y + $x;
?>

</p>

<?php 
    // 3. Muestra los números del 1 al 10 en pantalla (primero con un bucle while y luego con un bucle for.

        //bucle while

            $x = 0 ;
            while ($x <= 10) {
                echo "$x ";
                $x += 1;
            }
            ?>
</p>

<?php
        //bucle for
        
            $x = 0;
            for($x=0; $x <= 10; $x++){
                echo "$x ";
            }
?>
