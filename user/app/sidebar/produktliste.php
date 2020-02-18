<?php
//Step1
$db = mysqli_connect('localhost', 'master-projekt-db2', 'Xj41t^h3', 'master-projekt-db2')
or die('Error connecting to MySQL server.');
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Regio Karte">
    <meta name="author" content="TorbenHammes">

    <title>Regio Karte</title>

    <!-- vendor css -->
    <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="../lib/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">

    <!-- Slim CSS -->
    <link rel="stylesheet" href="../css/slim.css">

</head>
<body>

<div class="slim-header with-sidebar">
    <div class="container-fluid">
        <div class="slim-header-left">
            <h2 class="slim-logo"><a href="index.html">Logo<span>.</span></a></h2>
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
                <a href="index.html" class="sidebar-nav-link"><i class="icon ion-ios-home-outline"></i> Dashboard</a>
            <li class="sidebar-nav-item">
                <a href="map.html" class="sidebar-nav-link"><i class="icon ion-ios-location-outline"></i> Karte</a>
            </li>
            <li class="sidebar-nav-item">
                <a href="settings.html" class="sidebar-nav-link"><i class="icon ion-ios-gear-outline"></i> Einstellungen</a>
            </li>
            <li class="sidebar-nav-item">
                <a href="favoriten.html" class="sidebar-nav-link"><i class="icon ion-ios-lightbulb-outline"></i>
                    Favoriten</a>
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
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                </ol>
                <h6 class="slim-pagetitle">Produktliste</h6>
            </div><!-- slim-pageheader -->

        </div><!-- container -->

        <div class="section-wrapper mg-t-20">
            <label class="section-title">Produkte</label>
            <p class="mg-b-20 mg-sm-b-40">All die Produkte deiner Region.</p>

            <div class="row">
                <div class="col-lg-12">
                    <div class="list-group list-group-user">
                        <?php
                        $count = "SELECT COUNT * FROM TBL_Ort";
                        mysqli_query($db, $count) or die('Error querying database.');

                        $result_count = mysqli_query($db, $count);

                        while (i < $result_count) {

                            $prod = mysqli_query($db, "SELECT Ort FROM TBL_Ort WHERE (ROW_NUMBER() OVER (ORDER BY Ort)) = i");
                            $plz = mysqli_query($db, "SELECT PLZ FROM TBL_Ort");

                      echo "<div class="list-group - item">";
                      echo "<img src="http://via.placeholder.com/500x500" alt="">";?>


                      <div class="user-name-address">
                      <p><?=$prod?></p>
                      <span><?=$plz?></span>
                      </div>
                      <div class="user - btn - wrapper">
                          <a href="#" class="btn btn-outline-light btn-icon">
                      <div class="tx - 20"><i class="icon ion - android - more - vertical"></i></div>
                      </a>
                       </div>
                       </div><!-- list-group-item -->

                        <div class="list-group-item">
                            <img src="http://via.placeholder.com/500x500" alt="">
                            <div class="user-name-address">
                                <p>Produkt 1</p>
                                <span>Standort</span>
                            </div>
                            <div class="user-btn-wrapper">
                                <a href="#" class="btn btn-outline-light btn-icon">
                                    <div class="tx-20"><i class="icon ion-android-more-vertical"></i></div>
                                </a>
                            </div>
                        </div><!-- list-group-item -->
                        <div class="list-group-item">
                            <img src="http://via.placeholder.com/500x500" alt="">
                            <div class="user-name-address">
                                <p>Produkt 2</p>
                                <span>Standort</span>
                            </div>
                            <div class="user-btn-wrapper">
                                <a href="#" class="btn btn-outline-light btn-icon">
                                    <div class="tx-20"><i class="icon ion-android-more-vertical"></i></div>
                                </a>
                            </div>
                        </div><!-- list-group-item -->
                        <div class="list-group-item">
                            <img src="http://via.placeholder.com/500x500" alt="">
                            <div class="user-name-address">
                                <p>Produkt 3</p>
                                <span>Standort</span>
                            </div>
                            <div class="user-btn-wrapper">
                                <a href="#" class="btn btn-outline-light btn-icon">
                                    <div class="tx-20"><i class="icon ion-android-chat"></i></div>
                                </a>
                                <a href="#" class="btn btn-outline-light btn-icon">
                                    <div class="tx-20"><i class="icon ion-android-remove"></i></div>
                                </a>
                                <a href="#" class="btn btn-outline-light btn-icon">
                                    <div class="tx-20"><i class="icon ion-android-more-vertical"></i></div>
                                </a>
                            </div>
                        </div><!-- list-group-item -->
                        <div class="list-group-item">
                            <img src="http://via.placeholder.com/500x500" alt="">
                            <div class="user-name-address">
                                <p>Produkt 4</p>
                                <span>Standort</span>
                            </div>
                            <div class="user-btn-wrapper">
                                <a href="#" class="btn btn-outline-light btn-icon">
                                    <div class="tx-20"><i class="icon ion-android-chat"></i></div>
                                </a>
                                <a href="#" class="btn btn-outline-light btn-icon">
                                    <div class="tx-20"><i class="icon ion-android-remove"></i></div>
                                </a>
                                <a href="#" class="btn btn-outline-light btn-icon">
                                    <div class="tx-20"><i class="icon ion-android-more-vertical"></i></div>
                                </a>
                            </div>
                        </div><!-- list-group-item -->
                        <div class="list-group-item">
                            <img src="http://via.placeholder.com/500x500" alt="">
                            <div class="user-name-address">
                                <p>Deborah Miner</p>
                                <span>San Francisco, CA</span>
                            </div>
                            <div class="user-btn-wrapper">
                                <a href="#" class="btn btn-outline-light btn-icon">
                                    <div class="tx-20"><i class="icon ion-android-chat"></i></div>
                                </a>
                                <a href="#" class="btn btn-outline-light btn-icon">
                                    <div class="tx-20"><i class="icon ion-android-remove"></i></div>
                                </a>
                                <a href="#" class="btn btn-outline-light btn-icon">
                                    <div class="tx-20"><i class="icon ion-android-more-vertical"></i></div>
                                </a>
                            </div>
                        </div><!-- list-group-item -->
                    </div><!-- list-group -->
                </div><!-- col-6 -->
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
