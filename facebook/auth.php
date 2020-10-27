<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		* {
  box-sizing: border-box;
}

body {
  margin: 0;
}

#container {
  max-width: 600px;
  margin: 0 auto;
  text-align: center;
}

.clearfix {
  clear: both;
}

.hidden {
  display: none;
}

#user-info {
  border: 1px solid #CCC;
  clear: both;
  margin: 0 auto 20px;
  max-width: 400px;
  padding: 10px;
  text-align: left;
}

#photo-container {
  background-color: #EEE;
  border: 1px solid #CCC;
  float: left;
  height: 80px;
  margin-right: 10px;
  width: 80px;
}

#photo {
  height: 80px;
  margin: 0;
  width: 80px;
}

@media (max-width: 300px) {
  #photo-container,
  #photo {
    height: 40px;
    width: 40px;
  }
}
	</style>
</head>
<body>



 <div id="container">
      <h3>Firebase Phone Number Auth. Demo</h3>
      <div id="loading">Loading...</div>
      <div id="loaded" class="hidden">
        <div id="main">
          <div id="user-signed-in" class="hidden">
            <div id="user-info">
              <div id="photo-container">
                <img id="photo">
              </div>
              <div id="name"></div>
              <div id="email"></div>
              <div id="phone"></div>
              <div class="clearfix"></div>
            </div>
            <p>
              <button id="sign-out">Sign Out</button>
              <button id="delete-account">Delete account</button>
            </p>
          </div>
          <div id="user-signed-out" class="hidden">
            <h4>You are signed out.</h4>
            <div id="firebaseui-spa">
              <h3>Single Page App mode:</h3>
              <div id="firebaseui-container"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

<script type="text/javascript">
	/**
 * @return {!Object} The FirebaseUI config.
 */
function getUiConfig() {
  return {
    'callbacks': {
      // Called when the user has been successfully signed in.
      'signInSuccess': function(user, credential, redirectUrl) {
        handleSignedInUser(user);
        // Do not redirect.
        return false;
      }
    },
    // Opens IDP Providers sign-in flow in a popup.
    'signInFlow': 'popup',
    'signInOptions': [
      // The Provider you need for your app. We need the Phone Auth
      firebase.auth.TwitterAuthProvider.PROVIDER_ID,
      {
        provider: firebase.auth.PhoneAuthProvider.PROVIDER_ID,
        recaptchaParameters: {
          type: 'image', // another option is 'audio'
          size: 'invisible', // other options are 'normal' or 'compact'
          badge: 'bottomleft' // 'bottomright' or 'inline' applies to invisible.
        }
      }
    ],
    // Terms of service url.
    'tosUrl': 'https://www.google.com'
  };
}

// Initialize the FirebaseUI Widget using Firebase.
var ui = new firebaseui.auth.AuthUI(firebase.auth());

/**
 * Displays the UI for a signed in user.
 * @param {!firebase.User} user
 */
var handleSignedInUser = function(user) {
  document.getElementById('user-signed-in').style.display = 'block';
  document.getElementById('user-signed-out').style.display = 'none';
  document.getElementById('name').textContent = user.displayName;
  document.getElementById('email').textContent = user.email;
  document.getElementById('phone').textContent = user.phoneNumber;
  if (user.photoURL){
    document.getElementById('photo').src = user.photoURL;
    document.getElementById('photo').style.display = 'block';
  } else {
    document.getElementById('photo').style.display = 'none';
  }
};


/**
 * Displays the UI for a signed out user.
 */
var handleSignedOutUser = function() {
  document.getElementById('user-signed-in').style.display = 'none';
  document.getElementById('user-signed-out').style.display = 'block';
  ui.start('#firebaseui-container', getUiConfig());
};

// Listen to change in auth state so it displays the correct UI for when
// the user is signed in or not.
firebase.auth().onAuthStateChanged(function(user) {
  document.getElementById('loading').style.display = 'none';
  document.getElementById('loaded').style.display = 'block';
  user ? handleSignedInUser(user) : handleSignedOutUser();
});

/**
 * Deletes the user's account.
 */
var deleteAccount = function() {
  firebase.auth().currentUser.delete().catch(function(error) {
    if (error.code == 'auth/requires-recent-login') {
      // The user's credential is too old. She needs to sign in again.
      firebase.auth().signOut().then(function() {
        // The timeout allows the message to be displayed after the UI has
        // changed to the signed out state.
        setTimeout(function() {
          alert('Please sign in again to delete your account.');
        }, 1);
      });
    }
  });
};

/**
 * Initializes the app.
 */
var initApp = function() {
  document.getElementById('sign-out').addEventListener('click', function() {
    firebase.auth().signOut();
  });
  document.getElementById('delete-account').addEventListener(
      'click', function() {
        deleteAccount();
      });
};

window.addEventListener('load', initApp);
</script>









<script>
    // TODO: Replace the following with your app's Firebase project configuration
    var firebaseConfig = {
      // ...
    };

    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
  </script>

<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.6.2/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.6.2/firebase-analytics.js"></script>

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyCGWcJGg_QASq8XGXMUaeRgw1L16MUWRyE",
    authDomain: "thefacebook-eb660.firebaseapp.com",
    databaseURL: "https://thefacebook-eb660.firebaseio.com",
    projectId: "thefacebook-eb660",
    storageBucket: "thefacebook-eb660.appspot.com",
    messagingSenderId: "1086369885576",
    appId: "1:1086369885576:web:fc7cadb890b754b7a01e3d",
    measurementId: "G-5BK2NETLHG"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>


  <!-- Insert these scripts at the bottom of the HTML, but before you use any Firebase services -->

  <!-- Add Firebase products that you want to use -->
  <script src="https://www.gstatic.com/firebasejs/7.6.2/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.6.2/firebase-firestore.js"></script>

</body>
</html>
