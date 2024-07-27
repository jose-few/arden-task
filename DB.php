<?php

namespace Arden;

use SQLite3;

/**
 * Custom class for running CRUD operations on SQLite DB included in solution.
 */
class DB
{
    public string $table;

    /**
     * @var string
     * The database we're using.
     */
    public string $database = 'ardenshop.db';

    public function __construct(string $table)
    {
        /**
         * Specify what table to use on instantiation.
         */
        $this->table = $table;
    }

    /**
     * @return array
     *
     * Function for accessing a specified table, and returning a SELECT *
     * Returns an array of results.
     */
    public function fetch(): array
    {
        $data = array();
        /**
         * Uses SQLite for portability.
         */
        $db = new SQLite3($this->database);
        $res = $db->query("SELECT * FROM ".$this->table);
        /**
         * Builds associative array of results.
         */
        while ($row = $res->fetchArray(SQLITE3_ASSOC)) {
            $data[] = $row;
        }
        return $data;
    }

    /**
     * @param array $data
     * @return \SQLite3Result|bool
     *
     * Inserts contact form submissions into the database.
     */
    public function save(array $data): \SQLite3Result|bool
    {
        $db = new SQLite3($this->database);

        /**
         * Prepared statements to prevent SQL Injection
         */
        $stmt = $db->prepare("INSERT INTO `contact_submissions` (`name`, `email`, `message`) VALUES (:name, :email, :message)");
        $stmt->bindValue(':name', $data['name']);
        $stmt->bindValue(':email', $data['email']);
        $stmt->bindValue(':message', $data['message']);

        return $stmt->execute();
    }

}
