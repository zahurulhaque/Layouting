<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>New Layout</title>

    <!-- Framework CSS -->
    <link rel="stylesheet" href="/blueprint/src/reset.css" type="text/css" media="screen, projection">
    <link rel="stylesheet" href="/blueprint/screen.css" type="text/css" media="screen, projection">
    <link rel="stylesheet" href="/turbine/css.php?files=/css/main.cssp">
    <!--[if lt IE 8]><link rel="stylesheet" href="../blueprint/ie.css" type="text/css" media="screen, projection"><![endif]-->
  </head>
  <body>
    <div id="gradient-top"></div>
    <div id="gradient-top-chrome"></div>
    <div class="container">
      <div id="header">
        <div id="header-info" class="span-24">
          <a id="header-info-logo" href="/"></a>
          <div id="header-info-user">
            <span class="fame-number left">999 999</span><span class="fame-logo left"></span>
            <span class="vibe-number left">999 999</span><span class="vibe-logo left"></span>
            <span class="bling-number left">999 999</span><span class="bling-logo left"></span>
            
            <div class="mambapoints-bloc left">
              <div class="mambapoints-line">
                <div class="mambapoints-exp"></div>
              </div>
              <span class="mambapoints-logo"></span>
            </div>
            <span class="header-info-separator left">|</span>
            <a href="#" class="header-info-user-name header-info-user-name-ie left">User Lambda</a>
            <span class="header-info-separator left">|</span>
            <a href="#" class="header-info-user-logout left">Déconnexion</a>
          </div>
        </div>
        <div id="header-menu" class="span-24">
          <a href="#" class="header-menu-link first">Home</a>
          <a href="#" class="header-menu-link">News</a>
          <a href="#" class="header-menu-link">Forum</a>
          <a href="#" class="header-menu-link">Nation</a>
          <a href="#" class="header-menu-link">Shop</a>
          <a href="#" class="header-menu-link">Mon Compte</a>
        </div>
      </div>
      
      <div id="under-header-news" class="span-24">
        <div id="advert-header-news" class="span-24">
          Advert
        </div>
      </div>
      
      <div id="content" class="span-16">
        <div id="news-fil" class="span-16 last">
          <div id="news-header" class="span-16 last">
            <span>Les news</span> de la Mamba Nation
          </div>
          <?php
            for($i=0; $i<5; $i++) {
              ?>
              <div class="news-bloc span-16 last">
                <div class="news-bloc-img span-4">
                  <img src="/images/news-img.jpeg" width="150" height="150" alt="Test Images News" title="Test Images News"/>
                </div>
                <div class="news-bloc-content span-9">
                  <div class="news-bloc-title">Gooood morning la Nation !</div>
                  <div class="news-bloc-date">02/12/2010</div>
                  <div class="clear"></div>
                  <div class="news-bloc-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris non tellus enim, vel ullamcorper sem. Suspendisse elementum, 
                    leo ac commodo tincidunt, orci quam semper risus, vehicula iaculis dolor diam mollis libero. 
                    Curabitur eget orci id leo consequat faucibus auctor nec diam. Maecenas at mauris augue, sit amet mattis ligula. 
                    Fusce metus metus, consequat vel dictum fermentum, porttitor non nibh. Donec libero arcu, venenatis nec venenatis et, 
                    laoreet sit amet est. Sed euismod velit eu eros ultrices porta.
                  </div>
                </div>
                <div class="news-bloc-more span-3 last">
                  <div class="news-bloc-more-button">En savoir <span>+</span></div>
                </div>
              </div>
              <?php
            }
          ?>
        </div>
      </div>
      
      <div id="content-advert" class="span-8 last">
        <?php
          for($j=0; $j<2; $j++) {
            ?>
            <div class="advert-bloc span-8 last">
              <div class="advert-bloc-title span-8 last">
                T'as plein de <span>question ?</span>
              </div>
              <div class="advert-bloc-content span-8 last">
                Content <?php echo $j; ?>
              </div>
            </div>
            <?php
          }
        ?>
        <div class="advert-bloc-alone span-8 last">
          <div class="advert-bloc-alone-content span-8 last">
            Mamba Mode
          </div>
        </div>
      </div>
      
      <div id="footer" class="span-24">
        <div id="footer-content">
          <a href="#" class="footer-content-link">footer 01</a>
          <span class="footer-conter-separator">|</span>
          <a href="#" class="footer-content-link">footer 02</a>
          <span class="footer-conter-separator">|</span>
          <a href="#" class="footer-content-link">footer 03</a>
          <span class="footer-conter-separator">|</span>
          <a href="#" class="footer-content-link">footer 04</a>
          <span class="footer-conter-separator">|</span>
          <a href="#" class="footer-content-link">footer 05</a>
          <span class="footer-conter-separator">|</span>
          <a href="#" class="footer-content-link">footer 06</a>
        </div>
        <div id="footer-copyright">
          Supported browser: Internet Explorer 8 and 9, Firefox 3.5 and 3.6, Chrome.
          <br/>
          (c) 2004-2010 Mimesis Republic, Mamba Nation is a registered trademark. All rights reserved.
        </div>
      </div>
    </div>
  </body>
</html>
