<?php
// Definir la nómina en una variable
$nomina = 1500; // Puedes cambiar el valor aquí, por ejemplo: $nomina = 1000;

// Lógica para ajustar la nómina según las condiciones
if ($nomina < 800) {
    // Incrementar la nómina en un 20%
    $nomina *= 1.20; // O también: $nomina = $nomina + ($nomina * 0.20);
    echo "La nueva nómina con el incremento del 20% es: €" . number_format($nomina, 2);
} elseif ($nomina >= 800 && $nomina <= 1200) {
    // La nómina se queda como está
    echo "La nómina se mantiene en: €" . number_format($nomina, 2);
} else {
    // Reducir la nómina en un 15%
    $nomina *= 0.85; // O también: $nomina = $nomina - ($nomina * 0.15);
    echo "La nueva nómina con la reducción del 15% es: €" . number_format($nomina, 2);
}
?>
