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
              <button class="mdl-button" style="height:96" data-bs-toggle="modal" data-bs-target="#modal" onclick="javascript: play_video ('<?php echo "$url" ;?>');"> 
                <img src="video.png" width=64></img>
                <label class="h6 p-1"><?php echo $name ;?></label>
              </button>
            </div>
          <?php

        }
      }
    ?>
  </div>
</div>

<!-- Full screen modal -->
<div id="modal" class="modal" tabindex="-1">
  <div class="modal-dialog">
  <!-- poster="MY_VIDEO_POSTER.jpg" -->
  <!--
    <video
      id="my-video"
      class="video-js"
      controls
      preload="auto"
      width="640"
      height="264"
      data-setup="{}">
      <source id="video-player" type="video/mp4" />
      <p class="vjs-no-js">
        To view this video please enable JavaScript, and consider upgrading to a
        web browser that
        <a href="https://videojs.com/html5-video-support/" target="_blank"
          >supports HTML5 video</a
        >
      </p>
    </video>
    -->
    <video controls=true width="500" height="300"></video>
  </div>
</div>
<script>
  function play_video (url) {
    console.log (`Playing video ${url}`);
    var videoEl = document.getElementsByTagName ("video")[0];
    videoEl.setAttribute ("src", url)
  }

  var myModalEl = document.getElementById('modal')
  myModalEl.addEventListener('hidden.bs.modal', function (event) {
    // do something...
    play_video ("")
  })

  myModalEl.addEventListener('keydown', function (event) {
    console.log (event)
    var videoEl = document.getElementsByTagName ("video")[0];
    switch(event.key) {
      case "f":
        videoEl.requestFullscreen () ;
        break;
      case "g":
      case "i":
        videoEl.requestPictureInPicture () ;
        break;
      case 'p':
        if (videoEl.paused)
          videoEl.play ()
        else  videoEl.pause ();
        break ;
      case '1':
      case '2':
      case '3':
      case '4':
      case '5':
      case '6':
      case '7':
      case '8':
      case '9':
        videoEl.currentTime = videoEl.duration * event.key * .1
        break
      
    }
  })


</script>

<?php 
include "anneli/footer.php";
?>