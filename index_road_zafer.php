<?php
include "class/sendMail.php";
?>
<!DOCTYPE html>

<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css" type="text/css">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <script src="js/jquery.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <script src="js/owl.carousel.js" type="text/javascript"></script>
</head>

<body>
  <div class="top" id="home">
    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
            <img src="images/logo.jpg" class="img-responsive logo">
          </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="list_menu">
              <a href="#offre_exclusives">Nos offres</a>
            </li>
            <li class="list_menu">
              <a href="#dernier_zafer">Nos catalogues</a>
            </li>
            <li class="list_menu">
              <a href="#pourquoi_rod_zafer">Pourquoi Rodzafer ?</a>
            </li>
            <li class="list_menu">
              <a href="#confiance">Nos partenaires</a>
            </li>
            <li class="list_menu">
              <a href="#telecharger_appli" class="download">Télécharger</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <div class="head_rod">
    <div class="container-fluid">
      <div class="content_rod">
        <div class="content_header_une">
          <div class="container">
            <div class="content_head_top">
              <div class="content_head_top_left">
                <img src="images/image_left_header_V2.png" class="img-responsive">
              </div>
              <div class="content_head_top_right">
                <img src="images/image_right_header.png" class="img-responsive">
              </div>
              <img src="images/image_une_mobile.jpg" class="img-responsive image_header_mobile">
              <div class="content_down_app">
                <a href="https://play.google.com/store/apps/details?id=com.antennereunion.rodzafer" target="_blank">
                  <img src="images/image_google_play.jpg">
                </a>
                <a href="https://itunes.apple.com/us/app/rodzafer/id1450170376?mt=8&ign-mpt=uo%3D2" target="_blank">
                  <img src="images/image_app_store.jpg">
                </a>
              </div>
            </div>

          </div>
          <!--<img src="images/image_header_rod_v7.jpg" class="img-responsive image_header">
          <img src="images/image_une_mobile.jpg" class="img-responsive image_header_mobile">-->

        </div>
        <!--<div class="container">
          <div class="content_down_app">
            <a href="https://play.google.com/store/apps/details?id=com.antennereunion.rodzafer" target="_blank">
              <img src="images/image_google_play.jpg">
            </a>
            <a href="https://itunes.apple.com/us/app/rodzafer/id1450170376?mt=8&ign-mpt=uo%3D2" target="_blank">
              <img src="images/image_app_store.jpg">
            </a>
          </div>
        </div>-->
      </div>

    </div>
  </div>
  <section id="offre_exclusives">
    <div class="container">
      <h2 class="titre">Nos offres exclusives</h2>
      <h3>Téléchargez l'application pour profiter de nos offres exclusives Rodzafer</h3>
      <div class="list_offre">
        <ul>
          <li>
            <span class="logo_partenaire">
              <img src="images/image_liste_but.png" class="img-responsive">
            </span>
            <span class="content_text_list_offre">
              <span>
                <a href="#telecharger_appli">Téléchargez Rodzafer</a> pour profiter de l’offre</span>
            </span>
          </li>
          <li>
            <span class="logo_partenaire">
              <img src="images/image_list_darty.png" class="img-responsive">
            </span>
            <span class="content_text_list_offre">
              <span>
                <a href="#telecharger_appli">Téléchargez Rodzafer</a> pour profiter de l’offre</span>
            </span>
          </li>
          <li>
            <span class="logo_partenaire">
              <img src="images/image_list_habitat.png" class="img-responsive">
            </span>
            <span class="content_text_list_offre">
              <span>
                <a href="#telecharger_appli">Téléchargez Rodzafer</a> pour profiter de l’offre</span>
            </span>
          </li>
        </ul>
        <div class="content_savoire_plus">
          <a href="#telecharger_appli">Télécharger</a>
        </div>
      </div>
    </div>
  </section>
  <section id="dernier_zafer">
    <div class="couv_dernier_affaire">
      <div class="container-fluid">
        <div class="container">
          <h2 class="titre">Nos derniers catalogues </h2>
          <h3>Téléchargez l’application pour accéder à tous nos catalogues </h3>
        </div>
        <div class="bg_gris">
          <div class="container">
            <div class="owl-carousel owl-theme" id="dernier-affaire">
              <div class="item">
                <img src="images/catalogue_Gold-Center.jpg">
                <span class="content_text_list_catalogue">
                  <span>
                    <a href="#telecharger_appli">Téléchargez Rodzafer</a> pour accéder au catalogue</span>
                </span>
              </div>
              <div class="item">
                <img src="images/catalogue_Comptoir-au-surgele.jpg">
                <span class="content_text_list_catalogue">
                  <span>
                    <a href="#telecharger_appli">Téléchargez Rodzafer</a> pour accéder au catalogue</span>
                </span>
              </div>
              <div class="item">
                <img src="images/catalogue_LES-CASERNES.jpg">
                <span class="content_text_list_catalogue">
                  <span>
                    <a href="#telecharger_appli">Téléchargez Rodzafer</a> pour accéder au catalogue</span>
                </span>
              </div>
              <div class="item">
                <img src="images/catalogue_FIAT.jpg">
                <span class="content_text_list_catalogue">
                  <span>
                    <a href="#telecharger_appli">Téléchargez Rodzafer</a> pour accéder au catalogue</span>
                </span>
              </div>
              <div class="item">
                <img src="images/catalogue_OceanOr.jpg">
                <span class="content_text_list_catalogue">
                  <span>
                    <a href="#telecharger_appli">Téléchargez Rodzafer</a> pour accéder au catalogue</span>
                </span>
              </div>
              <div class="item">
                <img src="images/catalogue_OceanOr.jpg">
                <span class="content_text_list_catalogue">
                  <span>
                    <a href="#telecharger_appli">Téléchargez Rodzafer</a> pour accéder au catalogue</span>
                </span>
              </div>
            </div>
          </div>
          <div class="content_savoire_plus">
            <a href="#telecharger_appli">Télécharger</a>
          </div>
        </div>
      </div>
      <!--<div id="myModal1" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <p>
              <img src="images/catalogue_darty.jpg">
            </p>
          </div>
        </div>
      </div>
    </div>-->
      <!--<div id="myModal2" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <p>
              <img src="images/catalogue_darty.jpg">
            </p>
          </div>
        </div>
      </div>
    </div>-->
      <!--<div id="myModal3" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <p>
              <img src="images/catalogue_but.jpg">
            </p>
          </div>
        </div>
      </div>
    </div>-->
      <!--<div id="myModal4" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <p>
              <img src="images/catalogue_darty.jpg">
            </p>
          </div>
        </div>
      </div>
    </div>-->
      <!-- <div id="myModal5" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <p>
              <img src="images/catalogue_but.jpg">
            </p>
          </div>
        </div>
      </div>
    </div>-->
    </div>
  </section>
  <section id="telecharger_appli">
    <div class="telecharger_appli_inner_top">
      <div class="telecharger_appli_inner">
        <div class="container">
          <div class="content_down_appli">
            <div class="oeil_gauche">
              <img src="images/image_oeil_gauche_v1.png">
            </div>
            <h2 class="titre">Télécharger l’application</h2>
            <div class="content_inner_telecharger_appli">
              <div class="content_down_app_telecharger_appli">
                <a href="https://play.google.com/store/apps/details?id=com.antennereunion.rodzafer" target="_blank">
                  <img src="images/image_google_play.jpg">
                </a>
                <a href="https://itunes.apple.com/us/app/rodzafer/id1450170376?mt=8&ign-mpt=uo%3D2" target="_blank">
                  <img src="images/image_app_store.jpg">
                </a>
              </div>
            </div>
            <div class="content_oeil">
              <img src="images/image_oeil_rod.png">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="pourquoi_rod_zafer">
    <div class="container">
      <h2 class="titre">Pourquoi utiliser rodzafer ?</h2>
      <div class="content_inner_pourquoi">
        <div class="col1 col-md-4">
          <div class="top_content_pourquoi" id="top_left">
            <img src="images/image_col_1_top.png" class="img-responsive">
            <i id="area-tooltip1" class="area-tooltip" data-toggle="tooltip" data-html="true" data-placement="right" title="" data-animation="false"
              data-trigger="manual">&#160;</i>
          </div>
          <div class="bottom_content_pourquoi " id="bottom_left">
            <img src="images/image_col_1_bottom.png" class="img-responsive">
            <i id="area-tooltip2" class="area-tooltip" data-toggle="tooltip" data-html="true" data-placement="right" title="" data-animation="false"
              data-trigger="manual">&#160;</i>
          </div>
        </div>
        <div class="col2 col-md-4">
          <img src="images/image_phone.png" class="img-responsive" TooltipBackround="black">

        </div>
        <div class="col3 col-md-4">
          <div class="top_content_pourquoi" id="top_right">
            <img src="images/image_col_3_top.png" class="img-responsive">
            <i id=" area-tooltip3 " class="area-tooltip" data-toggle="tooltip" data-html="true" data-placement="right" title="" data-animation="false"
              data-trigger="manual">&#160;</i>
          </div>
          <div class="bottom_content_pourquoi" id="bottom_right">
            <img src="images/image_col_3_bottom.png" class="img-responsive">
            <i id="area-tooltip4" class="area-tooltip" data-toggle="tooltip" data-html="true" data-placement="right" title="" data-animation="false"
              data-trigger="manual">&#160;</i>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="confiance">
    <div class="content_confiance">
      <div class="container">
        <h2 class="titre">Retrouvez-les sur Rodzafer</h2>
        <div class="owl-carousel owl-theme" id="slide_confiance">
          <div class="item">
            <a href="https://www.lafoirfouille.fr/" target="_blank">
              <img src="images/la-foire-fouille.jpg">
            </a>
          </div>
          <div class="item">
            <a href="https://www.but.fr/" target="_blank">
              <img src="images/but.jpg">
            </a>
          </div>
          <div class="item">
            <a href="#">
              <img src="images/darty.jpg">
            </a>
          </div>
          <div class="item">
            <a href="https://www.habitat.fr/" target="_blank">
              <img src="images/habitat.jpg">
            </a>
          </div>
          <div class="item">
            <a href="http://www.e-leclerc.com/" target="_blank">
              <img src="images/e-leclerc.jpg">
            </a>
          </div>
          <div class="item">
            <a href="#" target="_blank">
              <img src="images/weldom.jpg">
            </a>
          </div>
          <div class="item">
            <a href="#" target="_blank">
              <img src="images/vogue.jpg">
            </a>
          </div>
          <div class="item">
            <a href="#" target="_blank">
              <img src="images/tati.jpg">
            </a>
          </div>
          <div class="item">
            <a href="#" target="_blank">
              <img src="images/score.jpg">
            </a>
          </div>
          <div class="item">
            <a href="#" target="_blank">
              <img src="images/RAVATEELECTRO.jpg">
            </a>
          </div>
          <div class="item">
            <a href="#" target="_blank">
              <img src="images/Peugeot-logo-.jpg">
            </a>
          </div>
          <div class="item">
            <a href="#" target="_blank">
              <img src="images/océanor.jpg">
            </a>
          </div>
          <div class="item">
            <a href="#" target="_blank">
              <img src="images/logo_og.fr_FR.jpg">
            </a>
          </div>
          <div class="item">
            <a href="#" target="_blank">
              <img src="images/LOGO-RAVATE-BRICO-ok-aout2018.jpg">
            </a>
          </div>
          <div class="item">
            <a href="#" target="_blank">
              <img src="images/LEADER-PRICE.jpg">
            </a>
          </div>
          <div class="item">
            <a href="#" target="_blank">
              <img src="images/lachocolaterie.jpg">
            </a>
          </div>
          <div class="item">
            <a href="#" target="_blank">
              <img src="images/kiabi.jpg">
            </a>
          </div>
          <div class="item">
            <a href="#" target="_blank">
              <img src="images/Kia.jpg">
            </a>
          </div>
          <div class="item">
            <a href="#" target="_blank">
              <img src="images/jumbo_score.jpg">
            </a>
          </div>
          <div class="item">
            <a href="#" target="_blank">
              <img src="images/Intersport.jpg">
            </a>
          </div>
          <div class="item">
            <a href="#" target="_blank">
              <img src="images/Hyundai-logo.jpg">
            </a>
          </div>
          <div class="item">
            <a href="#" target="_blank">
              <img src="images/goldcenter.jpg">
            </a>
          </div>
          <div class="item">
            <a href="#" target="_blank">
              <img src="images/GammvertLogo.jpg">
            </a>
          </div>
          <div class="item">
            <a href="#" target="_blank">
              <img src="images/fnac.jpg">
            </a>
          </div>
          <div class="item">
            <a href="#" target="_blank">
              <img src="images/FIAT.jpg">
            </a>
          </div>
          <div class="item">
            <a href="#" target="_blank">
              <img src="images/decathlon.jpg">
            </a>
          </div>
          <div class="item">
            <a href="#" target="_blank">
              <img src="images/COMPTOIR--DU-SURGELE.jpg">
            </a>
          </div>
          <div class="item">
            <a href="#" target="_blank">
              <img src="images/Centre-commercial-Les-Casernes.jpg">
            </a>
          </div>
          <div class="item">
            <a href="#" target="_blank">
              <img src="images/casernes.jpg">
            </a>
          </div>
          <div class="item">
            <a href="#" target="_blank">
              <img src="images/carrefour.jpg">
            </a>
          </div>
          <div class="item">
            <a href="#" target="_blank">
              <img src="images/cara.jpg">
            </a>
          </div>
          <div class="item">
            <a href="#" target="_blank">
              <img src="images/BureauVallee-logo.jpg">
            </a>
          </div>
          <div class="item">
            <a href="#" target="_blank">
              <img src="images/BureauVallee-logo.jpg">
            </a>
          </div>

        </div>
      </div>
    </div>
  </section>
  <section id="contact">
    <div class="content_contact_inner">
        <div class="container">
            <h2 class="titre">Contact</h2>
            <?php if ($messageSuccess != "") { ?>
                <p><span class="msg-success"><?php echo $messageSuccess; ?></span></p>
            <?php } ?>

            <?php if ($messageError != "") { ?>
                <p><span><?php echo $messageError; ?></span></p>
            <?php } ?>
            <form id="frmContact" method="POST" action="">
                <fieldset><label>Nom <span class="obligatoire">*</span> :</label>
                    <input type="text" placeholder="Nom"
                           name="nom" required="required"></fieldset>
                <fieldset><label>Prénom <span class="obligatoire">*</span> :</label>
                    <input type="text"
                           placeholder="Prénom"
                           name="prenom" required="required"></fieldset>
                <fieldset><label>Email <span class="obligatoire">*</span> :</label>
                    <input type="email"
                           placeholder="Email"
                           name="email" required="required"></fieldset>
                <fieldset><label>Numéro de téléphone <span class="obligatoire">*</span> :</label>
                    <input type="text"
                           placeholder="Phone"
                           name="phone" required="required">
                </fieldset>
                <fieldset><label class="vide">&nbsp;</label>
                    <textarea cols="100" rows="10" name="description"
                              placeholder="Bonjour, Je souhaiterais partager avec vous mes remarques sur votre application Rodzafer"></textarea>
                </fieldset>
                <fieldset><label class="vide">&nbsp;</label>
                    <input type="hidden" name="action" value="ok">
                    <input type="submit" value="Envoyer"></fieldset>
            </form>
        </div>
    </div>
</section>

  <section id="Suivez_nous">
    <div class="container">
      <div class="content_suit_inner">
        <p>
          <span>Rodzafer,</span> le catalogue en ligne à la Réunion. Vous êtes un annonceur ?
          <a href="mailto:regie@rodzafer.re">Contactez-nous</a>
          <i class="fa fa-mobile" aria-hidden="true"></i>
        </p>
        <div class="list_reseaux_socio">
          <a href="#">
            <i class="fa fa-facebook" aria-hidden="true"></i>

          </a>
          <a href="#">
            <i class="fa fa-instagram" aria-hidden="true"></i>
          </a>
          <a href="#">
            <i class="fa fa-snapchat-ghost" aria-hidden="true"></i>
          </a>
        </div>
      </div>
    </div>
  </section>
  <section id="foot_top">
    <div class="container">
      <div class="list_lien_footer">
        <ul class="list_top">
          <li>
            <a href="#offre_exclusives">Nos offres</a>
          </li>
          <li>
            <a href="#dernier_zafer">Nos catalogues</a>
          </li>
          <li>
            <a href="#pourquoi_rod_zafer">Pourquoi Rodzafer ?</a>
          </li>
          <li>
            <a href="#confiance">Nos partenaires</a>
          </li>
        </ul>
        <ul class="list_bottom">
          <li>
            <a href="#contact">Contact</a>
          </li>
          <li>
            <a href="http://rodzaferlp.ser-rct-01.antennereunion.fr/pdf/ml_rodzafer.pdf" target="_blank">Mentions légales</a>
          </li>
          <li>
            <a href="http://rodzaferlp.ser-rct-01.antennereunion.fr/pdf/charte_utilisation_ar.pdf" target="_blank">Charte d'utilisation</a>
          </li>
          <li>
            <a href="http://rodzaferlp.ser-rct-01.antennereunion.fr/pdf/charte_donnee_rodzafer.pdf" target="_blank">Rodzafer</a>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <section id="foot_bottom">
    <div class="container">
      <p>Copyright all rights reserved :
        <a href="#">www.rodzafer.re </a>
      </p>
    </div>
  </section>

  <div id="stop" class="scrollTop">
    <span>
      <a href="">
        <i class="fa fa-angle-up"></i>
      </a>
    </span>
  </div>
  <!--<link rel="stylesheet" href="http://www.dev.domtomauto.com/blog/wp-content/themes/blogdomtomauto/carte_borne_vehicule/css/tooltip.css?12319">-->
  <script type="text/javascript" src="http://www.dev.domtomauto.com/blog/wp-content/themes/blogdomtomauto/carte_borne_vehicule/js/tooltip.js"></script>
  <script>
    $(document).ready(function () {
      $('#dernier-affaire').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: true
          },
          600: {
            items: 2,
            nav: false
          },
          1000: {
            items: 3,
            nav: true,
            loop: true,
            margin: 20
          }
        }
      })
    })
  </script>
  <script>
    $(document).ready(function () {
      $('#slide_confiance').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: true
          },
          481: {
            items: 2,
            nav: false
          },
          768: {
            items: 4,
            nav: false
          },
          1000: {
            items: 5,
            nav: true,
            loop: true,
            margin: 5
          }
        }
      })
    })
  </script>
  <script>
    $(document).ready(function () {
      /******************************
          BOTTOM SCROLL TOP BUTTON
       ******************************/

      // declare variable
      var scrollTop = $(".scrollTop");

      $(window).scroll(function () {
        // declare variable
        var topPos = $(this).scrollTop();

        // if user scrolls down - show scroll to top button
        if (topPos > 100) {
          $(scrollTop).css("opacity", "1");

        } else {
          $(scrollTop).css("opacity", "0");
        }

      }); // scroll END

      //Click event to scroll to top
      $(scrollTop).click(function () {
        $('html, body').animate({
          scrollTop: 0
        }, 800);
        return false;

      }); // click() scroll top EMD

      /*************************************
        LEFT MENU SMOOTH SCROLL ANIMATION
       *************************************/
      // declare variable
      var h1 = $("#h1").position();
      var h2 = $("#h2").position();
      var h3 = $("#h3").position();

      $('.link1').click(function () {
        $('html, body').animate({
          scrollTop: h1.top
        }, 500);
        return false;

      }); // left menu link2 click() scroll END

      $('.link2').click(function () {
        $('html, body').animate({
          scrollTop: h2.top
        }, 500);
        return false;

      }); // left menu link2 click() scroll END

      $('.link3').click(function () {
        $('html, body').animate({
          scrollTop: h3.top
        }, 500);
        return false;

      }); // left menu link3 click() scroll END

    }); // ready() END
  </script>
  <script>
    // When the user scrolls the page, execute myFunction 
    window.onscroll = function () {
      myFunction()
    };

    // Get the header
    var header = document.getElementById("home");

    // Get the offset position of the navbar
    var sticky = header.offsetTop;

    // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction() {
      if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
      } else {
        header.classList.remove("sticky");
      }
    }
  </script>
  <script>
    // Get the container element
    var btnContainer = document.getElementById("myNavbar");

    // Get all buttons with class="btn" inside the container
    var btns = btnContainer.getElementsByClassName("list_menu");

    // Loop through the buttons and add the active class to the current/clicked button
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function () {
        var current = document.getElementsByClassName("active");

        // If there's no active class
        if (current.length > 0) {
          current[0].className = current[0].className.replace(" active", "");
        }

        // Add the active class to the current/clicked button
        this.className += " active";

        btnContainer.classList.remove('in');
      });
    }
  </script>
  <script>
    $(document).ready(function () {
      $('a[href*="#"]')
        // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function (event) {
          // On-page links
          if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
            location.hostname == this.hostname
          ) {
            // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            // Does a scroll target exist?
            if (target.length) {
              // Only prevent default if animation is actually gonna happen
              event.preventDefault();
              $('html, body').animate({
                scrollTop: target.offset().top
              }, 1000, function () {
                // Callback after animation
                // Must change focus!
                var $target = $(target);
                $target.focus();
                if ($target.is(":focus")) { // Checking if the target was focused
                  return false;
                } else {
                  $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                  $target.focus(); // Set focus again
                };
              });
            }
          }
        });

    });
  </script>


  <script type="text/javascript">
    $(document).ready(function () {
      $('[data-toggle="tooltip"]').tooltip();
    });
    $(".area").on('mousemove', function (e) {
      var id_parent = $(this).parent().attr('id');
      var class_parent = $(this).parent().attr('class');
      var position = $("#" + id_parent).position();
      var top = 0;
      if (class_parent.trim() == 'top_content_pourquoi') {
        top = (id_parent == 'top_left') ? -100 : -100;
        top = (id_parent == 'top_right') ? -90 : -100;
      } else if (class_parent.trim() == 'bottom_content_pourquoi') {
        top = (id_parent == 'bottom_left') ? -90 : -90;
      }
      $("#" + $(this).attr("TooltipId")).css({
        top: top
      });

      $("#" + $(this).attr("TooltipId")).tooltip('show');
      $(".tooltip-inner").css({
        "background-color": $(this).attr("TooltipBackround")
      });
      var a = ($("#" + $(this).attr("TooltipId")).attr("data-placement") != "") ? $("#" + $(this).attr("TooltipId"))
        .attr("data-placement") : "top";
      $(".tooltip-arrow").css("border-" + a + "-color", $(this).attr("TooltipBackround"));
    })

    $(".area").on('mouseleave', function (e) {
      $("#" + $(this).attr("TooltipId")).tooltip('hide')
    });
  </script>



</body>

</html>