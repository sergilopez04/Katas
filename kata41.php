<?php
$dateString1 = '27/06/2024';
$dateString2 = '01/07/2024';

try {
    echo returnDifferenceFromTwoDates($dateString1, $dateString2);
} catch (InvalidArgumentException $e) {
    echo 'Error: ' . $e->getMessage();
}

function returnDifferenceFromTwoDates(string $dateString1, string $dateString2): int {
    // Expresión regular para validar formato dd/mm/yyyy
    $pattern = '/^\d{2}\/\d{2}\/\d{4}$/';

    // Validar formato de las fechas
    if (!preg_match($pattern, $dateString1) || !preg_match($pattern, $dateString2)) {
        throw new InvalidArgumentException('Formato de fecha inválido. Utilice el formato dd/mm/yyyy.');
    }

    // Crear objetos DateTime a partir del formato correcto
    $date1 = DateTime::createFromFormat("d/m/Y", $dateString1);
    $date2 = DateTime::createFromFormat('d/m/Y', $dateString2);

    // Verificar si se crearon correctamente los objetos DateTime
    if (!$date1 || !$date2) {
        throw new Exception('Error al crear los objetos DateTime.');
    }

    // Calcular la diferencia entre las fechas
    $interval = $date1->diff($date2);

    // Obtener el número de días como un entero y convertirlo a valor absoluto
    $differenceInteger = abs($interval->days);

    // Retornar la diferencia en días
    return $differenceInteger;
}
?>