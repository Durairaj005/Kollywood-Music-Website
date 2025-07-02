
<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
<!-- ...rest of your HTML code... -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#0e1313" />
  <link rel="manifest" href="./manifest.json">
  <link rel="shortcut icon" href="./public/favicon-32x32.png" type="image/x-icon">
  <link rel="apple-touch-icon" href="./public/apple-touch-icon.png">

  <title id="title">ThalaSculptune</title>
  <h1 style="background: linear-gradient(90deg,grey 20%, brown 60%);"  id="durai">ALL TIME  TOP BLOCK BUSTER SONGS IN KOLLYWOOD</h1>

  <!-- Import CSS File -->
  <link rel="stylesheet" href="./CSS/style.css">
  <link rel="stylesheet" href="./CSS/responsive.css">

  <!-- Import Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body onload="preLoader()">

  <div id="loading"></div>

  <!-- Go to Up button -->
  <button onclick="topFunction()" id="moveTopBtn" title="Go to top"><i class="fas fa-angle-up"></i></button>

  <!-- Navbar  -->
  <nav class="navbar">
    <div class="content">
      <div class="logo"><a href="#">THERIKKA VIDALAMA</a></div>
      <ul class="menu-list">
        <li><a href="logout.php" style="color:green; font-weight:bold;">Logout</a></li>
        <!-- Add these inside your <ul class="menu-list"> -->

        <div class="icon cancel-btn">
          <i class="fas fa-times"></i>
        </div>
        <li><a  style =" color:green"href="#play">Play Song</a></li>
        <li><a   style =" color:green" href="#songs">Choose Song</a></li>
        <li><a    style =" color:green"href="#about">About</a></li>
        <li><a     style =" color:green"href="#contact">Contact</a></li>
      </ul>
      <div class="icon menu-btn">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav>

  <div class="banner"></div>

  <!-- PLAY PAGE -->
  <section class="play" id="play">
    <div class="container">
      <div class="card">
        <div style ="background: linear-gradient(90deg, orange 30%, red 70%);" class="card-body">
          <div class="row">
            <div class="left-col">
              <h1 id="songName"> Rowdy Baby </h1>
              <h5>~<em id="songBy">Maari 2</em></h5>
            </div>
            <div class="right-col">
              <img src="./assets/Image/play.png" alt="play-button" id="icon">
              <p>Click Here To Listen</p>
            </div>
          </div>
        </div>
      </div>
      <audio id="song">
        <source src="./assets/Songs/Rowdy-Baby.mp3" type="audio/mp3">
      </audio>
    </div>
  </section>

  <!-- SELECT SONGS -->
  <section class="songs" id="songs">
    <div class="container">
      <div class="songs-header">
        <h2 class="title">Choose a song !!</h2>
        <a style="background: linear-gradient(90deg,grey 20%, brown 60%);" class="play-song-btn" href="#play">Play Song</a>
      </div>
      <div class="btn-group">
        <button  style="background: linear-gradient(90deg,grey 20%, brown 60%);" type="button" class="btn">1.Rowdy Baby</button>
        <button  style="background: linear-gradient(90deg,grey 20%, brown 60%);"type="button" class="btn">2.Arabic Kuthur</button>
        <button  style="background: linear-gradient(90deg,grey 20%, brown 60%);"type="button" class="btn">3.Vaathi Coming</button>
        <button  style="background: linear-gradient(90deg,grey 20%, brown 60%);"type="button" class="btn">4.Why This Kolaveri Di</button>
        <button  style="background: linear-gradient(90deg,grey 20%, brown 60%);"type="button" class="btn">5.Enjoy Enjaami</button>
        <button  style="background: linear-gradient(90deg,grey 20%, brown 60%);"type="button" class="btn">6.Aalaporaan Thamizhan</button>
        <button  style="background: linear-gradient(90deg,grey 20%, brown 60%);"type="button" class="btn">7.Selfie Pulla</button>
        <button  style="background: linear-gradient(90deg,grey 20%, brown 60%);"type="button" class="btn">8.Marana Mass </button>
        <button  style="background: linear-gradient(90deg,grey 20%, brown 60%);"type="button" class="btn">9.Tum Tum</button>
        <button  style="background: linear-gradient(90deg,grey 20%, brown 60%);"type="button" class="btn">10.Vaayadi Petha Pulla</button>
        <button  style="background: linear-gradient(90deg,grey 20%, brown 60%);"type="button" class="btn">11.Guleba </button>
        <button  style="background: linear-gradient(90deg,grey 20%, brown 60%);"type="button" class="btn">12.Gaanda Kannazhagi</button>
      </div>
    </div>
  </section>

  <!-- ABOUT SECTION -->
  <section style="background: linear-gradient(90deg,white 10%, brown 70%);" class="about" id="about">
    <div  style="background: linear-gradient(90deg,grey 20%, brown 60%);"class="container">
      <div class="about-header">
        <h2 class="title">About Song !!</h2>
      </div>
      <div  style="background: linear-gradient(90deg,grey 20%, brown 60%);"class="about-content">
        <div>
          <p id="aboutSong">
            Rowdy Baby is a popular Tamil song from the movie Maari 2, released in 2018. The song features Dhanush and Sai Pallavi, and it was composed by Yuvan Shankar Raja. The song's catchy tune, energetic choreography, and vibrant visuals contributed to its massive popularity, making it one of the most viewed South Indian songs on YouTube. The song's lyrics celebrate love and the carefree spirit of youth, and it has become a favorite among fans of Tamil cinema.
          </p>
          <a class="download-song" href="./assets/Songs/Rowdy-Baby.mp3" id="download" download="Song.mp3">
            Download Song
          </a>
        </div>
        <div class="image-container">
          <img src="./assets/Image/rowdy baby.jpg" alt="song-banner" id="banner">
        </div>
      </div>
    </div>
  </section>

  <section class="contact" id="contact">
    <h2 class="title">Connect with me on Social media</h2>
    <div class="social-media">
      <a href="https://www.instagram.com/invites/contact/?utm_source=ig_contact_invite&utm_medium=copy_link&utm_content=jyuvtgn " target="_blank"><i class="fab fa-instagram"></i></a>

      <a href="https://www.facebook.com/people/Faruk-Ahamed/pfbid02y4e19EUASxotoJ36HQwseVbxx4SCwoMqxDbUGia7KS3tefdXHf3x3yw4atk7JrTil/?rdid=0PbCNFbad1FJSZ0z&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F1BfNES6dtf%2F" target="_blank"><i class="fab fa-facebook"></i></a>

      <a href="https://www.linkedin.com/authwall?trk=bf&trkInfo=AQFJ8nrH98OYVAAAAZbhqrAwJDO0oxP_XWmxYt_k14tLDfJm8RE9Q0GGpDdgM0TlN1XlEY6c_I6Lmx0MR9i1vDBTlDeEkSlIGIv-s0WjOYwKkdXvANWeEFMpijx9xt-FLwMIr10=&original_referer=&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fin%2Fdurai-rajan-846a39291%3Futm_source%3Dshare%26utm_campaign%3Dshare_via%26utm_content%3Dprofile%26utm_medium%3Dandroid_app" target="_blank"><i class="fab fa-linkedin"></i></a>

      <a href="https://x.com/DURAIRAJAN007?t=4URNrsEn2CZLknDkJZ6KwQ&s=09" target="_blank"><i class="fab fa-twitter"></i></a>

      <a href="https://github.com/rajan-ds143" target="_blank"><i class="fab fa-github"></i></a>
    </div>

    <footer class="footer">
     
    </footer>
  </section>

  <!-- Import JS File -->
  <script src="./JS/script.js"></script>
  <script src="./RegisterServiceWorker.js"></script>

</body>

</html>