<?php
chdir ("/var/www/" . explode (".",$_SERVER ["HTTP_HOST"])[0]);
include "config.php";
include "anneli/header.php";
$cmd = sprintf (
    "node %s/storage.js %s %s list %s",
    __DIR__, $token, "gcloud", $_GET ['dir']
);

$output = "" ;
$res = null ;

// var_dump ($cmd) ;
exec ($cmd, $output, $res) ;
$json = json_decode (join ("", $output), true);
// var_dump ($json);
$parent = $_GET ["dir"] ;
?>
<div class="section">
  <div class="alert alert-secondary">
  <?php 
    $root = "";
    foreach (explode ("/", $_GET ["dir"]) as $d) {
      $root .= $d ;
    ?>
    <a href="?dir=<?php echo $root ;$root .="/";?>" class="mdl-button mdl-shadow--4dp ms-2">/ <?php echo $d ;?></a>
  <?php }
  ?>
  </div>
  <div class="row p-3">
    <?php
      foreach ($json as $name => $url) {
        if ($url == null) { // folder
          ?>
            <div class="col-md-1 justify-content-center text-center">
              <a href="<?php echo "?dir=$parent/$name" ;?>"> <img src="folder.png" width=64></img></a>
              <a href="<?php echo "?dir=$parent/$name" ;?>"> <label class="h6"><?php echo $name ;?></label></a>
            </div>
          <?php
        } else {
          ?>
            <div class="col-md-1 justify-content-center text-center">
              <a href="<?php echo "$url" ;?>"> <img src="video.png" width=64></img></a>
              <a href="<?php echo "$url" ;?>"> <label class="h6"><?php echo $name ;?></label></a>
            </div>
          <?php

        }
      }
    ?>
  </div>
</div>


<?php 
include "anneli/footer.php";
?>