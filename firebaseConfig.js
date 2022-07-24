// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig_GCP = {
  apiKey: "AIzaSyAXkfNJthVFmc8rw4jKKb6RBQXbJPJmUks",
  authDomain: "clover-356904.firebaseapp.com",
  projectId: "clover-356904"
};

// Your web app's Firebase configuration
const firebaseConfig = {
  apiKey: "AIzaSyCn8A_j9ZqwAIsMev2t7ildmhEVJXlhC1c",
  authDomain: "clover-356904.firebaseapp.com",
  projectId: "clover-356904",
  storageBucket: "clover-356904.appspot.com",
  messagingSenderId: "384276389297",
  appId: "1:384276389297:web:d17eaf64688e97f49fb190"
};

// Initialize Firebase
firebaseApp = firebase.initializeApp(firebaseConfig);
analytics = null ;

if (analyticsEnabled)
  analytics = firebase.analytics();
// const messaging = firebase.messaging ();

var uiConfigRedirect = {
  callbacks: {
    signInSuccessWithAuthResult: function(authResult, redirectUrl) {
      // User successfully signed in.
      // Return type determines whether we continue the redirect automatically
      // or whether we leave that to developer to handle.
      return true;
    },

    uiShown: function() {
      // The widget is rendered.
      // Hide the loader.
      // document.getElementById('loader').style.display = 'none';
    }
  },
  // Will use popup for IDP Providers sign-in flow instead of the default, redirect.
  // signInFlow: 'popup',
  // signInSuccessUrl: '/index.php',
  signInSuccessUrl: '/index.php',
  signInOptions: [
    // Leave the lines as is for the providers you want to offer your users.
    firebase.auth.GoogleAuthProvider.PROVIDER_ID,
    // firebase.auth.FacebookAuthProvider.PROVIDER_ID,
    // firebase.auth.TwitterAuthProvider.PROVIDER_ID,
    // firebase.auth.GithubAuthProvider.PROVIDER_ID,
    firebase.auth.EmailAuthProvider.PROVIDER_ID
    // firebase.auth.PhoneAuthProvider.PROVIDER_ID
  ]
  // Terms of service url.
  // tosUrl: '<your-tos-url>',
  // Privacy policy url.
  // privacyPolicyUrl: '<your-privacy-policy-url>'
};

var uiConfig = {
  callbacks: {
    signInSuccessWithAuthResult: function(authResult, redirectUrl) {
      // User successfully signed in.
      // Return type determines whether we continue the redirect automatically
      // or whether we leave that to developer to handle.
      location.reload ()
      return false;
    },

    uiShown: function() {
      // The widget is rendered.
      // Hide the loader.
      // document.getElementById('loader').style.display = 'none';
    }
  },
  // Will use popup for IDP Providers sign-in flow instead of the default, redirect.
  // signInFlow: 'popup',
  // signInSuccessUrl: '/index.php',
  signInSuccessUrl: '/index.php',
  signInOptions: [
    // Leave the lines as is for the providers you want to offer your users.
    firebase.auth.GoogleAuthProvider.PROVIDER_ID,
    // firebase.auth.FacebookAuthProvider.PROVIDER_ID,
    // firebase.auth.TwitterAuthProvider.PROVIDER_ID,
    // firebase.auth.GithubAuthProvider.PROVIDER_ID,
    firebase.auth.EmailAuthProvider.PROVIDER_ID
    // firebase.auth.PhoneAuthProvider.PROVIDER_ID
  ]
  // Terms of service url.
  // tosUrl: '<your-tos-url>',
  // Privacy policy url.
  // privacyPolicyUrl: '<your-privacy-policy-url>'
};