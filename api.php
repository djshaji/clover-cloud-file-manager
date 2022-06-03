<?php
chdir ("/var/www/" . explode (".",$_SERVER ["HTTP_HOST"])[0]);
include "config.php";
$_GET ["quiet"] = true ;
include "anneli/header.php" ;

if ($uid == null) {
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
    default:
        dir ("unsupported operation") ;

}
?>

