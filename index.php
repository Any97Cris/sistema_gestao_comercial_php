<?php include './partials/header.php';?>

<body class="adminbody">

<div id="main">

	<!-- top bar navigation -->
	<?php include './partials/topbar.php' ?>
	<!-- End Navigation -->
	
 
	<!-- Start Sidebar -->
	<?php include './partials/menu.php' ?>
	<!-- End Sidebar -->


    <div class="content-page">
	
		<!-- Start content -->
        <div class="content">
            
			<div class="container-fluid">
					
				<div class="row">
							<div class="col-xl-12">
									<div class="breadcrumb-holder">
											<h1 class="main-title float-left">Dashboard</h1>
											<ol class="breadcrumb float-right">
												<li class="breadcrumb-item">Home</li>
												<li class="breadcrumb-item active">Dashboard</li>
											</ol>
											<div class="clearfix"></div>
									</div>
							</div>
				</div>
				<!-- end row -->

				<div class="row">
						<div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card-box noradius noborder bg-default">
										<i class="fa fa-file-text-o float-right text-white"></i>
										<h6 class="text-white text-uppercase m-b-20">Orders</h6>
										<h1 class="m-b-20 text-white counter">1,587</h1>
										<span class="text-white">15 New Orders</span>
								</div>
						</div>

						<div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card-box noradius noborder bg-warning">
										<i class="fa fa-bar-chart float-right text-white"></i>
										<h6 class="text-white text-uppercase m-b-20">Visitors</h6>
										<h1 class="m-b-20 text-white counter">250</h1>
										<span class="text-white">Bounce rate: 25%</span>
								</div>
						</div>

						<div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card-box noradius noborder bg-info">
										<i class="fa fa-user-o float-right text-white"></i>
										<h6 class="text-white text-uppercase m-b-20">Users</h6>
										<h1 class="m-b-20 text-white counter">120</h1>
										<span class="text-white">25 New Users</span>
								</div>
						</div>

						<div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card-box noradius noborder bg-danger">
										<i class="fa fa-bell-o float-right text-white"></i>
										<h6 class="text-white text-uppercase m-b-20">Alerts</h6>
										<h1 class="m-b-20 text-white counter">58</h1>
										<span class="text-white">5 New Alerts</span>
								</div>
						</div>
				</div>
				<!-- end row -->
				 
            </div>
			<!-- END container-fluid -->

		</div>
		<!-- END content -->

    </div>
	<!-- END content-page -->
    
	<?php include './partials/footer.php' ?>