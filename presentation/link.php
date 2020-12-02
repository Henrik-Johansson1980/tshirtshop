<?php

class Link 
{
    public static function build($link)
    {
        $base = 'http://' . getenv('SERVER_NAME');
        // If HTTP_SERVER_PORT is defined and differs from default 
        if(defined('HTTP_SERVER_PORT') && HTTP_SERVER_PORT != 80)
        {
            //Append port
            $base .= ":" . HTTP_SERVER_PORT;
        }

        $link = $base . VIRTUAL_LOCATION . $link;

        // Escape html
        return htmlspecialchars($link, ENT_QUOTES);
    }

    public static function to_department($department_id){
        $link = 'index.php?departmentid=' . $department_id;
        return self::build($link);
    }
}
