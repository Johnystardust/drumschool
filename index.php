<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>The Drumschool</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="includes/css/stylesheet.css"/>
    <link rel="stylesheet" type="text/css" href="includes/css/flip.css"/>

    <!-- Fontello -->
    <link rel="stylesheet" type="text/css" href="includes/fontello/css/fontello-embedded.css"/>

    <!-- JS -->
    <script src="includes/jquery/jquery.1.11.1.min.js"></script>
    <script type="text/javascript" src="includes/js/javascript.js"></script>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="includes/bootstrap/css/bootstrap.min.css"/>
    <script src="includes/bootstrap/js/bootstrap.js"></script>

    <!-- Flexslider -->
    <link rel="stylesheet" href="includes/FlexSlider/flexslider.css"/>
    <script src="includes/FlexSlider/jquery.flexslider.js"></script>

    <!-- Maps -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>

</head>

<body>
    <?php

    // NAV BAR CONTAINER
    include_once 'partials/nav.php';

    // INTRO CONTAINER
    include_once 'partials/intro.php';

    // LESSONS CONTAINER
    include_once 'partials/lessons.php';

    // INFO CONTAINER
    include_once 'partials/info.php';

    // HOLIDAY CONTAINER
    include_once 'partials/holiday.php';

    // MEDIA CONTAINER
//    include_once 'partials/media.php';

    // CONTACT CONTAINER
    include_once 'partials/contact.php';

    // FOOTER CONTAINER
    include_once 'partials/footer.php';

    ?>



    <script>
        function initialize() {
            var mapCanvas = document.getElementById('map-canvas');
            var mapOptions = {
                center: new google.maps.LatLng(52.313192, 5.3803113,11),
                zoom: 11,
                scrollwheel: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(mapCanvas, mapOptions);

            var markers = [
                ['Drumschool Zeewolde', 52.3373642, 5.5247885,17],
                ['O.B.S. de Kamperfoelieschool', 52.2999564, 5.2645717,17]
            ];

            var infowindow = new google.maps.InfoWindow(), marker, i;
            for (i = 0; i < markers.length; i++) {
                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(markers[i][1], markers[i][2]),
                    map: map
                });
                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        infowindow.setContent(markers[i][0]);
                        infowindow.open(map, marker);
                    }
                })(marker, i));
            }

        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <style type="text/css">
        #map-canvas {
            height: 512px;
        }
    </style>
</body>
</html>