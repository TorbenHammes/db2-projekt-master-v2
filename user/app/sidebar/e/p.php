<?php
$dblink = new mysqli('localhost', 'master-projekt-db2', 'Xj41t^h3', 'master-projekt-db2');

$pid = $_GET['pid'];
$sql = "select * from TBL_Verkaeufer_Produkt where P_ID=$pid";
if ($result = $dblink->query($sql)) {
    $row = $result->fetch_row();
    $nickname = $row[1];
    $pname = $row[2];
    $preis = $row[3];
    $bild = $row[5];
    $beschr = $row[6];
}
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

    <title>Support | Regio Karte</title>

    <!-- vendor css -->
    <link href="../../lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../../lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="../../lib/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">

    <!-- Slim CSS -->
    <link rel="stylesheet" href="../../css/slim.css">

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
                    <a href="../settings.html" class="nav-link"><i class="icon ion-compose"></i> Einstellungen</a>
                    <a href="../logout.html" class="nav-link"><i class="icon ion-forward"></i> Ausloggen</a>
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
                    <a href="../index.html" class="sidebar-nav-link"><i class="icon ion-ios-home-outline"></i> Dashboard</a>
                <li class="sidebar-nav-item">
                    <a href="../map.html" class="sidebar-nav-link"><i class="icon ion-ios-location-outline"></i>
                        Karte</a>
                </li>
                <li class="sidebar-nav-item">
                    <a href="../settings.html" class="sidebar-nav-link"><i class="icon ion-ios-gear-outline"></i>
                        Einstellungen</a>
                </li>
                <li class="sidebar-nav-item">
                    <a href="../favoriten.html" class="sidebar-nav-link"><i class="icon ion-ios-lightbulb-outline"></i>
                        Favoriten</a>
                </li>
                <li class="sidebar-nav-item">
                    <a href="../support.html" class="sidebar-nav-link"><i class="icon ion-ios-information-outline"></i>
                        Support</a>
                </li>
            </ul>
        </div><!-- slim-sidebar -->

        <!--Haupt Content-->

        <div class="slim-mainpanel">
            <div class="container">
                <div class="slim-pageheader">
                    <ol class="breadcrumb slim-breadcrumb">
                        <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Support</li>
                    </ol>
                    <h6 class="slim-pagetitle">Produktansicht</h6>
                </div><!-- slim-pageheader -->

            </div>
            <div>
                <div class="section-wrapper">
                    <label class="section-title"><?php print_r($pname); ?></label>
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <img src="../img/img0.jpg" class="img-fluid" alt="">
                        </div><!-- col -->
                        <div class="col-sm-6 col-md-3 mg-t-20 mg-sm-t-0">
                            <p class="mg-b-20 mg-sm-b-40">A rounded, circle or thumbnail image.</p>
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- section-wrapper -->
            </div>


        <!--END Haupt Content-->

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
