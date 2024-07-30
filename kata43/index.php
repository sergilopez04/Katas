<?php

require_once 'PlansVacacionals.php';
require_once 'EntregaItAcademy.php';
require_once 'Sprint.php';
require_once 'Organitzador.php';
require_once 'PlansVacacionalsType.php';

try {
    $planVacacional = new PlansVacacionals("Barcelona", "2024-08-10", "Visita Parc Güell", PlansVacacionalsType::CULTURAL);
    $entrega = new EntregaItAcademy("Entrega 1", Sprint::HTML_PHP, "2024-08-10", "https://github.com/exemple", "Comentari de prova");

    $organitzador = new Organitzador();
    $organitzador->afegirPlan($planVacacional);
    $organitzador->afegirPlan($entrega); // Això llençarà una excepció perquè la data és la mateixa que l'anterior pla

    $organitzador->mostrarPlans();

    $planVacacional->realitzar();
    $entrega->entregar();

} catch (Exception $e) {
    echo 'Excepció capturada: ',  $e->getMessage(), "\n";
}

?>