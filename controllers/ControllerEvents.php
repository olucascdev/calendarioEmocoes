<?php
include("../config/config.php");  // Inclui a configuração do projeto

// Instancia o objeto da classe de eventos
$objEvents = new \Classes\ClassEvents();

// Obtém os eventos
$events = $objEvents->getEvents();

// Verifica se a classe retornou eventos e faz a resposta em formato JSON
if ($events) {
    echo json_encode($events);  // Converte os eventos para o formato JSON
} else {
    echo json_encode([]);  // Caso não haja eventos, retorna um array vazio
}
?>
