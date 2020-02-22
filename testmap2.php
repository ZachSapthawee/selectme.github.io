
<!DOCTYPE html>
<html>
    <head>
        <title>Simple Map</title>
        <meta name="viewport" content="initial-scale=1.0">
        <meta charset="utf-8">
        <style>
        /* Always set the map height explicitly to define the size of the div
        * element that contains the map. */
        #map {
            height: 100%;
        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        </style>
    </head>
    <body>
    <section>
        <h2>ติดตามการจัดส่งสินค้า</h2>
        <h3>ทำให้การส่งสินค้า สะดวกและง่ายมากขึ้น</h3>
        <div class="container">
            <div class="row">

                <div class="col align-self-center">
                    <div id="map"></div>

                </div>

            </div>
        </div>
    </section>
        
        <script>
        var map;
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: -34.397, lng: 150.644},
            zoom: 8
            });
        }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAa_CaAMgAL1Bns5vPeP9kZjQu2dBpJkUA&callback=initMap"
        async defer></script>
    </body>
</html>