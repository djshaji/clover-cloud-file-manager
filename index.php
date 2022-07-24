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
// var_dump ($uid);
if ($uid == null) {
  // require ("anneli/footer.php");
  require_login ();
}

$storage = new StorageClient(
  [    'keyFilePath' => '/var/www/clover-keys/clover-356904-106c0cd7c587.json',
  ]
);

$bucket = $storage->bucket("qsx");
echo "<script> var files = [];";
foreach ($bucket->objects() as $f) {
  printf ("files.push ('%s');", $f->name ());
}

echo "</script>";
?>
<div class="section">
  <div class="alert alert-secondary p-2" id="breadcrumbs">
  </div>
  <div class="row p-3" id="files">
  </div>
</div>

<!-- Full screen modal -->
<div id="modal" class="modal" tabindex="-1">
  <div class="modal-dialog">
  <!-- poster="MY_VIDEO_POSTER.jpg" -->
    <video autoplay=true controls=true width="500" height="300"></video>
  </div>
</div>
<script src="main.js">
</script>

<div class="alert m-0 text-center text-monospace bg-primary text-white"><?php passthru ("fortune -s");?></div>
<?php 
include "anneli/footer.php";
?>

<script>
  iconSize = 64
  currentFiles = []
  load_folder (null)
</script>
