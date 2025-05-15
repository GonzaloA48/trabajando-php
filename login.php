<?php
    session_start();  // siempre se hace al inicio 
    //suponer que el usuario se autentico

    $_SESSION['usuario']= "Diana";
    $_SESSION['rol']= "Docente";

    echo"Sesion Iniciada" . "<br>";

    echo "<a href = 'bienvenida.php' > Ir a la pagina de bienvenida</a>";













?>