<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Sertifikasi</title>
  <link rel="stylesheet" href="./assets/vendors/bootsrap-4.6/css/bootstrap.min.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin="" />
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">
        Lembaga Sertifikasi Online
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Beranda <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="visi.php">Visi & Misi</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="sertifikasi.php">Sertifikasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="media.php">Media</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="informasi.php">Informasi</a>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="sidebar-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">
                <span data-feather="home"></span>
                SKEMA SERTIFIKASI<span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file"></span>
                TEMPAT UJI KOMPETENSI
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="shopping-cart"></span>
                JADWAL ASSESMEN
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <main role="main" class="col-md-12 ml-sm-auto col-lg-10 px-md-1">
        <div id="mapid" style="width: 1500px; height: 500px;"></div>
        <script>
          var mymap = L.map('mapid').setView([-3.7537144304152354, 114.76662764172367], 13);
          L.tileLayer(
            'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
              maxZoom: 18,
              attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
              id: 'mapbox/streets-v11',
              tileSize: 512,
              zoomOffset: -1
            }).addTo(mymap);
          L.marker([-3.753772646152938, 114.76659211012594]).addTo(mymap)
            .bindPopup("<b>Kampus</b><br />Politeknik Negeri Tanah Laut").openPopup();
          var popup = L.popup();

          function onMapClick(e) {
            popup
              .setLatLng(e.latlng)
              .setContent("You clicked the map at " + e.latlng.toString())
              .openOn(mymap);
          }
          mymap.on('click', onMapClick);
        </script>
      </main>
    </div>
</body>

</html>