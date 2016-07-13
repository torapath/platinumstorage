<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Platinum Storage</title>
    <link rel="stylesheet" type="text/css" href="css/app.css"/>
  </head>
  <body>
    <nav class="top-bar">
        <ul class="menu left">
          <li class="menu-text" id="menu_logo"><a href="index"><span>PLATINUM<br />STORAGE</span></a></li>
        </ul>
      <section class="top-bar-section show-for-medium">
        <div class="right">
          Phone: <a href="tel:2255555555">225.485.4149</a>&nbsp;&nbsp;|&nbsp;&nbsp;Email: <a href="mailto:info@platinumstoragecondos.com">info@platinumstoragecondos.com</a><!--CHANGE TO ICONS ON MOBILE-->
        </div>
        <ul class="menu right">
          <li class="active"><a href="index">HOME</a></li>
          <li><a href="details">DETAILS</a></li>
          <li><a href="pricing">PRICING</a></li>
          <li><a href="gallery">GALLERY</a></li>
          <li><a href="faq">FAQ</a></li>
          <li><a href="contact">CONTACT</a></li>
        </ul>
      </section>
      <section class="show-for-small-only top-bar-section">
        <ul class="dropdown menu" data-dropdown-menu>
          <li class="menu-text"><a href="#"><i class="fi-list"></i></a>
          <ul class="menu">
            <li class="active"><a href="index">HOME</a></li>
            <li><a href="details">DETAILS</a></li>
            <li><a href="pricing">PRICING</a></li>
            <li><a href="gallery">GALLERY</a></li>
            <li><a href="faq">FAQ</a></li>
            <li><a href="contact">CONTACT</a></li>
          </ul>
          </li>
        </ul>
      </section>
    </nav>
    <div id="home_banner">
      <div class="orbit" role="region" data-orbit>
        <ul class="orbit-container">
          <button class="orbit-previous"><span class="show-for-sr"></span><i class="fi-arrow-left orbit_control"></i></button>
          <button class="orbit-next"><span class="show-for-sr"></span><i class="fi-arrow-right orbit_control"></i></button>
          <li class="is-active orbit-slide">
            <img class="orbit-image" src="img/slide1.jpg" alt="">
            <!--figcaption class="orbit-caption"></figcaption-->
          </li>
          <li class="orbit-slide">
            <img class="orbit-image" src="img/slide1.jpg" alt="">
            <!--figcaption class="orbit-caption"></figcaption-->
          </li>
          <li class="orbit-slide">
            <img class="orbit-image" src="img/slide1.jpg" alt="">
            <!--figcaption class="orbit-caption"></figcaption-->
          </li>
        </ul>
        <!--nav class="orbit-bullets">
          <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
          <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
          <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
        </nav-->
      </div>
    </div>
    <div id="home_cta">
      <div class="row align-center">
        <div class="column">
          <img src="img/botom-slider-decor.png" class="show-for-large">
          <h3>See some of the ways to enjoy your own storage condo.</h3>
          <!--a href="#" class="button_opp">View Images&nbsp;&nbsp;<span class="badge"><i class="fi-play r_arrow_opp"></i></span></a-->
          <a href="gallery.php" class="button_opp">VIEW IMAGES&nbsp;&nbsp;<object type="image/svg+xml" data="css/foundation-icons/svgs/play-circle1.svg"><span class="badge"><i class="fi-play r_arrow_opp"></i></span></object></a>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="medium-7 small-12 column">
          <h2>Platinum Storage</h2>
          <p>Platinum Storage is the first facility of its kind in Louisiana. It is a storage condo concept that originated in 1996 that has been very popular in every state in which it has been construced. Imagine the convenience of owning your own secure and private space that has endless possibilities for use.</p>

<p>There are many benefits of buying vs. leasing some of which include: mortgage payments are often less than rental rates, mortgage will eventually be paid to zero, and more...</p>
          <a href="details" class="button">Learn More&nbsp;&nbsp;<object type="image/svg+xml" data="css/foundation-icons/svgs/play-circle2.svg"><span class="badge"><i class="fi-play r_arrow"></i></span></object></a>
        </div>
        <div class="medium-5 small-12 column">
          <a data-open="floorplan"><img src="img/floorplan_small.png"><br />Click to enlarge.</a>
        </div>
      </div>
    </div>
    <div class="across3" data-equalizer-watch>
      <div class="row">
        <div class="small-12 medium-4 column" data-equalizer>
          <hr class="hrMid hide-for-small-only" />
          <a href="details" class="icon3"><img src="img/buy-01.png"></a>
          <h4>BUY</h4>
          <p>Owners can build equity in their units and re-sell them just like condominiums.</p>
          <a href="details" class="button_gray">VIEW DETAILS</a>
        </div>
        <div class="small-12 medium-4 column" data-equalizer>
          <hr class="hrMid hide-for-small-only" />
          <a href="pricing" class="icon3"><img src="img/upgrade-01.png"></a>
          <h4>UPGRADE</h4>
          <p>There are several upgrades available to make the space work best for you.</p>
          <a href="pricing" class="button_gray">VIEW PRICING</a>
        </div>
        <div class="small-12 medium-4 column" data-equalizer>
          <a href="gallery" class="icon3"><img src="img/enjoy-01.png"></a>
          <h4>ENJOY</h4>
          <p>There are many ways to enjoy owning a storage unit. See how others have enjoyed theirs.</p>
          <a href="gallery" class="button_gray">VIEW PHOTOS</a>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row bordered">
        <div class="small-12 medium-6 column">
          <div id="map"></div>
          <script>
            function initMap() {
              var stylesArray = [
                {
                  featureType: 'landscape',
                  elementType: 'all',
                  stylers: [
                    {color: '#F0F0F0'}
                  ]
                }
              ]
              var platinum = '<center><h2>Platinum Storage</h2><p>11634 Darryl Dr.<br />Baton Rouge, LA 70815</p></center>';
              var myLatLng1 = {lat: 30.432503, lng: -90.933926};
              var mapDiv = document.getElementById('map');
              var styledMap = new google.maps.StyledMapType(stylesArray,
                {name: "Styled Map"});
              var mapOptions = {
                center: {lat: 30.432503, lng: -90.933926},
                scrollwheel: false,
                zoom: 14,
                mapTypeControlOptions: {
                  mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
                }
              };
              var map = new google.maps.Map(mapDiv, mapOptions);
              var marker1 = new google.maps.Marker({
                position: myLatLng1,
                animation: google.maps.Animation.DROP,
                map: map,
                title: 'Platinum Storage'
              });
              marker1.setIcon('http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|8C181B');
              marker1.setOptions();
              var infowindow1 = new google.maps.InfoWindow({
                content: platinum
              });
              infowindow1.setZIndex(94)
              marker1.addListener('click', function() {
                infowindow1.open(map, marker1);
              });
              infowindow1.open(map,marker1);
              map.mapTypes.set('map_style', styledMap);
              map.setMapTypeId('map_style');
            }
          </script>
        </div>
        <div class="small-12 medium-6 column clearfix">
          <div class="row contact">
            <div class="small-12 column">
              <h3>Contact Us</h3>
            </div>
          </div>
          <div class="row address">
            <div class="small-4 columns">
              Address:
            </div>
            <div class="small-8 columns">
              25109 Wax Rd. Denham Springs, LA 70726
            </div>
          </div>
          <div class="row phone">
            <div class="small-4 columns">
              Phone:
            </div>
            <div class="small-8 columns">
              225.485.4149
            </div>
          </div>
          <div class="row email">
            <div class="small-4 columns">
              Email:
            </div>
            <div class="small-8 columns">
              info@platinumstoragecondos.com
            </div>
          </div>
          <div class="row form">
            <div class="small-6 column">
              <input type="text" name="name" placeholder="NAME">
            </div>
            <div class="small-6 column">
              <input type="email" name="email" placeholder="EMAIL">
            </div>
            <div class="small-12 column">
              <textarea name="inquiry" placeholder="INQUIRY" rows="4"></textarea>
            </div>
          </div>
            <input type="submit" class="button float-right" value="SUBMIT">
        </div>
      </div>
    </div>
    <footer>
      <ul class="menu align-center">
        <li><a href="index">HOME</a></li>
        <li><a href="details">DETAILS</a></li>
        <li><a href="pricing">PRICING</a></li>
        <li><a href="gallery">GALLERY</a></li>
        <li><a href="faq">FAQ</a></li>
        <li><a href="contact">CONTACT</a></li> 
      </ul>  
      <p>&copy; Platinum Storage <?php echo date('Y'); ?>. Website developed by <a href="http://www.wirelessiqllc.com">Wireless IQ</a>.</p>
    </footer>
    <script src="bower_components/jquery/dist/jquery.min.js" defer></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDa02SVNgZRANTZLVmHV4HLZ7gzIjJkM3E&callback=initMap" async defer></script>
    <script src="bower_components/what-input/what-input.min.js" defer></script>
    <script src="bower_components/foundation-sites/dist/foundation.min.js" defer></script>
    <script src="js/app.js" defer></script>
    <div class="reveal large" id="floorplan" data-reveal>
      <img src="img/floorplan.png">
      <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  </body>
</html>


























