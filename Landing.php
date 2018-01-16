<!DOCTYPE html>
<html>
<?php 
include 'head.php'; 
session_start();

$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$db = "PicHub";

$mysqli = new mysqli($dbhost, $dbuser, $dbpassword, $db);

// if (isset($_POST['name']) && isset($_POST['passwort'])) {
  
  // Parameter gegen SQL-Injection absichern!
  $user = $mysqli->real_escape_string($_POST['name']);
  $pass = $mysqli->real_escape_string($_POST['passwort']);

  if( is_auth($mysqli, $user, $pass) ) {
      $_SESSION['userid'] = $user;
  }
  else {
      $_SESSION['userid'] = NULL;
  }
}

if (! $_SESSION['userid']) {
  header("Location: login.php");
  exit();
}
}

session_commit();
?>
<body>
  <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
    <div class="w3-display-middle w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">
      <span>Login</span>
      <form method="post">
        <div>
          <div class="input-field">
            <input placeholder="Username" name="username" id="first_name" type="text" class="validate">
          </div>
        </div>
        <div>
          <div class="input-field">
            <input placeholder="Password" name="pw" id="password" type="password" class="validate">
          </div>
        </div>
        <button class="btn waves-effect waves-light  grey darken-2" type="submit" name="action">Submit
            <i class="material-icons right">send</i>
          </button>
          <p>Registrieren?</p>
      </form>
    </div>
  </div>

  <!-- Add Google Maps -->
  <script>
    function myMap() {
      myCenter = new google.maps.LatLng(41.878114, -87.629798);
      var mapOptions = {
        center: myCenter,
        zoom: 12, scrollwheel: false, draggable: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      };
      var map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);

      var marker = new google.maps.Marker({
        position: myCenter,
      });
      marker.setMap(map);
    }

    // Modal Image Gallery
    function onClick(element) {
      document.getElementById("img01").src = element.src;
      document.getElementById("modal01").style.display = "block";
      var captionText = document.getElementById("caption");
      captionText.innerHTML = element.alt;
    }

    // Change style of navbar on scroll
    window.onscroll = function () { myFunction() };
    function myFunction() {
      var navbar = document.getElementById("myNavbar");
      if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
      } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
      }
    }

    // Used to toggle the menu on small screens when clicking on the menu button
    function toggleFunction() {
      var x = document.getElementById("navDemo");
      if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
      } else {
        x.className = x.className.replace(" w3-show", "");
      }
    }
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
  <!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>

</html>