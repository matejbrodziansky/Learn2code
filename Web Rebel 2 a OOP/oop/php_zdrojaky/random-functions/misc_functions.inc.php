<?php

/**
 * disable_magic_quotes
 * @return [type] [description]
 */
function disable_magic_quotes()
{
    if (get_magic_quotes_gpc())
    {
        $process = array(&$_GET, &$_POST/*, &$_COOKIE, &$_REQUEST*/);
        while (list($key, $val) = each($process))
        {
            foreach ($val as $k => $v)
            {
                unset($process[$key][$k]);
                if (is_array($v))
                {
                    $process[$key][stripslashes($k)] = $v;
                    $process[] = &$process[$key][stripslashes($k)];
                }
                else
                {
                    $process[$key][stripslashes($k)] = stripslashes($v);
                }
            }
        }
        unset($process);
    }
}



/**
 * mk_file
 * @param  [type] $filename [description]
 * @return [type]           [description]
 */
function mk_file( $filename )
{
    if ( ! is_file($filename) )
    {
        // create the file and close it
        fclose( fopen($filename, 'x') );
        return true;
    }

    // file already exists
    return false;
}



/**
 * rmrf
 * rekurzivne zmaze subory
 *
 * @param  [type] $path [description]
 * @return [type]       [description]
 */
function rmrf($path)
{
    $it = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($path, RecursiveDirectoryIterator::SKIP_DOTS),
        RecursiveIteratorIterator::CHILD_FIRST
    );
    foreach ($it as $file) {
        if ($file->isDir()) {
            rmdir($file->getPathname());
        } elseif ($file->isFile() || $file->isLink()) {
            unlink($file->getPathname());
        }
    }
    rmdir($path);
}



/**
 * charset_decode_utf_8
 *
 * @param  [type] $string [description]
 * @return [type]         [description]
 */
function charset_decode_utf_8($string)
{
    /* Only do the slow convert if there are 8-bit characters */
    /* avoid using 0xA0 (\240) in ereg ranges. RH73 does not like that */
    if (! ereg("[\200-\237]", $string) and ! ereg("[\241-\377]", $string))
        return $string;

    // decode three byte unicode characters
    $string = preg_replace("/([\340-\357])([\200-\277])([\200-\277])/e",
    "'&#'.((ord('\\1')-224)*4096 + (ord('\\2')-128)*64 + (ord('\\3')-128)).';'",
    $string);

    // decode two byte unicode characters
    $string = preg_replace("/([\300-\337])([\200-\277])/e",
    "'&#'.((ord('\\1')-192)*64+(ord('\\2')-128)).';'",
    $string);

    return $string;
}