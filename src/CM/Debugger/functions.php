<?php
/**
 * Convenience functions that shortcut to CM_Debugger methods
 */

if (!function_exists('vd')) {
    function vd($var = false, $bt = null) {
        CM_Debugger::vd($var = false, $bt = null);
    }
}


if (!function_exists('dl')) {
    function dl($bt = null) {
        CM_Debugger::dl($bt = null);
    }
}


if (!function_exists('dl')) {
    function vdl($var, $bt = null) {
        CM_Debugger::vdl($var, $bt = null);
    }
}


if (!function_exists('el')) {
    function vd2el($var) {
        CM_Debugger::vd2el($var);
    }
}


if (!function_exists('el')) {
    function dl2el() {
        CM_Debugger::dl2el();
    }
}


if (!function_exists('el')) {
    function vdl2el($var) {
        CM_Debugger::vdl2el($var);
    }
}