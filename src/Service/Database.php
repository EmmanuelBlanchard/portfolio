<?php

declare(strict_types=1);

namespace App\Service;

// Class pour gérer la connection à la base de données
class Database
{
    private $database;

    public function __construct()
    {
        $this->database = new \PDO('mysql:host=localhost;dbname=;port=;charset=utf8mb4', 'root', '', [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        ]);
    }

    /**
     *  Retourne une connexion à la base de données
     *
     * @return PDO
     */
    public function getPdo(): \PDO
    {
        return $this->database;
    }
}
