<?php
// Capturar datos del formulario
$producto1 = $_POST['producto1'];
$precio1 = (float)$_POST['precio1'];

$producto2 = $_POST['producto2'];
$precio2 = (float)$_POST['precio2'];

$producto3 = $_POST['producto3'];
$precio3 = (float)$_POST['precio3'];

// Calcular suma y descuento
$suma = $precio1 + $precio2 + $precio3;
$descuento = $suma * 0.16;
$total = $suma - $descuento;

// Mostrar resultados
echo "<h1>Resumen de Compra</h1>";
echo "<p>Producto 1: $producto1 - Precio: $$precio1</p>";
echo "<p>Producto 2: $producto2 - Precio: $$precio2</p>";
echo "<p>Producto 3: $producto3 - Precio: $$precio3</p>";
echo "<p><strong>Suma total:</strong> $$suma</p>";
echo "<p><strong>Descuento (16%):</strong> $$descuento</p>";
echo "<p><strong>Total a pagar:</strong> $$total</p>";
?>