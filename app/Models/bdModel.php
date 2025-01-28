<?php
namespace Model;

use PDO;
use PDOException;
use Dotenv\Dotenv;

class BdModel
{
    private static ?PDO $connexion = null;
    private static function initEnv(): void
    {
        $dotenv = Dotenv::createImmutable(__DIR__ . '/../../'); 
        $dotenv->load();
    }

    public static function getConnexion(): PDO
    {
        if (self::$connexion === null) {
            self::initEnv(); // Charger les variables d'environnement si ce n'est pas encore fait

            try {
                self::$connexion = new PDO(
                    'pgsql:host=' . $_ENV['DB_HOST'] . 
                    ';port=' . $_ENV['DB_PORT'] . 
                    ';dbname=' . $_ENV['DB_NAME'],
                    $_ENV['DB_USER'],
                    $_ENV['DB_PASSWORD'],
                    [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                        PDO::ATTR_PERSISTENT => false,
                    ]
                );
            } catch (PDOException $e) {
                die('Erreur de connexion à la base de données PostgreSQL : ' . $e->getMessage());
            }
        }
        return self::$connexion;
    }
}
