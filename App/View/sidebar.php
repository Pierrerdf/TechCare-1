<link href="/Web/css/sidebar.css" rel="stylesheet">
<link href="/Web/css/rulesConnected.css" rel="stylesheet">

<?php use App\Model\User; ?>

  <!--header area start-->
  <header>
    <div id="header">
      <div class="left_area">
        <h3>Infinite <p>Measures</p></h3>
      </div>
      <div class="right_area">
        <div id="flag">
          <img class="img-flag" data-locale="fr" src="../../Web/images/france.png" alt="">
            <img class="img-flag" data-locale="en" src="../../Web/images/uk.png" alt="">
        </div>
        <form action="/logout" method="post">
          <button class="logout_btn" type="submit" name="logout"><i class="fas fa-power-off"></i></button>
        </form>
      </div>
    </div>
  <!--header area end-->
  <!--sidebar start-->
  <div class="sidebar">
    <div id="navbar">
      <center>
      <h2 id="name">
      <?php
      $this->user = new User();
      $name = $this->user->getFirstName($_SESSION['ID_User']);
      echo $name;?>
      </h2>
      </center>
      <a href="/dashboard"><i class="fas fa-desktop"></i><h1 data-i18n="SIDEBAR-dashboard"></h1></a>
      <a href="/profil"><i class="far fa-user"></i><h1 data-i18n="SIDEBAR-profil"></h1></a>
      <a href="/help"><i class="far fa-question-circle"></i><h1 data-i18n="SIDEBAR-help"></h1></a>
      <a href="/forum"><i class="far fa-comments"></i><h1 data-i18n="SIDEBAR-forum"></h1></a>
      <?php if($_SESSION['sessionStatus']>1): ?>
      <a href="/test"><i class="fal fa-clipboard-check"></i><h1 data-i18n="SIDEBAR-launchtest">Lancer test</h1></a>
      <?php endif; ?>
      <?php if($_SESSION['sessionStatus']==3): ?>
      <a href="/statistics"><i class="fal fa-analytics"></i><h1 data-i18n="SIDEBAR-statistics">Statistiques</h1></a>
      <?php endif; ?>
   </div>
    <div id="footer">
      <div id="link">
        <a href="/contact-admin"><span data-i18n="SIDEBAR-contact"></span></a>
        <span>•</span>
        <a href="/cgu"><span data-i18n="SIDEBAR-cgu"></span></a>
        <span>•</span>
        <a href="/faq"><span data-i18n="SIDEBAR-faq"></span></a>
      </div>
      <!-- <div id="social-network">
          <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
          <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
          <a href="#"><i class="fab fa-linkedin-in fa-2x"></i></a>
      </div> -->
      <div id="copyright">
        <p>&copy; Infinite Measures</p>
        <p data-i18n="SIDEBAR-right"></p>
      </div>
      <div id="copyright">
        <p>&copy; Infinite Measures</p>
        <p>Tous droits réservés 2019-2020</p>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="/Web/js/flag.js"></script>

  </header>
