const { getStorage } = require('firebase-admin/storage');
const bucket = getStorage().bucket();

async function upload(uid, filePath, destFileName) {
    await bucket.upload(filePath, {
      destination: uid + "/" + destFileName,
    });
  
    console.log(`${filePath} uploaded to ${bucket}`);
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
    const options = {
        version: 'v2', // defaults to 'v2' if missing.
        action: 'read',
        expires: Date.now() + 1000 * 60 * 60, // one hour
      };
  
  
    const [fname] = await bucket.file (uid + filename).getSignedUrl (options) ;
    // console.log (fname)
    return fname ;
}

exports.upload = upload ;
exports.list = list ;
exports.getDownloadUrl = getDownloadUrl;