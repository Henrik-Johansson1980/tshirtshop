<?php

namespace Tshirtshop\business;

class ErrorHandler
{
    //Private constructor to prevent direct creation of object.
    private function __construct()
    {
    }

    public static function setHandler($err_types = ERROR_TYPES)
    {
        return set_error_handler(array('Tshirtshop\business\ErrorHandler', 'handler'), $err_types);
    }

    // Error Handler Method
    public static function handler($err_num, $err_str, $err_file, $err_line)
    {
        $date = date('F j, Y, g:i');
        // Maybe ignore first two indexes of the backtrace array.
        $backtrace = ErrorHandler::GetBacktrace(2);

        // Error message to display, logged or mailed
        $error_message = <<<MSG
                    \nERRNO: {$err_num}
                    \nTEXT: {$err_str}
                    \nLOCATION: {$err_file} line: {$err_line}, at: {$date}
                    \nShowing backtrace:\n{$backtrace}\n\n
                    MSG;

        // Email error details if SEND_ERROR_MAIL is true
        if (SEND_ERROR_MAIL == true) {
            error_log(
                $error_message,
                1,
                ADMIN_ERROR_MAIL,
                "From: " . SENDMAIL_FROM . "\r\nTo: " . ADMIN_ERROR_MAIL
            );
        }

        // Log errors if LOG_ERRORS is true
        if (LOG_ERRORS == true) {
            error_log($error_message, 3, LOG_ERRORS_FILE);
        }

        // Warnings don't abort execution if IS_WARNING_FATAL is false E_NOTICE
        // and E_USER_NOTIC Eerrors don't abort execution

        // IF there is a non fatal error
        if (
            ($err_num == E_WARNING && IS_WARNING_FATAL == false) ||
            ($err_num == E_NOTICE || $err_num == E_USER_NOTICE)
        ) {
            // Show message only if DEBUGis true
            if (DEBUGGING == true) {
                echo "<div class='error_box'><pre>{$error_message}</pre></div>";
            }
        } else {
            // Fatal error
            if (DEBUGGING == true) {
                echo "<div class='error_box'><pre>{$error_message}</pre></div>";
            } else {
                echo SITE_GENERIC_ERROR_MESSAGE;
                // Stop script execution
                exit();
            }
        }
    }

    // Build backtrace message
    public static function getBacktrace($irrelevant_first_entries = 0)
    {
        $s = '';
        $MAXSTRLEN = 64;
        $trace_array = debug_backtrace();

        for ($i = 0; $i < $irrelevant_first_entries; $i++) {
            array_shift($trace_array);
        }

        $tabs = sizeof($trace_array) - 1;
        foreach ($trace_array as $arr) {
            $tabs -= 1;
            if (isset($arr['class'])) {
                $s .= $arr['class'] . '.';
            }

            $args = array();
            if (!empty($arr['args'])) {
                foreach ($arr['args'] as $v) {
                    if (is_null($v)) {
                        $args[] = 'null';
                    } elseif (is_array($v)) {
                        $args[] = 'Array[' . sizeof($v) . ']';
                    } elseif (is_object($v)) {
                        $args[] = 'Object: ' . get_class($v);
                    } elseif (is_bool($v)) {
                        $args[] = $v ? 'true' : 'false';
                    } else {
                        $v = (string) @$v;
                        $str = htmlspecialchars(substr($v, 0, $MAXSTRLEN));
                        if (strlen($v) > $MAXSTRLEN) {
                            $str .= '...';
                        }
                        $args[] = '"' . $str . '"';
                    }
                }
            }

            $s .= $arr['function'] . '(' . implode(', ', $args) . ')';
            $line = (isset($arr['line']) ? $arr['line'] : 'unknown');
            $file = (isset($arr['file']) ? $arr['file'] : 'unknown');
            $s .= sprintf(' # line %4d, file: %s', $line, $file);
            $s .= "\n";
        }
        return $s;
    }
}
