<?php
$dblink=new mysqli('localhost', 'master-projekt-db2', 'Xj41t^h3', 'master-projekt-db2');

$lid = $_GET['lid'];
$sql = "select * from TBL_Locations where l_id=$lid";
if ($result = $dblink->query($sql)) {
    $row = $result->fetch_row();
    $nickname = $row[1];
    $plz = $row[2];
    $hnr = $row[3];
    $str = $row[4];
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
          <h2 class="slim-logo"><a href="../index.html">Logo<span>.</span></a></h2>
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
            <a href="../map.html" class="sidebar-nav-link"><i class="icon ion-ios-location-outline"></i> Karte</a>
          </li>
          <li class="sidebar-nav-item">
            <a href="../settings.html" class="sidebar-nav-link"><i class="icon ion-ios-gear-outline"></i> Einstellungen</a>
          </li>
          <li class="sidebar-nav-item">
            <a href="../favoriten.html" class="sidebar-nav-link"><i class="icon ion-ios-lightbulb-outline"></i> Favoriten</a>
          </li>
          <li class="sidebar-nav-item">
            <a href="../support.html" class="sidebar-nav-link"><i class="icon ion-ios-information-outline"></i> Support</a>
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
          <h6 class="slim-pagetitle">Standort von <?php print_r ($nickname) ;?></h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">
          <label class="section-title">Du hast Fragen?</label>
          <p class="mg-b-20 mg-sm-b-40">Hier ist der richtige Ort, dich zu informieren.</p>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>

        </div><!-- section-wrapper -->

        <div class="section-wrapper">
          <label class="section-title">Kontakt</label>
          <p class="mg-b-20 mg-sm-b-40">Stell deine Frage direkt an uns über dieses Formular.</p>

          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Vorname: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="vorname" value="" placeholder="Vornamen eingeben">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Nachname: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="nachname" value="" placeholder="Nachnamen eingeben">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="email" value="" placeholder="Email eingeben">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-12">
                <label class=" form-control-label">Nachricht: <span class="tx-danger">*</span></label>
                  <textarea rows="2" class="form-control" placeholder="Nachricht eingeben"></textarea>
              </div><!-- col-4 -->
            </div><!-- row -->

            <div class="form-layout-footer">
              <button class="btn btn-primary bd-0">Nachricht senden</button>
              <button class="btn btn-secondary bd-0">Abbrechen</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
        </div><!-- section-wrapper -->

    </div>

    <div class="section-wrapper">
      <label class="section-title"><?php print_r ($plz) ;?></label>
      <p class="mg-b-20 mg-sm-b-40">Typische Fragen und Antworten.</p>

      <div id="accordion" class="accordion-one" role="tablist" aria-multiselectable="true">
        <div class="card">
          <div class="card-header" role="tab" id="headingOne">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="tx-gray-800 transition">
              Frage 1
            </a>
          </div><!-- card-header -->

          <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
            <div class="card-body">
              Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" role="tab" id="headingTwo">
            <a class="collapsed tx-gray-800 transition" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Frage 2
            </a>
          </div>
          <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="card-body">
              Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" role="tab" id="headingThree">
            <a class="collapsed tx-gray-800 transition" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Frage 3
            </a>
          </div>
          <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="card-body">
              Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
            </div>
          </div><!-- collapse -->
        </div><!-- card -->
      </div><!-- accordion -->

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

    <script src="../../lib/jquery/js/jquery.js"></script>
    <script src="../../lib/popper.js/js/popper.js"></script>
    <script src="../../lib/bootstrap/js/bootstrap.js"></script>
    <script src="../../lib/jquery.cookie/js/jquery.cookie.js"></script>
    <script src="../../lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>

  </body>
</html>
