<?php

namespace Tshirtshop;

use PDO;

/**
 * Class providing generic database access functionality.
 */
class DatabaseHandler
{
    // Hold an instance of the PDO class
    private static $handler;

    /**
     * // Private constructor to prevent direct creation of object
     */
    private function __construct()
    {
    }

    /**
     * Return an initialized database handler.
     *
     * @return A Databasehandler.
     */
    private static function getHandler()
    {
        // Only create a connection if there isn't one.
        if (!isset(self::$handler)) {
            try {
                // Create instance
                self::$handler = new PDO(
                    PDO_DSN,
                    DB_USERNAME,
                    DB_PASSWORD,
                    array(PDO::ATTR_PERSISTENT => DB_PERSISTENCY)
                );

                // Configure PDO to throw exceptions.
                self::$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                // Close database handler and trigger error
                self::Close();
                trigger_error($e->getMessage(), E_USER_ERROR);
            }

            // Return handler.
            return self::$handler;
        }
    }

    /**
     * Close the database connection
     *
     * @return void
     */
    public static function close()
    {
        self::$handler = null;
    }


    /**
     * Wrapper for PDOStatement::execute.
     *
     * @param [string] $sql_query
     * @param [type] $params
     * @return void
     */
    public static function execute($sql_query, $params = null)
    {
        // Try to execute a SQL query or stored procedure
        try {
            // Get database handler.
            $database_handler = self::getHandler();

            // Prepare query
            $statement_handler = $database_handler->prepare($sql_query);

            // Execute query
            $statement_handler->execute($params);
        } catch (PDOException $e) {
            self::close();
            trigger_error($e->getMessage(), E_USER_ERROR);
        }
    }

    /**
     * Wrapper method for PDOStatement::fetchAll().
     * Method is used to retrieve a complete result set from a SQL query.
     *
     * @param [type] $sql_query
     * @param [type] $params
     * @param [type] $fetch_style PDO fetch style
     * @return void
     */
    public static function getAll($sql_query, $params = null, $fetch_style = PDO::FETCH_ASSOC)
    {
        // Initialize return value to null
        $result = null;

        try {
            // Get handler.
            $database_handler = self::getHandler();

            // Prepare query for execution.
            $statement_handler = $database_handler->prepare($sql_query);

            // Execute query.
            $statement_handler->execute($params);

            // Fetch result.
            $result = $statement_handler->fetchAll($fetch_style);
        } catch (PDOException $e) {
            // Close connection.
            self::close();
            trigger_error($e->getMessage(), E_USER_ERROR);
        }
        
        return $result;
    }

    /**
     * Wrapper method for PDOStatement::fetch().
     * Method is used to retrieve a row of data from a SQL query.
     *
     * @param [type] $sql_query
     * @param [type] $params
     * @param [type] $fetch_style
     * @return void
     */
    public static function getRow($sql_query, $params = null, $fetch_style = PDO::FETCH_ASSOC)
    {
        // Initialize return value to null
        $result = null;

        try {
            // Get handler.
            $database_handler = self::getHandler();

            // Prepare query for execution.
            $statement_handler = $database_handler->prepare($sql_query);

            // Execute query.
            $statement_handler->execute($params);

            // Fetch result.
            $result = $statement_handler->fetch($fetch_style);
        } catch (PDOException $e) {
            // Close connection.
            self::close();
            trigger_error($e->getMessage(), E_USER_ERROR);
        }
        
        return $result;
    }

    /**
     * Wrapper method for PDOStatement::fetch().
     * Method is used to retrieve a single value resulted from a SQL query.
     *
     * @param [type] $sql_query
     * @param [type] $params
     * @return void
     */
    public static function getOne($sql_query, $params = null)
    {
        // Initialize return value to null
        $result = null;

        try {
            // Get handler.
            $database_handler = self::getHandler();

            // Prepare query for execution.
            $statement_handler = $database_handler->prepare($sql_query);

            // Execute query.
            $statement_handler->execute($params);

            // Fetch result.
            $result = $statement_handler->fetch(PDO::FETCH_NUM);

            // Save the first value of the result set (first column of the first row)
            $result = $result[0];
        } catch (PDOException $e) {
            // Close connection.
            self::close();
            trigger_error($e->getMessage(), E_USER_ERROR);
        }
        
        return $result;
    }
}
