<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
require ("vendor/autoload.php");

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
?>
<div class="section">
  <div class="alert alert-secondary p-2" id="breadcrumbs">
  </div>
  <div class="row p-3" id="files">
    <?php 
      $pattern = __DIR__ . "/files/" . $_GET ["q"] . "/*.*";
      print ($pattern);
      var_dump(glob ($pattern));
      foreach (glob ($pattern) as $f) {
        ?>
        <div class="col-md-6 row justify-content-center text-center text-wrap">
          <?php
          $b = basename ($f);
          $d = dirname ($f);
          $thumb = "";
          if (mime_content_type ($f) === false) {
          ?>
          <a class='col-12 row'>
            <i class="fas fa-folder" style="font-size:xx-large"></i>
            <label class='btn mdl-shadow--4dp'><?php echo $b ; ?></label>
          </a>
          <?php } else { ?>
            <a class='col-12 row'>
              <i class="fas fa-folder" style="font-size:xx-large"></i>
              <label class='btn mdl-shadow--4dp'><?php mime_content_type ($f) ; ?></label>
            </a>
            <?php
          }
          ?>
        </div>
        <?php
        // echo "<a class='col-12 row' href='javascript: window.open (\"https://storage.cloud.google.com/qsx/$name\", \"_blank\");'> <img class='col-12 mdl-shadow--4dp' src='$thumb'><label class='btn mdl-shadow--4dp'>$b</label></a>";
      }
 ?>
  </div>
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
  // echo "<script>load_folder (null) ;</script>" ;
}?>