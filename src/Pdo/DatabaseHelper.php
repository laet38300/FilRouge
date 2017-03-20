<?php

namespace ProjetTLI\Pdo;

use PDO;

/**
 * Class Pdo
 */
class DatabaseHelper
{
    const CONN = 'mysql:host=localhost;dbname=FilRouge;charset=UTF8';

    const USER = 'root';

    const PASSWORD = 'tp';

    /** @var \PDO */
    protected $db;

    /**
     * Pdo constructor.
     */
    public function __construct()
    {
        $this->db = new \PDO(DatabaseHelper::CONN, DatabaseHelper::USER, DatabaseHelper::PASSWORD);
    }

    /**
     * Execute a query
     *
     * @param $query
     *
     * @return array
     */
    public function executeQuery($query)
    {
        $statement =  $this->db->query($query, PDO::FETCH_ASSOC);

        return $statement->fetchAll();
    }
}
