<?php
/**
 * Convenience functions that shortcut to CM_Debugger methods
 */

if (!function_exists('vd')) {
    function vd($var = false, $bt = null) {
        if (is_null($bt)) {
            $bt = debug_backtrace();
            // array_shift($bt);
        }
        CM_Debugger::vd($var, $bt);
    }
}


if (!function_exists('dl')) {
    function dl($bt = null) {
        if (is_null($bt)) {
            $bt = debug_backtrace();
            // array_shift($bt);
        }
        CM_Debugger::dl($bt);
    }
}


if (!function_exists('vdl')) {
    function vdl($var, $bt = null) {
        if (is_null($bt)) {
            $bt = debug_backtrace();
            // array_shift($bt);
        }
        CM_Debugger::vdl($var, $bt);
    }
}


if (!function_exists('vd2el')) {
    function vd2el($var, $bt = null) {
        if (is_null($bt)) {
            $bt = debug_backtrace();
            // array_shift($bt);
        }
        CM_Debugger::vd2el($var, $bt);
    }
}


if (!function_exists('dl2el')) {
    function dl2el($bt = null) {
        if (is_null($bt)) {
            $bt = debug_backtrace();
            // array_shift($bt);
        }
        CM_Debugger::dl2el($bt);
    }
}


if (!function_exists('vdl2el')) {
    function vdl2el($var) {
        CM_Debugger::vdl2el($var);
    }
}