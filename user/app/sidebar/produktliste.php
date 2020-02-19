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
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
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
                        $sql="select * from TBL_Verkaeufer_Produkt";
                        if ($result= $dbconnect->query($sql)) {
                            while ($row=$result->fetch_row()) {
                                print "<div class=\"list-group-item\">
                                <img src=\"http://via.placeholder.com/500x500\" alt=\"\">
                                <div class=\"user-name-address\">
                                <p> $row[2] </p>
                                <span> $row[4] </span>
                                </div>
                                <div class=\"user-btn-wrapper\">
                                <a href=\"./e/p.php?pid=$row[0]\" class=\"btn btn-outline-light btn-icon\">
                                <div class=\"tx-20\"><i class=\"icon ion-android-more-vertical\"></i></div>
                                </a>
                                </div>
                                </div>";
                            }

                        } else {print "SQL scheint falsch zu sein";}
                        ?>

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


            <?php
            include footer();
            print footer();
            ?>
