<?php

// namespace Tshirtshop;
// Manages the departments list
use Tshirtshop\business\Catalog;

class DepartmentsList

{
    /* Public variables available in departments_list.tpl Smarty template */
    public $mSelectedDepartment = 0;
    public $mDepartments;
    // Constructor reads query string parameter
    public function __construct()
    {
    /* If departmentid exists in the query string, we're visiting a department */
        if (isset($_GET['departmentid'])) {
            $this->mSelectedDepartment = (int) $_GET['departmentid'];
        }
    }
    /* Calls business tier method to read departments list and create their links */
    public function init()
    {
        // Get the list of departments from the business tier
        $this->mDepartments = Catalog::GetDepartments();
        // Create the department links
        for ($i = 0; $i < count($this->mDepartments); $i++) {
            $this->mDepartments[$i]['link_to_department'] = Link::to_department($this->mDepartments[$i]['department_id']);
        }
    }
}
