const { getStorage } = require('firebase-admin/storage');
const { spawn } = require("child_process");
const bucket = getStorage().bucket();

async function upload(uid, filePath, destFileName) {
    dest = ""
    if (destFileName [0] == "/")
        dest = uid + destFileName
    else
        dest = uid + "/" + destFileName
    
    await bucket.upload(filePath, {
      destination: dest
    });
  
    console.log(`${filePath} uploaded to ${destFileName}`);
}  

async function upload1 (uid, filePath, destFileName) {
    cmd = await spawn ("gsutil", ["cp", filePath, "gs://clover-cloud-file-manager.appspot.com/" + uid + destFileName])
    cmd.stdout.on("data", data => {
        console.log(`${data}`);
    });
    
    cmd.stderr.on("data", data => {
        console.log(`${data}`);
    });
    
    cmd.on('error', (error) => {
        console.log(`error: ${error.message}`);
    });
    
    cmd.on("close", code => {
        // console.log(`child process exited with code ${code}`);
    });
}

async function list (uid, folder) {
    // console.debug (`getting file names for ${folder}...`)
    const options = {}
    if (folder != null)
        options["prefix"] = uid + folder ;
  
    const [files] = await bucket.getFiles (options);
    // console.debug ("ok")
    json = {}
    i = 0 ;
    for (i = 0 ; i < files.length ; i ++) {
        let file = files [i]
        let n = file.name.replaceAll (uid, "").replaceAll (folder, "")
        let nVector = n.split ("/");
        if (nVector.length > 2) {
            json [nVector [1]] = null ;
            continue ;
        }
        /*
        if (folder != null && ! n.startsWith (folder)) {
            console.debug ("no match: " + n)
            return ;
        }
        */

        url = await getDownloadUrl (uid, file.name);
        json [n.replaceAll ("/", "")] = url
        // console.log (n + ": " + url)
    }

    console.log (JSON.stringify(json))
}

async function getDownloadUrl (uid, filename) {
    // console.log (filename)
    const options = {
        version: 'v2', // defaults to 'v2' if missing.
        action: 'read',
        expires: Date.now() + 1000 * 60 * 60, // one hour
      };
  
  
    const [fname] = await bucket.file (filename).getSignedUrl (options) ;
    // console.log (fname)
    return fname ;
}

exports.upload = upload ;
exports.list = list ;
exports.getDownloadUrl = getDownloadUrl;