<?php

    $intereses=["Impacto en animales","Bosques y reforestación","Transporte sostenible"];
    
    $acciones=["Reciclaje","Reducir el uso de plásticos","Usar transporte sostenible","Ahorrar energía en casa"];
    
?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilochulo.css">
    <title>Suscripción - Cambio Climático</title>
</head>
<body>
    <header>
        <h1 style="font-size: 40px; text-align: center; font-weight: bold;">Suscríbete para enterarte de nuevas novedades</h1>
        <div class="nav">
            <h4><a href="index.html">Inicio</a></h4>
            <h4><a href="agricultura-y-alimentos.html">Agricultura y alimentos</a></h4>
        </div>
    </header>
    <main>
        <form class="boletin" action="recogerpost.php" method="post">
            <h3>Suscríbete para enterarte de nuevas novedades</h3>
            <p for="nombre">Nombre:</p>
            <input type="text" id="nombre" name="nombre" placeholder="Tu nombre">
            <p for="apellidos">Apellidos:</p>
            <input type="text" id="apellidos" name="apellidos" placeholder="Tus apellidos">
            <p for="correo">Correo electrónico:</p>
            <input type="email" id="correo" name="correo" placeholder="Tu correo">
            <p>Contraseña:</p><br>
            <input type="password" placeholder="contraseña" name="pw">
            <div>¿Qué te impactó más?</div>
            <div class="opciones">
                <p><input type="radio" name="impacto">El oso polar</p>
                <p><input type="radio" name="impacto">Biodiversidad</p>
                <p><input type="radio" name="impacto">Soluciones</p>
                <p><input type="radio" name="impacto">Datos</p>
            </div>
            <div>Tema de interés</div>
            <select name="intereses">
                <?php 
                    foreach($intereses as $indice => $contenido){
                        echo '<option value="'.$indice.'">'.$contenido.'</option>';
                    }
                ?>
            </select>
            <span>Acciones que has realizado para combatir el cambio climático:</span>
            <div class="acciones">
                <?php 
                    foreach($acciones as $indice => $contenido){
                        echo '<p><input type="checkbox" name="acciones[]" value="'.$contenido.'">'.$texto.'</p>';
                    }
                ?>
            </div>
            <div>Sugerencias:</div>
            <input type="text" name="sugerencias" placeholder="Escribe aquí tu sugerencia">
            <div class="condiciones-p">
                <input type="checkbox" name="condiciones" value="acepto" id="condiciones">
                <p for="condiciones" style="margin:0;">Acepto los términos y condiciones</p>
            </div>
            <button>Enviar</button>
            <button type="reset">Borrar todo</button>
        </form>
    </main>
</body>
</html>
