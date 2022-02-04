<?php

/**
 * backtrace_r
 * s filenames vypisuje aj mena suborov kde sa nachadzaju dane funkcie
 *
 * @param  boolean $filenames [description]
 * @return void               [description]
 */
function backtrace_r ($filenames = false)
{
	$bt = debug_backtrace();
	if ($filenames)
	{
	  $str = $bt[count($bt)-1]['function'] . "() - " . $bt[count($bt)-1]['file'] . "\n";
	  for ($i = count($bt)-2; $i > 0; $i--) $str .= " => " . $bt[$i]['function'] . "() - " . $bt[$i]['file'] . "\n";
	}
	else
	{
	  $str = $bt[count($bt)-1]['function'] . "()\n";
	  for ($i = count($bt)-2; $i > 0; $i--) $str .= " => " . $bt[$i]['function'] . "()\n";
	}
	echo "<pre>$str</pre>\n";
}



/**
 * unobtrusive debugger
 * ---------------------------------------------------------
 * pri kazdom generovani hocijakej stranky sa vycisti http://page2.katalogfiriem.sk/dbg.txt
 * ..a potom sa do neho da logovat stuff pomocou tychto funkcii
 */


/**
 * dbg_init
 * prepise debugovaci subor.. tento subor sa prepisuje LEN ked sa nieco debuguje
 *
 * @return void
 */
function dbg_init ()
{
  global $debugging_started;
  $debugging_started  = 1;
  file_put_contents ("dbg.txt", "debugging \"". $_GET[q] . "\"------------------------\n\n");
}


/**
 * dbg_backtrace
 * normalny backtrace (aka callstack)
 *
 * @return void
 */
function dbg_backtrace ()
{
  global $debugging_started;
  if (!$debugging_started) dbg_init();

  $bt = debug_backtrace();
  $str = "";
  for ($i = count($bt)-1; $i > 0; $i--) $str .= $bt[$i]['function'] . "()  =>  ";
  $str .= $bt[0]['function'];

  file_put_contents ("dbg.txt", "backtrace:\n$str\n------------------------\n\n" . print_r($bt, true) . "\n\n--end of backtrace\n\n\n", FILE_APPEND);
}


/**
 * dbg_backtrace_s
 * zjednoduseny backtrace (bez argumentov, ktorymi sa volaju funkcie (see, drupal ma tie argumenty kurva velke =))
 *
 * @return void
 */
function dbg_backtrace_s ()
{
  global $debugging_started;
  if (!$debugging_started) dbg_init();

	$bt = debug_backtrace();
  $str = "";
  for ($i = count($bt)-1; $i > 0; $i--) $str .= $bt[$i]['function'] . "()  =>  ";
  $str .= $bt[0]['function'];

	foreach ($bt as &$func)
	{
	  $func[args] = "...";
	}
  file_put_contents ("dbg.txt", "(simple) backtrace:\n$str\n------------------------\n\n" . print_r($bt, true) . "\n\n--end of backtrace\n\n\n", FILE_APPEND);
}


/**
 * [dbg_print_r description]
 * print_r do logu
 *
 * @param  mixed   $variable
 * @param  integer $name
 * @return void
 */
function dbg_print_r ($variable, $name = 0)
{
  global $debugging_started;
  if (!$debugging_started) dbg_init();

  $name = $name ? " for \"$name\"" : "";
  file_put_contents ("dbg.txt", "variable dump$name:\n------------------------\n\n" . print_r($variable, true) . "\n\n--end of variable dump$name\n\n\n", FILE_APPEND);
}