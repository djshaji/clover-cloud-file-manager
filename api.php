<?php
/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/

// header('X-Content-Type-Options: nosniff');
// chdir ("/var/www/" . explode (".",$_SERVER ["HTTP_HOST"])[0]);
chdir ("/var/www/clover-cloud-file-manager");
include "config.php";
$_GET ["quiet"] = true ;
include "anneli/header.php" ;
var_dump ($uid);
function disable_ob() {
    // Turn off output buffering
    ini_set('output_buffering', 'off');
    // Turn off PHP output compression
    ini_set('zlib.output_compression', false);
    // Implicitly flush the buffer(s)
    ini_set('implicit_flush', true);
    ob_implicit_flush(true);
    // Clear, and turn off output buffering
    while (ob_get_level() > 0) {
        // Get the curent level
        $level = ob_get_level();
        // End the buffering
        ob_end_clean();
        // If the current level has not changed, abort
        if (ob_get_level() == $level) break;
    }
    // Disable apache output buffering/compression
    if (function_exists('apache_setenv')) {
        apache_setenv('no-gzip', '1');
        apache_setenv('dont-vary', '1');
    }
}

if ($uid == null) {
    print ("no user logged in");
    die ("unauthorized");
}

switch ($_GET["mode"]) {
    case "list":
        $cmd = sprintf (
            "node %s/storage.js %s %s list %s",
            __DIR__, $_GET ["token"], $_GET ['backend'], $_GET ['dir']
        );

        $output = "" ;
        $res = null ;

        // var_dump ($cmd) ;
        exec ($cmd, $output, $res) ;
        foreach ($output as $o) {
            echo $o ;
        }
        break ;
    case "upload":
        $cmd = sprintf (
            "export HOME=/var/clover;export CLOUDSDK_PYTHON=/usr/bin/python;/usr/bin/node %s/storage.js %s %s upload \"%s\" %s 2>&1",
            __DIR__, $token, $_GET ['backend'], $_GET ['url'], $_GET ["file"]
        );

        $output = "" ;
        $res = null ;

        disable_ob ();
        system ($cmd) ;
        // passthru ("which python");
        // passthru ("/usr/bin/node /mnt/data/djshaji/Projects/clover-cloud-file-manager/storage.js g gcloud 2>&1");
        break ;
    default:
        dir ("unsupported operation") ;

}
?>

