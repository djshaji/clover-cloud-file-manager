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

if ($uid != "3a6Og0ypRza5zEDd3vkApd7fo7l1") {
  ?>
  <div class="alert bg-danger text-white h4">
    <span class="material-symbols-outlined">
      error
    </span>
    Account not authorized
  </div>
  <?php 
  include "anneli/footer.php";
  die () ;
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
    <?php if ($_GET ["icons"]) {
      $page = $_GET ["page"];
      if ($page == null)
        $page = "1";
      $options = array (
        "resultLimit"=> 100,
        "nextPageToken"=> base64_encode ("Videos/Vixen/A Club VXN Vacation 2: VIXEN.mp4")
      ); 
      
      foreach ($bucket->objects($options) as $f) {
        $name = $f -> name () ;
        if (strpos($name, "/.") !== false)
          continue;
        echo '<div class="col-md-6 row justify-content-center text-center text-wrap">';
        $b = basename ($name);
        $d = dirname ($name);
        $thumb = "https://storage.cloud.google.com/qsx/$d/.$b.jpg";
        echo "<a class='col-12 row' href='javascript: window.open (\"https://storage.cloud.google.com/qsx/$name\", \"_blank\");'> <img class='col-12 mdl-shadow--4dp' src='$thumb'><label class='btn mdl-shadow--4dp'>$b</label></a>";
        echo "</div>";
      }
    } ?>
  </div>
  <?php if ($_GET ["list"]) {
      echo '<div class="list-group">';
      foreach ($bucket->objects() as $f) {
        $name = $f -> name () ;
        if (strpos($name, "/.") === false)
          echo "<a href='javascript: window.open (\"https://storage.cloud.google.com/qsx/$name\", \"_blank\");' class=\"list-group-item list-group-item-action\">$name</a>";
      }
      echo "</div>";
    }
    ?>
</div>

<!-- Full screen modal -->
<div id="modal" class="modal" tabindex="-1">
  <div class="modal-dialog">
  <!-- poster="MY_VIDEO_POSTER.jpg" -->
    <video autoplay=true controls=true width="500" height="300"></video>
  </div>
</div>
<script src="main.js?<?php time () ;?>">
</script>

<div class="alert m-0 text-center text-monospace bg-primary text-white"><?php passthru ("fortune -s");?></div>
<?php 
include "anneli/footer.php";
?>

<script>
  iconSize = 256
  currentFiles = []
  // load_folder (null)
</script>
<?php if ($_GET ["list"] != 1 && $_GET ["icons"] != 1) {
  echo "<script>load_folder (null) ;</script>" ;
}?>