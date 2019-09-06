<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelanggan Dashboad</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/main-style.css" rel="stylesheet" />



</head>

<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                                <img src="assets/img/user.jpg" alt="">
                            </div>
                            <div class="user-info">
                                <div></div>
                                <div class="user-text-online">
									<h5></h5>
									<h5></h5>
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
							
                        </div>
                        <!--end user image section-->
                    </li>
                    
                    <li>
                        <a href="index.php?page=home"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>

                    <?php
                    if($_SESSION["hakakses"]=="pelanggan")
                    {
                    ?>
                    <li>
                        <a href="index.php?page=datamaintenance">
                            <i class="fa fa-list"> </i> Lihat Tagihan
                    </a>
                    </li>
                    <?php
                        }
                    ?>

                    <?php
                    if($_SESSION["hakakses"]=="pelanggan")
                    {
                    ?>
                    <li>
                        <a href="index.php?page=datapembayaran">
                            <i class="fa fa-list"> </i> Data Pembayaran
                    </a>
                    </li>
                    <?php
                        }
                    ?>
                </ul>
            </div>
        </nav>
          

   
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>

</body>

</html>
