
<?php include_once './partials/header.php';?>

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
												<li class="breadcrumb-item active">Cadastro Usuário</li>
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

                <div class="row">
                
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">						
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="fa fa-check-square-o"></i> Formulário de Cadastro</h3>
                        </div>
                            
                        <div class="card-body">
                            <?php if($_GET['msg']){ ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Dados salvos com sucesso!</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php } ?>
                            <form action="_insert.php" method="POST">
                                <div class="form-group">
                                    <label for="name">Nome*</label>
                                    <input type="text" name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu nome" required autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email*</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu email" required autocomplete="off">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label for="phone_number">Telefone*</label>
                                    <input type="text" name="telefone" class="form-control" id="telefone" placeholder="Número" required autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label for="phone_number">Negócio/Empresa</label>
                                    <input type="text" name="empresa" class="form-control" id="exampleInputPassword1" placeholder="Sua negócio/empresa" required autocomplete="off">
                                </div>
                                
                                <button type="submit" class="btn btn-dark">Salvar</button>
                            </form>
                                                            
                        </div>														
                    </div><!-- end card-->					
                </div>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
                <script type="text/javascript">
                    $('#telefone').mask('(00) 00000-0000');
                </script>

            </div>
				 
            </div>
			<!-- END container-fluid -->

		</div>
		<!-- END content -->

    </div>
	<!-- END content-page -->
    
	<?php include './partials/footer.php' ?>