<?php

namespace Tshirtshop;

/**
 * Product catalog
 */
class Catalog
{
    /**
     * Retrieves all departments. By calling a stored procedure.
     *
     * @return 'asscociative array with the departments or null'.
     */
    public static function getDepartments()
    {
        $sql = "CALL catalog_get_departments_list()";
        return DatabaseHandler::getAll($sql);
    }
}
