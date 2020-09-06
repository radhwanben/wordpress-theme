<!doctype html>
<html lang="fr">
   <head>
      <meta charset="utf-8">
      <?php wp_title();?>
      <?php 
         wp_head();
         
         ?>
   </head>
   <body>
      
	  <?php  dynamic_sidebar('topsidbar'); ?>

      <div class="container-fluid headerXm d-none d-lg-block">
         <div class="container-fluid mymaxwidth">
            <div class="row">
               <div class="col-2 text-left align-self-center">
                  <?php
                     if(function_exists('the_custom_logo')){
                     	the_custom_logo();
                     }
                     
                     ?>
               </div>
               <div class="col-8 align-self-center">
                  <script type="text/javascript">
                     $(document).ready(function () {
                     $('.navbar-light .dmenu').hover(function () {
                             $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
                         }, function () {
                             $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
                         });
                     });
                  </script>
                  <nav class="navbar navbar-expand-sm  navbar-light bg-light Xmmenu-nav">
                     <div class="collapse navbar-collapse Xmmenu-div" id="xtmenu">
                        <?php
                           ajieledition_menus_options();
                           
                           ?>
                     </div>
                  </nav>
               </div>
               <div class="col-2 text-center align-self-center">
                  <a href='https://www.facebook.com/ajieledition/' target="_blank">
                  <img src="https://www.ajieledition.tn/assets/img/social-fb.png" class="SocialMediaIcon"></a>
                  <a href='https://www.instagram.com/ajieleditiondistribution/' target="_blank">
                  <img src="https://www.ajieledition.tn/assets/img/social-instag.png" class="SocialMediaIcon"></a>
                  <a href='' target="_blank">
                  <img src="https://www.ajieledition.tn/assets/img/social-in.png" class="SocialMediaIcon"></a>
                  <img src="https://www.ajieledition.tn/assets/img/social-yt.png" class="SocialMediaIcon"></a>
               </div>
            </div>
         </div>
      </div>
      <div class="container-fluid headerSm d-block d-lg-none">
         <nav class="navbar navbar-expand-lg navbar-light pl-0 pr-0 m-0">
            <a class="navbar-brand" href="https://www.ajieledition.tn/fr/" style="color: #fff;">AJIEL</a>
            <button class="navbar-toggler MOBILE-MENU-ICON" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><img src="/assets/img/menu-icon-gray-white.png"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-top: 6px;">
               <ul class="navbar-nav UL-NAV-MOBILE">
                  <li class="nav-item LI-NAV-MOBILE">
                     <div class="row">
                        <div class="col-12 COL-MOBILE">
                           <a href="https://www.ajieledition.tn/fr/">Accueil</a>
                        </div>
                     </div>
                  </li>
                  <li class="nav-item LI-NAV-MOBILE">
                     <div class="row">
                        <div class="col-12 COL-MOBILE">
                           <a href="https://www.ajieledition.tn/fr/">La maison</a>
                        </div>
                     </div>
                  </li>
                  <li class="nav-item LI-NAV-MOBILE">
                     <div class="row">
                        <div class="col-12 COL-MOBILE">
                           <a href="https://www.ajieledition.tn/fr/">Catalogue</a>
                        </div>
                     </div>
                  </li>
                  <li class="nav-item LI-NAV-MOBILE">
                     <div class="row">
                        <div class="col-12 COL-MOBILE">
                           <a href="https://www.ajieledition.tn/fr/">Actualités</a>
                        </div>
                     </div>
                  </li>
                  <li class="nav-item LI-NAV-MOBILE">
                     <div class="row">
                        <div class="col-12 COL-MOBILE">
                           <a href="https://www.ajieledition.tn/fr/contact.html">Contact</a>
                        </div>
                     </div>
                  </li>
                  <li class="nav-item LI-NAV-MOBILE">
                     <div class="row">
                        <div class="col-6 HEAD-CONTAINER-MAIN-MY-CART text-center">
                           <a href="tel:0021671758229"  rel="nofollow">
                           <img src="/assets/img/icon-header-tel.png" width="35" height="35" alt="commercial">
                           <br><span>+216 71 758 229</span>
                           </a>
                        </div>
                        <div class="col-6 HEAD-CONTAINER-MAIN-MY-ACCOUNT text-center">
                           <a href="https://www.ajieledition.tn/fr/contact.html"  rel="nofollow">
                           <img src="/assets/img/icon-header-account.png" width="35" height="35" alt="contact">
                           <br><span>Contact</span>
                           </a>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
         </nav>
      </div>