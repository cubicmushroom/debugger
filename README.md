CM Debugger
===========

Debugging helper library


Setup
-----

To make the debugging functions available, add the following to your application's
config/bootstrap file…

    CM_Debugger::load();


Debugging methods
-----------------

The following methods are made available by this library…

* `bt()` - Displays a backtrace of class methods/functions called
* `vd()` - Performs a formatted `var_dump()`
* `dl()` - Terminates the script, echoing the file & line that it was terminated at
* `vdl()` - Performs a `vd()` followed by a `dl()`
* `vd2el()` - As per `vd()`, but outputs to error_log
* `dl2el()` - As per `dl()`, but outputs to error_log
* `vdl2el()` - As per `vdl()`, but outputs to error_log