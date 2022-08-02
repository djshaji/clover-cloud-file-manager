<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
// putenv ('export GOOGLE_APPLICATION_CREDENTIALS="/var/www/clover-keys/clover-356904-106c0cd7c587.json"');
require ("vendor/autoload.php");
use Google\Cloud\Storage\StorageClient;
// chdir ("/var/www/" . explode (".",$_SERVER ["HTTP_HOST"])[0]);
chdir (__DIR__);
include "config.php";
include "anneli/header.php";
?>

<video src="https://upload.wikimedia.org/wikipedia/commons/a/a4/Xacti-AC8EX-Sample_video-001.ogv" type="video/ogg">
</video>
<picture>
  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/68/Parsons_Table.jpg/800px-Parsons_Table.jpg">
</picture>