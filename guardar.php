<?php
// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$celular = $_POST['celular'];
$grado = $_POST['grado'];

// Archivo Excel (CSV) donde se guardarán los datos
$archivo = fopen("empleados.csv", "a");

// Guardar los datos como una nueva fila
fputcsv($archivo, array($nombre, $apellido, $celular, $grado));

// Cerrar el archivo
fclose($archivo);

echo "<h2>✅ Registro exitoso</h2>";
echo "<a href='formulario.html'>Volver al formulario</a>";
?>
