<?php
  // Recibir datos del formulario
  $cantidades = $_POST['cantidad'];
  $precios = $_POST['precio'];

  // Inicializar variables
  $total = 0;
  $descuento = 0;

  // Calcular total y descuento
  for ($i = 0; $i < 10; $i++) {
    $total += $cantidades[$i] * $precios[$i];
    $descuento += ($cantidades[$i] * $precios[$i]) * 0.10;
  }

  // Mostrar resultados
  echo "Total: $" . number_format($total, 2) . "<br>";
  echo "Descuento (10%): $" . number_format($descuento, 2) . "<br>";
  echo "Total con descuento: $" . number_format($total - $descuento, 2);
?>
