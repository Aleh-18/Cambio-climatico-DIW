<?php 
echo "<h2>Datos recibidos del formulario:</h2>";

// Campos de texto: existen siempre, pueden estar vacíos
if (!empty($_POST["nombre"])) {
    echo '<p>Nombre: ' . $_POST["nombre"] . '</p>';
} else {
    echo '<p>Nombre: No proporcionado</p>';
}

if (!empty($_POST["apellidos"])) {
    echo '<p>Apellidos: ' . $_POST["apellidos"] . '</p>';
} else {
    echo '<p>Apellidos: No proporcionado</p>';
}

if (!empty($_POST["correo"])) {
    echo '<p>Correo: ' . $_POST["correo"] . '</p>';
} else {
    echo '<p>Correo: No proporcionado</p>';
}

if (!empty($_POST["pw"])) {
    echo '<p>Contraseña: ' . $_POST["pw"] . '</p>';
} else {
    echo '<p>Contraseña: No proporcionada</p>';
}

// Radio: solo existe si se selecciona
if (isset($_POST["impacto"])) {
    echo '<p>Impacto: ' . $_POST["impacto"] . '</p>';
} else {
    echo '<p>Impacto: No seleccionado</p>';
}

// Select: siempre existe, puede estar vacío
if (!empty($_POST["intereses"])) {
    echo '<p>Interés: ' . $_POST["intereses"] . '</p>';
} else {
    echo '<p>Interés: No seleccionado</p>';
}

// Checkbox: solo existe si se selecciona al menos uno
if (isset($_POST["acciones"]) && is_array($_POST["acciones"])) {
    echo '<p>Acciones realizadas:</p>';
    foreach ($_POST["acciones"] as $accion) {
        echo "<p>- $accion</p>";
    }
} else {
    echo '<p>Acciones realizadas: Ninguna</p>';
}

// Sugerencias: campo de texto
if (!empty($_POST["sugerencias"])) {
    echo '<p>Sugerencias: ' . $_POST["sugerencias"] . '</p>';
} else {
    echo '<p>Sugerencias: Ninguna</p>';
}

// Condiciones: checkbox, solo existe si se marca
if (isset($_POST["condiciones"])) {
    echo '<p>Condiciones: ' . $_POST["condiciones"] . '</p>';
} else {
    echo '<p>Condiciones: No aceptadas</p>';
}
?>
