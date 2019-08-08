<h2 class="judul-section side biru">PETA LOKASI P3A</h2>






<div id="map" style="height: 600px; width: 100%;"></div>

    <script>
    var iconBase = 'http://sda.pu.go.id/bwssulawesi4/assets/images/logo/';
        var icons = {
          success: {
            icon: iconBase + 'map-marker-success.png'
          },
          failed: {
            icon: iconBase + 'map-marker-failed.png'
          }
        };

      var customLabel = {
        restaurant: {
          label: 'R'
        },
        bar: {
          label: 'B'
        }
      };

        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(-3.770761, 122.002501),
          zoom: 9
        });
        var infoWindow = new google.maps.InfoWindow;

          // Change this depending on the name of your PHP or XML file
          downloadUrl('http://sda.pu.go.id/bwssulawesi4/index.php/p3a/peta_lokasi_xml', function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            var i=1;
            Array.prototype.forEach.call(markers, function(markerElem) {
              console.log(i);
              var name = "P3A "+markerElem.getAttribute('name');
              var status = markerElem.getAttribute('status_bantuan');
              var desa = markerElem.getAttribute('desa');
              var kab = markerElem.getAttribute('kab');
              var kec = markerElem.getAttribute('kec');
              var ikonnya = icons['failed'];
              var warna = "red";
              if (status=="Sudah") {
                  ikonnya = icons['success'];
                  warna = "green";
              };
              // var address = markerElem.getAttribute('address');
              // var type = markerElem.getAttribute('type');
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              var strong2 = document.createElement('strong');

              strong.style.fontSize = "14px";
              strong.textContent = name
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = "Desa : "+desa
              infowincontent.appendChild(text);
              infowincontent.appendChild(document.createElement('br'));
              var text1 = document.createElement('text');
              text1.textContent = "Kecamatan : "+kec
              infowincontent.appendChild(text1);
              infowincontent.appendChild(document.createElement('br'));
              var text2 = document.createElement('text');
              text2.textContent = "Kabupaten : "+kab
              infowincontent.appendChild(text2);
              infowincontent.appendChild(document.createElement('br'));
              infowincontent.appendChild(document.createElement('br'));
              var text3 = document.createElement('text');
              strong2.style.color = warna;
              strong2.textContent = "Status Bantuan : " + status
              // text3.textContent = "Status Bantuan : "
              // infowincontent.appendChild(text3);
              infowincontent.appendChild(strong2);
              // var icon = customLabel[type] || {};
              var marker = new google.maps.Marker({
                map: map,
                icon: ikonnya.icon,
                // label : i.toString(),
                position: point
              });

              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
              i=i+1;
            });
          });
        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBeLvOgqyxLriRgDBSQmBwY5a-UaWIVQbQ&callback=initMap">
    </script>