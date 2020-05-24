<link href="/Web/css/sidebar.css" rel="stylesheet">
<link href="/Web/css/rulesConnected.css" rel="stylesheet">

  <header>

    <!-- <div class="header">
      <div class="burger-button">
        <span></span>
      </div>

      <div class="logo-responsive">
        <img id="img-logor" src="../../Web/images/logo.png" alt="">
      </div>

      <div class="account-responsive">
        <button id="button_account" type="button" name="button"> <a href="#"><img id="img" src="../../Web/images/avatar.png" alt=""></a></button>
      </div>
    </div>

    <div id="mySidebar" class="sidebar">

      <div class="logo">
        <img id="img-logo" src="../../Web/images/logo.png" alt="">
      </div>

      <div class="navbar">
        <a href="/dashboard"><h1><i class="fal fa-book-heart"></i>Tableau de bord</h1></a>
        <a href="/help"><h1><i class="fal fa-question-circle"></i>Aide</h1></a>
        <a href="/forum"><h1><i class="fal fa-comments-alt"></i>Forum</h1></a>
        <?php if($_SESSION['sessionStatus']>1) : ?>
        <a href="/test"><h1><i class="fal fa-clipboard-check"></i>Lancer test</h1></a>
        <?php endif; ?>
        <?php if($_SESSION['sessionStatus']>2) : ?>
        <a href="/statitics"><h1><i class="fal fa-analytics"></i>Statistiques</h1></a>
        <?php endif; ?>
      </div>

      <div class="account">

        <div class="dropdown">
          <a href="/profil"><li><i class="fal fa-user-circle"></i>Profil</li></a>
          <form action="/logout" method="post">
            <li><i class="fal fa-power-off"></i></i> <input id="logout" type="submit" name="logout" value="Déconnexion"></li>
          </form>
        </div>

        <div class="btn">
          <button id="button-account" type="button" name="button">Mon compte<img id="arrow" src="../../Web/images/arrow.png" alt=""></button>
        </div>

       <script type="text/javascript" src="../../Web/js/account-dropdown.js"></script>

      </div>

      <div class="footersidebar">

        <div class="content">

          <div class="flag">
            <img id="img-flag" src="../../Web/images/france.png" alt="">
          </div>

          <div class="link">
            <a href="/contact-admin">Contact </a>
            <span>•</span>
            <a href="/cgu">CGU</a>
            <span>•</span>
            <a href="/faq">FAQ</a>
          </div>

        </div>

        <div class="copyright">
          <p>&copy; Infinite Measures - Tous droits réservés 2019-2020</p>
        </div>

      </div>

    </div>

    <script type="text/javascript" src="/Web/js/sidebar.js"></script>

  </header> -->

  <input type="checkbox" id="check">
  <!--header area start-->
  <header>
    <div id="header">
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>Coding <span>Snow</span></h3>
      </div>
      <div class="right_area">
        <form action="/logout" method="post">
          <input class="logout_btn" type="submit" name="logout" value="Déconnexion"></li>
        </form>
      </div>
    </div>
  </header>
  <!--header area end-->
  <!--sidebar start-->
  <div class="sidebar">
    <center>
      <h4>Jessica</h4>
    </center>
    <a href="/dashboard"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
    <a href="/help"><h1><i class="fal fa-question-circle"></i>Aide</h1></a>
    <a href="/forum"><h1><i class="fal fa-comments-alt"></i>Forum</h1></a>
    <?php if($_SESSION['sessionStatus']>1) : ?>
    <a href="/test"><h1><i class="fal fa-clipboard-check"></i>Lancer test</h1></a>
    <?php endif; ?>
    <?php if($_SESSION['sessionStatus']>2) : ?>
    <a href="/statitics"><h1><i class="fal fa-analytics"></i>Statistiques</h1></a>
    <?php endif; ?>
    <!-- <a href="#"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
    <a href="#"><i class="fas fa-cogs"></i><span>Components</span></a>
    <a href="#"><i class="fas fa-table"></i><span>Tables</span></a>
    <a href="#"><i class="fas fa-th"></i><span>Forms</span></a>
    <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
    <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a> -->
  </div>
  <!--sidebar end-->

  <body>

  </body>

<!--  <body id="body">-->
<!---->
<!--  </body>-->
<!--</html>-->
