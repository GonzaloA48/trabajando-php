<?php
    //Funcion sin parametros

    function saludo (){
        echo "<H2>"."Buenas tardes, la fecha de hoy es: "."</H2>";
        echo date ('Y-M-D');
    }

    echo saludo();

    //FUNCION CON ENVIO PARAMETROS 
        function saludar ($nombre,$apellido){
            echo "<h2>" ."Buenas tardes " .$nombre." ".$apellido."</h2>";

        }
        echo saludar("Gonzalo" , "Asero");
        echo saludar("Luis" , "Yepez");
        
        function multiplicar($a,$b,$c){
            echo "<h2>" ."El resultdo es:" .$a*$b*$c.  "</h2>";
            
        }
        echo multiplicar (5,2,4);
        echo multiplicar (5,7,5);
        //Funcion area de un circulo

        function areaCirculo($radio){
            echo "el area del circulo es:" .pi()*pow($radio,2);

        }
        $r = 5;
        echo areaCirculo($r);

        // Manejo de sesiones 


    echo "<h1>"."FUNCIONES EN PHP"."</h1><br>";
    

?>