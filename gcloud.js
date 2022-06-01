const { getStorage } = require('firebase-admin/storage');
const bucket = getStorage().bucket();

async function upload(uid, filePath, destFileName) {
    await bucket.upload(filePath, {
      destination: uid + "/" + destFileName,
    });
  
    console.log(`${filePath} uploaded to ${bucket}`);
}  

async function list (uid, folder) {
    const [files] = await bucket.getFiles ();
    files.forEach(file => {
        let n = file.name.replaceAll (uid, "")
        console.log(n);
    });
}

async function getDownloadUrl (uid, filename) {
    const options = {
        version: 'v2', // defaults to 'v2' if missing.
        action: 'read',
        expires: Date.now() + 1000 * 60 * 60, // one hour
      };
  
  
    const [fname] = await bucket.file (uid + filename).getSignedUrl (options) ;
    console.log (fname)
}

exports.upload = upload ;
exports.list = list ;
exports.getDownloadUrl = getDownloadUrl;