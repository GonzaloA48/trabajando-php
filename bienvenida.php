<?php
    session_start();

    if(isset($_SESSION['usuario'])  && isset($_session['rol']))
    {
        echo "Hola";
    }
    else
        echo "No estas autenticado";



?>