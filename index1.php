<?php
// chdir ("/var/www/" . explode (".",$_SERVER ["HTTP_HOST"])[0]);
chdir (__DIR__);
include "config.php";
include "anneli/header.php";

// if ($uid == null)
//   require_login ();

$cmd = sprintf (
    "/usr/bin/node %s/storage.js %s %s list %s",
    __DIR__, $token, "gcloud", $_GET ['dir']
);

$output = "" ;
$res = null ;


// var_dump ($cmd) ;
exec ($cmd, $output, $res) ;
$json = json_decode (join ("", $output), true);
// var_dump ($json);
// var_dump ($output);
// var_dump ($res);
$parent = $_GET ["dir"] ;
?>
<script>
  const currentDir = "<?php echo $_GET ["dir"] ;?>";
</script>
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
              <a href="<?php echo "?dir=$parent/$name" ;?>"> <img src="folder.png" width=64></img>
              <label class="h6"><?php echo $name ;?></label></a>
            </div>
          <?php
        } else {
          ?>
            <div class="col-md-1 justify-content-center text-center">
              <button class="mdl-button" style="height:96" data-bs-toggle="modal" data-bs-target="#modal" onclick="javascript: play_video ('<?php echo "$url" ;?>');"> 
                <img src="video.png" width=64></img>
                <label style="max-width:64" class="h6 p-1"><?php echo $name ;?></label>
              </button>
            </div>
          <?php

        }
      }
    ?>
  </div>
</div>

<div id="target" ondrop="drop_handler(event)" ondragover="dragover_handler(event)" class="card shadow" style="position:fixed;right:10;bottom:10">
  <div class="p-3 text-bold bg-primary text-white text-left">
    Upload List &nbsp;&nbsp;
    <button onclick="uploadFile()" class="mdl-button"><i style="float:right" class="text-white m-1 fas fa-upload"></i></button>
  </div>
  <ol class="list-group" id="list-group">
    <!--
    <li class="list-group-item">
      http://example.com/video1.mp4
      <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
      </div>
    </li>
    -->
  </ol>
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
    <video autoplay=true controls=true width="500" height="300"></video>
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

// document.getElementsByTagName ("button")[0].focus ()
function dragover_handler(ev) {
 ev.preventDefault();
 ev.dataTransfer.dropEffect = "move";
}
function drop_handler(ev) {
  ev.preventDefault();
  // Get the id of the target and add the moved element to the target's DOM
  const data = ev.dataTransfer.getData("text/plain");
  //  ev.target.appendChild(document.getElementById(data));
  console.log (data)
  if (typeof (localStorage ["downloadList"]) == "undefined") {
    localStorage ["downloadList"] = [""]
  }

  localStorage ["downloadList"] = localStorage ["downloadList"] + ";" + data

  listItem = document.createElement ("li")
  listItem.classList.add ("list-group-item")
  listItem.classList.add ("p-2")
  listItem.innerHTML = "<label>" + data + "</label>";
    '<div class="progress">\
      <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>\
    </div>';

  ui ("list-group").appendChild (listItem)
}

function populateList () {
  if (typeof (localStorage ["downloadList"]) == "undefined") {
    return ;
  }

  for (item of localStorage ["downloadList"].split (";")) {
    if (item == "")
      continue ;
    listItem = document.createElement ("li")
    listItem.classList.add ("list-group-item")
    listItem.classList.add ("p-2")

    listItem.innerHTML = "<label>" + item + "</label>"; 
      '<div style="float:right" class="spinner-border spinner-border-sm text-primary" role="status">\
        <span class="visually-hidden">Loading...</span>\
      </div>' +
      '<i style="float:right" class="fas fa-check-circle text-success"></i>' ;
      '<div class="progress">\
        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>\
      </div>';

    ui ("list-group").appendChild (listItem)

  }
}

async function uploadFile () {
  items = document.getElementById ("list-group").getElementsByTagName ("li")
  for (i of items) {
    console.log (i)
    url = i.firstChild.innerText
    filename = url.split ("/")[url.split ("/").length -1]
    console.log ("downloading " + url + " to " + filename)
    cmd = `/api.php?mode=upload&url=${url}&backend=gcloud&file=${currentDir}/${filename}`
    p = uic ("div")
    p.classList.add ("spinner-border")
    p.classList.add ("spinner-border-sm")
    p.classList.add ("text-primary")
    p.style.float = "right"
    
    i.appendChild (p)
    console.log (cmd)
    await $.ajax (cmd).done (function (data) {
      console.log (data)
    })
    console.log ("-------| done |---------")
    p.classList.remove ("spinner-border")
    p.classList.remove ("spinner-border-sm")
    p.classList.remove ("text-primary")
    p.innerHTML = '<i style="float:right" class="fas fa-check-circle text-success"></i>'
    if (typeof (localStorage ["downloadList"]) != "undefined") {
      l = localStorage.downloadList.split (";")
      n = ""
      for ( a of l) {
        if (a != url) {
          n = n + a + ";"
        }
      }

      localStorage.downloadList = n;
    }
  }
}

</script>

<div class="alert m-0 text-center text-monospace bg-primary text-white"><?php passthru ("fortune");?></div>
<?php 
include "anneli/footer.php";
?>

<script>
  populateList () ;
</script>