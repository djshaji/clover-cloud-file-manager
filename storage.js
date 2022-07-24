#!/usr/bin/node

const { initializeApp, cert } = require('firebase-admin/app');
const { getAuth } = require('firebase-admin/auth');
const { spawn } = require("child_process");
const fs = require('fs');
const storageBackend = process.argv [3];

const serviceAccount = require('../clover-admin/clover-cloud-file-manager-firebase-adminsdk-kyyev-306eff38f6.json');

initializeApp({
  credential: cert(serviceAccount),
  storageBucket: 'clover-cloud-file-manager.appspot.com',
  databaseURL: 'https://clover-cloud-file-manager.firebaseio.com'
});

const storagePlatform = require ("./"+ storageBackend +".js")
const auth = getAuth () ;
let uid = null ;
// 'bucket' is an object defined in the @google-cloud/storage library.
// See https://googlecloudplatform.github.io/google-cloud-node/#/docs/storage/latest/storage/bucket
// for more details.

function authenticate (idToken) {
  getAuth()
  .verifyIdToken(idToken)
  .then((decodedToken) => {
    uid = decodedToken.uid;
    // console.log (uid)
    // download (process.argv [4])
    // upload ("gcloud", process.argv [4], "videos/new/intro.mp4")
    // list ("gcloud", process.argv [4])
    // getDownloadUrl ("gcloud", "/videos/new/intro.mp4")

    const operation = process.argv [4];
    run (operation)

  })
  .catch((error) => {
    // Handle error
    console.log (error)
  });
}

authenticate (process.argv [2])

async function download (url) {
    // console.debug (`download ${url}`)
    // const homedir = require('os').homedir() + "/clover/" + uid + "/cache/" 
    const homedir =  "/tmp/clover/" + uid + "/cache/" 
    uri = homedir + url.replaceAll ("/", ".")
    fs.mkdirSync (homedir, {recursive : true});
    console.log ("saving file to " + uri)
    cmd = await spawn ("axel", [url, "-n", "4", "-o", uri])
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
        storagePlatform.upload (uid, uri, process.argv [6]) ;
    });
    
}

async function run (operation) {
    switch (operation) {
        default:
            console.warn (`Unsupported operation ${operation}`)
            break ;
        case "upload":
            if (process.argv.length < 5) {
                console.error ("Incorrect number of arguments") ;
                break ;
            }

            await download (process.argv [5])
            break ;
        case "list":
            folder = null ;
            if (process.argv.length == 7)
                folder = process.argv [6]
            storagePlatform.list (uid, process.argv [5], process.argv[6]) ;
            break ;
        case "download":
            storagePlatform.getDownloadUrl (uid, process.argv [5]) ;
            break ;

    }
}