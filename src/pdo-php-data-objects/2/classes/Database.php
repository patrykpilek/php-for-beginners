<?php

/**
 * Database
 *
 * A connection to the database
 */
class Database
{
    /**
     * Get the database connection
     *
     * @return PDO object Connection to the database server
     */
    public function getConn()
    {
        $db_host = "mysql";
        $db_name = "tutorial";
        $db_user = "root";
        $db_pass = "secret";

        $dsn = 'mysql:host=' . $db_host . ';dbname=' . $db_name . ';charset=utf8';

        return new PDO($dsn, $db_user, $db_pass);
    }
}
