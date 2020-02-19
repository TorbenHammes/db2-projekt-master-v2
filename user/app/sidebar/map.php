<!DOCTYPE html>
<html lang="de">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Regio Karte">
    <meta name="author" content="TorbenHammes">

    <title>Standorte | Regio Karte</title>

    <!-- vendor css -->
    <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="../lib/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">

    <!-- Slim CSS -->
    <link rel="stylesheet" href="../css/slim.css">

    <!-- Leaflet JS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
          integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
          crossorigin=""/>

    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
            integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
            crossorigin=""></script>

    <!-- Mapbox CDN -->
    <script src='https://api.mapbox.com/mapbox-gl-js/v1.7.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.7.0/mapbox-gl.css' rel='stylesheet'/>


</head>
<body>

<div class="slim-header with-sidebar">
    <div class="container-fluid">
        <div class="slim-header-left">
            <h2 class="slim-logo"><a href="index.php">Logo<span>.</span></a></h2>
            <a href="" id="slimSidebarMenu" class="slim-sidebar-menu"><span></span></a>
            <div class="search-box">
                <input type="text" class="form-control" placeholder="Suche">
                <button class="btn btn-primary"><i class="fa fa-search"></i></button>
            </div><!-- search-box -->
        </div><!-- slim-header-left -->

        <div class="dropdown dropdown-c">
            <a href="#" class="logged-user" data-toggle="dropdown">
                <img src="http://via.placeholder.com/500x500" alt="">
                <span>Torben</span>
                <i class="fa fa-angle-down"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <nav class="nav">
                    <a href="settings.html" class="nav-link"><i class="icon ion-compose"></i> Einstellungen</a>
                    <a href="logout.html" class="nav-link"><i class="icon ion-forward"></i> Ausloggen</a>
                </nav>
            </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
    </div><!-- header-right -->
</div><!-- slim-header -->

<div class="slim-body">
    <div class="slim-sidebar">
        <label class="sidebar-label">Navigation</label>

        <ul class="nav nav-sidebar">
            <li class="sidebar-nav-item">
                <a href="index.php" class="sidebar-nav-link"><i class="icon ion-ios-home-outline"></i> Dashboard</a>
            <li class="sidebar-nav-item">
                <a href="map.php" class="sidebar-nav-link"><i class="icon ion-ios-location-outline"></i> Karte</a>
            </li>
            <li class="sidebar-nav-item">
                <a href="produktliste.php" class="sidebar-nav-link"><i class="icon ion-ios-gear-outline"></i> Produkte</a>
            </li>
            <li class="sidebar-nav-item">
                <a href="settings.php" class="sidebar-nav-link"><i class="icon ion-ios-gear-outline"></i> Einstellungen</a>
            </li>
            <li class="sidebar-nav-item">
                <a href="favoriten.html" class="sidebar-nav-link"><i class="icon ion-ios-lightbulb-outline"></i> Favoriten</a>
            </li>
            <li class="sidebar-nav-item">
                <a href="support.html" class="sidebar-nav-link"><i class="icon ion-ios-information-outline"></i> Support</a>
            </li>
        </ul>
    </div><!-- slim-sidebar -->

    <div class="slim-mainpanel">
    <div class="container">
        <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            </ol>
            <h6 class="slim-pagetitle">Standorte</h6>
        </div><!-- slim-pageheader -->

    </div><!-- container -->

    <div class="section-wrapper mg-t-20">
        <label class="section-title">Karte</label>
        <p class="mg-b-20 mg-sm-b-40">Auf der Karte siehst du alle Standorte.</p>
        <div class="row">
            <div class="col">
                <div id="leaflet-<?php print_r($lid); ?>" style="height=200px;"
                     class="ht-250 ht-sm-300 ht-md-400 bd bg-gray-100"></div>
                <script>
                    var x = '<?php print_r($x); ?>';
                    var y = '<?php print_r($y); ?>';
                    var lid = '<?php print_r($lid); ?>'

                    var mymap = L.map('leaflet-', lid).setView([52.408, 12.779], 10);
                    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
                        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                        maxZoom: 18,
                        id: 'mapbox/streets-v11',
                        tileSize: 512,
                        zoomOffset: -1,
                        accessToken: 'pk.eyJ1IjoiaGFtbWVzbWVkaWEiLCJhIjoiY2s2c2dwYWc4MGZlZjNubnZreTB5d3F3ZiJ9.ipG2uTSEaTRPNovKrJYRmQ'
                    }).addTo(mymap);

                    var marker = L.marker([x, y]).addTo(mymap);

                </script>
            </div>
        </div>
    </div><!-- section-wrapper -->
    <div class="section-wrapper mg-t-20">
        <label class="section-title">Standortliste</label>
        <p class="mg-b-20 mg-sm-b-40">Hier sind alle Standorte in der Nähe.</p>

        <div class="row">
            <div class="col-lg-12">
                <div class="list-group list-group-user">
                    <?php

                    $dblink = new mysqli('localhost', 'master-projekt-db2', 'Xj41t^h3', 'master-projekt-db2');

                    $sql = "select * from TBL_Locations";
                    if ($result = $dblink->query($sql)) {
                        while ($row = $result->fetch_row()) {
                            print "<div class=\"list-group-item\">
                                <img src=\"http://via.placeholder.com/500x500\" alt=\"\">
                                <div class=\"user-name-address\">
                                <p>Standort von $row[1] </p>
                                <span> $row[4] $row[3], Postleitzahl $row[2] </span>
                                </div>
                                <div class=\"user-btn-wrapper\">
                                <a href=\"./e/l.php?lid=$row[0]\" class=\"btn btn-outline-light btn-icon\">
                                <div class=\"tx-20\"><i class=\"icon ion-android-more-vertical\"></i></div>
                                </a>
                                </div>
                                </div>";
                        }

                    } else {
                        print "SQL scheint falsch zu sein";
                    }

                    ?>
                </div><!-- list-group -->
            </div><!-- col-6 -->
        </div><!--row-->
    </div><!-- section-wrapper -->

    <div class="slim-footer mg-t-0">
        <div class="container-fluid">
            <p>Copyright 2020 &copy; Regio Projekt DB2</p>
            <p>GitHub <a href="https://github.com/TorbenHammes/">Torben Hammes</a></p>
        </div><!-- container-fluid -->
    </div><!-- slim-footer -->
</div><!-- slim-mainpanel -->
</div><!-- slim-body -->

<script src="../lib/jquery/js/jquery.js"></script>
<script src="../lib/popper.js/js/popper.js"></script>
<script src="../lib/bootstrap/js/bootstrap.js"></script>
<script src="../lib/jquery.cookie/js/jquery.cookie.js"></script>
<script src="../lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>

</body>
</html>
