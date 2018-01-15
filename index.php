<!doctype html>
<?php 
session_start();
include "function.php";
include 'head.php';
include "dbconnection.php";
if (isset($_POST['username']) and isset($_POST['password'])) {
  // Parameter gegen SQL-Injection absichern!
  $user = $mysqli->real_escape_string($_POST['username']);
  $pass = $mysqli->real_escape_string($_POST['password']);
  if(is_auth($mysqli, $user, $pass) ) {
      $_SESSION['user'] = $user;
  }
  else {
      $_SESSION['user'] = NULL;
  }
}
if (! $_SESSION['user']) {
  header("Location: login.php");
  exit();
}
?>

<html lang="en">
<?php include 'head.php'; ?>
<body class="grey lighten-2">
  <header>
    <nav>
      <div class="nav-wrapper grey darken-2">
        <a href="#">
            <a href="index.php" class="brand-font"><i class="material-icons brand-logo">camera</i>PicHub</a>
        </a>
        
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li>
            <a href="login.php">Logout
            <?php
            session_destroy();
            ?>
            </a>
          </li>
          <li>
            <a href="werbebilder.php">Werbebilder</a>
          </li>
          <li>
            <a href="upload.php">upload</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <section class="CardSection">
  <h5>Werbebilder:</h5>
  <?php
  //https://www.php-kurs.com/mysql-datenbank-auslesen.htm
  $sqlpostwerbebilder = "SELECT * FROM tblpost";
  $db_erg = mysqli_query( $mysqli, $sqlpostwerbebilder );
  
  $werbebilderh5 = "1";
  while ($zeile = mysqli_fetch_array($db_erg))
  {
    if($zeile['restriction'] = "1")
    {
    echo "<div class='row'>";
    echo "<div class='col s4'>";
    echo "<div class='card'>";
    echo "<div class='card-image'>";
    echo "<img src=". $zeile['Picture_pfad'] .">";
    echo "<div class='hover card-hover'>";
    echo "<span class='card-title'>". $zeile['title'] ."</span>";
    echo "<a class='card-icon-title'";
    echo "<i class='material-icons icon-left'>cloud_download</i>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
  }
  }
  ?>
  <h5>Persönliche Bilder:</h5>
  <?php
  //https://www.php-kurs.com/mysql-datenbank-auslesen.htm
  $sqlpostwerbebilder = "SELECT * FROM tblpost";
  $db_erg = mysqli_query( $mysqli, $sqlpostwerbebilder );
  
  $werbebilderh5 = "1";
  while ($zeile = mysqli_fetch_array($db_erg))
  {
    if($zeile['restriction'] = "1")
    {
    echo "<div class='row'>";
    echo "<div class='col s4'>";
    echo "<div class='card'>";
    echo "<div class='card-image'>";
    echo "<img src=". $zeile['Picture_pfad'] .">";
    echo "<div class='hover card-hover'>";
    echo "<span class='card-title'>". $zeile['title'] ."</span>";
    echo "<a class='card-icon-title'";
    echo "<i class='material-icons icon-left'>cloud_download</i>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
  }
  }
  ?>
    <!-- <div class="row">
      <div class="col s4">
        <div class="card">
          <div class="card-image">
            <img src="img/Download15.jpeg">
            <div class="hover card-hover">
              <span class="card-title">Card Title</span>
              <a class="card-icon-title" href="www.goggle.com">
                <i class="material-icons icon-left">cloud_download</i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col s4">
          <div class="card">
            <div class="card-image">
              <img src="img/Download11.jpg">
              <div class="hover card-hover">
                <span class="card-title">Card Title</span>
                <a class="card-icon-title" href="www.goggle.com">
                  <i class="material-icons icon-left">cloud_download</i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col s4">
            <div class="card">
              <div class="card-image">
                <img src="img/Download12.jpg">
                <div class="hover card-hover">
                  <span class="card-title">Card Title</span>
                  <a class="card-icon-title" href="www.goggle.com">
                    <i class="material-icons icon-left">cloud_download</i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col s4">
              <div class="card">
                <div class="card-image">
                  <img src="img/Download13.jpg.jpg">
                  <div class="hover card-hover">
                    <span class="card-title">Card Title</span>
                    <a class="card-icon-title" href="www.goggle.com">
                      <i class="material-icons icon-left">cloud_download</i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col s4">
                <div class="card">
                  <div class="card-image">
                    <img src="img/Download14.jpg">
                    <div class="hover card-hover">
                      <span class="card-title">Card Title</span>
                      <a class="card-icon-title" href="www.goggle.com">
                        <i class="material-icons icon-left">cloud_download</i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
    </div> -->
  </section>





</body>

</html>