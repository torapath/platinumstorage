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
        <section class="top-bar-section">
          <div class="right">
            Phone: <a href="tel:2254854149">225.485.4149</a>&nbsp;&nbsp;|&nbsp;&nbsp;Email: <a href="mailto:info@platinumstoragecondos.com">info@platinumstoragecondos.com</a>
          </div>
          <ul class="menu right">
            <li><a href="index">HOME</a></li>
            <li><a href="details">DETAILS</a></li>
            <li><a href="pricing">PRICING</a></li>
            <li><a href="gallery">GALLERY</a></li>
            <li><a href="faq">FAQ</a></li>
            <li class="active"><a href="contact">CONTACT</a></li>
          </ul>
        </section>
      </nav>
    <div id="contact_banner"></div>
    <div class="container">
    <div class="row">
      <div class="small-12 columns">
        <h2>CONTACT US</h2>
        <p>For any further information or inquiries about pricing, we would be glad to answer and questions. Please send us an email in the form below or give us a call today.</p>
      </div>
    </div>
    <div class="row">
      <div class="small-4 columns">
        <p><span class="contactMethod">ADDRESS: </span>25109 Wax Rd. Denham Springs, LA 70726</p>
      </div>
      <div class="columns">
      <p><span class="contactMethod">PHONE: </span><a href="tel:2254854149">225.485.4149</a></p>
      </div>
      <div class="columns">
        <p><span class="contactMethod">EMAIL: </span><a href="mailto:info@platinumstoragecondos.com">info@platinumstoragecondos.com</a></p>
      </div>
    </div>
    <div class="row">
      <div class="small-12 medium-6 columns">
        <form class="contactForm">
          <input type="text" name="fullName" placeholder="NAME">
          <input type="email" name="email" placeholder="EMAIL">
          <input type="tel" name="phone" placeholder="PHONE">
          <input type="text" name="referredBy" placeholder="HOW DID YOU HEAR ABOUT US?">
          <textarea name="inquiry" rows="3" placeholder="INQUIRY"></textarea>
          <input class="button" type="submit" name="submit" value="SUBMIT">
        </form>
      </div>
      <div class="small-12 medium-6 columns">
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
            var platinum = '<center><h4>Platinum Storage</h4><p>25109 Wax Rd.<br />Denham Springs, LA 70726</p></center>';
            var myLatLng1 = {lat: 30.432503, lng: -90.933926};
            var mapDiv = document.getElementById('map');
            var styledMap = new google.maps.StyledMapType(stylesArray,
              {name: "Styled Map"});
            var mapOptions = {
              center: {lat: 30.432503, lng: -90.933926},
              scrollwheel: false,
              zoom: 15,
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
    </div>
    <script src="bower_components/jquery/dist/jquery.min.js" defer></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDa02SVNgZRANTZLVmHV4HLZ7gzIjJkM3E&callback=initMap" async defer></script>
    <script src="bower_components/what-input/what-input.min.js" defer></script>
    <script src="bower_components/foundation-sites/dist/foundation.min.js" defer></script>
    <script src="js/app.js" defer></script>
  </body>
</html>