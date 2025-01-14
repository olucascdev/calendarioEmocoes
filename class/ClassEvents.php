<?php
namespace Classes;

use Models\ModelConect;

class ClassEvents extends ModelConect
{
    // Método para trazer os dados dos eventos do banco
    public function getEvents()
    {
        try {
            // Preparação da consulta SQL
            $b = $this->conectDB()->prepare("SELECT id, title, start, end FROM events");
            $b->execute();
            
            // Recupera os eventos
            $f = $b->fetchAll(\PDO::FETCH_ASSOC);
            
            // Retorna os eventos como JSON
            return json_encode($f);

        } catch (\PDOException $e) {
            // Se ocorrer um erro, retorna um array de erro em JSON
            return json_encode(['error' => $e->getMessage()]);
        }
    }
}
?>
