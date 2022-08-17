	function play_video (url) {
    if (url != "")
      $("#modal").modal ("show")
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

function add_file (name, url, isDir = false) {
    console.log (`${name} -> ${url}`)
    div = uic ("div")
    for (cl of [
        'col-md-6', 'row','justify-content-center', 'text-center', 'text-wrap'
    ]) 
        div.classList.add (cl)

    icon = uic ("img")
    if (isDir)
        icon.src = findIcon ("folder", "places")
    else {
        ext = url.split (".")
        if (ext.length == 1)
          ext = "mp4"
        else
          ext = ext [ext.length - 1]
        
        thumb = url.replace (name, "." + name) + ".jpg"
        console.log (url, name, thumb)
        if (files.indexOf (thumb) != -1)
          icon.src = "https://storage.cloud.google.com/qsx/" + thumb
        else {
          console.log ("no thumbnail for ",thumb)
          icon.src = findIcon (mimes [ext], "mimetypes")
        }
    }
    
    icon.width = iconSize
    icon.classList.add ("mdl-shadow--4dp")
    icon.classList.add ('col-12')
    link = uic ("a")
    if (isDir)
        link.href = `javascript: load_folder ("${url}");`
    else
        link.href = `javascript: play_video ("https://storage.cloud.google.com/qsx/${url}");`

    label = uic ("label")
    label.classList.add ("h6")
    label.classList.add ("btn")
    label.classList.add ("mdl-shadow--4dp")
    label.classList.add ("text-break")
    label.innerText = name

    box = uic ("div")
    link.appendChild (icon)
    download = uic ("a")
    download.innerHTML = '<span class="h2 p-2 align-bottom material-symbols-outlined">download</span>'
    download.href = `https://storage.cloud.google.com/qsx/${url}`

    id = name.replaceAll (" ", "_")
    link.id = id
    tooltip = uic ("div")
    tooltip.classList.add ("mdl-tooltip")
    tooltip.innerText = name
    tooltip.setAttribute ("for", id)
    div.appendChild (tooltip)
    div.appendChild (link)
    div.appendChild (box)
    box.appendChild (download)
    box.appendChild (label)

    if (! (currentFiles.includes (name))) {
        currentFiles.push (name)
        ui ("files").appendChild (div)
    } else
        console.log ("duplicate entry", name)
}

function load_folder (folder) {
    ui ("files").innerHTML = ""
    currentFiles = []
    for (file of files) {
        if (folder == null) {
            if (file.search ("/")== -1) {
                add_file (file, file)
            } else {
                add_file (file.split ("/") [0], file.split ("/") [0], true)
            }
        } else {
            if (file.startsWith (folder)) {
                vector = file.split (folder)
                v2 = vector [1].split ("/")
                if (v2.length == 2) {
                    if (v2[1][0] == "." || v2[1] == '')
                      continue
                    add_file (v2 [1], file)
                } else {
                    add_file (v2 [1], folder + "/" + v2 [1], true )
                }
            }
        }
    }

    populate_breadcrumbs (folder)
    componentHandler.upgradeDom()
}

function add_breadcrumb (name, url) {
    a = uic ("a")
    for (c of ['mdl-button', 'mdl-button--raised','ms-2']) {
        a.classList.add (c)
    }

    a.href = url
    a.innerHTML = name ;
    ui ("breadcrumbs").appendChild (a)
}

function populate_breadcrumbs (folder) {
    ui ("breadcrumbs").innerHTML = ""
    add_breadcrumb (
        '<span class="p-1 material-symbols-outlined">\
        home\
        </span>', 'javascript: load_folder (null);'
    )
 
    if (folder == null)
        return;
    root = ""
    for (path of folder.split ("/")) {
        add_breadcrumb (path, 'javascript: load_folder ("' + root + path + '")', true)
        root = root + path + "/"
    }
}

function findIcon (icon, category) {
    return "/anneli/assets/css/icons/" + icon_theme + "/" + iconSize + "x" + iconSize + "/" + category + "/" + icon + ".png"
}

function searchFiles () {
    filename = ui ("search").value
    if (filename == "")
        return ;
    
    if (filename.startsWith ("#")) {
        cmd = filename.split ("#")[1]
        console.log ("running command", cmd)
        window [cmd] ()
        return
    }

    console.log ("searching for "+ filename)
    ui ("files").innerHTML = ""
    for (file of files) {
        if (file.toLowerCase (). search (filename)== -1) {
            // console.log (`No ${filename} in ${file.toLowerCase ()}`)
            continue
        }
        
        v = file.split ("/")
        add_file (v [v.length - 1], file)        
    }
}

function sl () {
    ui ("files").innerHTML = ""
    for (file of files) {
        v = file.split ("/")
        add_file (v [v.length - 1], file)        
    }
}
