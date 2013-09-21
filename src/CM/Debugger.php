<?php

if (!class_exists('CM_Debugger')) {

    class CM_Debugger {
        
        /**
         * Loads the debugging functions file
         *
         * @return void
         */
        static public function load()
        {
            require(dirname(__FILE__) . '/Debugger/functions.php');
        }


        /*********************
         * Debugging methods *
         *********************/

        /**
         * Pre-formatted var_dump
         *
         * @param mixed $var Variable to dump
         *
         * @return void
         */
        static public function vd($var = false, $bt = null) {
            if (empty($bt)) {
                $bt = debug_backtrace();
            }
            echo "<pre>";
            echo "Dump requested in " . basename($bt[0]['file']) . 
                 " at line {$bt[0]['line']}\n\n";
            var_dump($var);
            echo "</pre>";
        }


        /**
         * Terminate script & output the file/line it happened
         *
         * @param array $bt (optional) Backtrace
         *
         * @return void
         */
        static public function dl($bt = null) {
            if (empty($bt)) {
                $bt = debug_backtrace();
            }
            wp_die(
                "Script terminated at " . basename($bt[0]['file']) .
                " - Line {$bt[0]['line']}"
            );
        }


        /**
         * Performs self::vd() followed by self::dl()
         *
         * @param mixed $var Variable to dump
         * @param array $bt  (optional) Backtrace
         *
         * @return void
         */
        static public function vdl($var, $bt = null) {
            if (empty($bt)) {
                $bt = debug_backtrace();
            }
            vd($var, $bt);
            dl($bt);
        }


        /**
         * Performs self::vd() but outputs to error_log rather than screen
         *
         * @param mixed $var Variable to dump
         *
         * @return void
         */
        static public function vd2el($var, $bt = null) {
            if (empty($bt)) {
                $bt = debug_backtrace();
            }
            ob_start();
            vd($var, $bt);
            error_log(ob_get_clean());
        }


        /**
         * Performs self::dl() but outputs to error_log rather than screen
         *
         * @param array $bt (optional) Backtrace
         *
         * @return void
         */
        static public function dl2el($bt = null) {
            if (empty($bt)) {
                $bt = debug_backtrace();
            }
            ob_start();
            dl($bt);
            error_log(ob_get_clean());
        }


        /**
         * Performs self::vdl() but outputs to error_log rather than screen
         *
         * @param mixed $var Variable to dump
         * @param array $bt  (optional) Backtrace
         *
         * @return void
         */
        static public function vdl2el($var, $bt = null) {
            if (empty($bt)) {
                $bt = debug_backtrace();
            }
            ob_start();
            vdl($var, $bt);
            error_log(ob_get_clean());
        }

        /**
         * Displays a backtrace list
         *
         * @param array $bt (optional) Backtrace.  If not provided will be generated
         *
         * @return void
         */
        static function bt(array $bt = null) {
            if (is_null($bt)) {
                $bt = debug_backtrace();
            }

            $trace_to_report = debug_backtrace();
            $trace_to_report = array_slice($trace_to_report, 2);

            $trace_arr = array();
            foreach ($trace_to_report as $trace) {
                $trace_arr[] = sprintf(
                    '%s%s() - %s line %d',
                    !empty($trace['class']) ? $trace['class'] . '::' : '',
                    $trace['function'],
                    basename( $trace['file'] ),
                    $trace['line']
                );
            }

            vd($trace_arr, $bt);
        }
    }
}