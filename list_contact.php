
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
												<li class="breadcrumb-item active">Lista de Contatos</li>
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
                
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-12 col-xl-12">						
                    <div class="card mb-3">
                            
                        <div class="card-body">

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">						
							<div class="card mb-3">
								<div class="card-header">
									<h3><i class="fa fa-table"></i>Lista de Contatos</h3>
								</div>
									
								<div class="card-body">
									<div class="table-responsive">
									<table id="example" class="table table-bordered table-hover display">
										<thead>
											<tr>
												<th>Nome</th>
												<th>Email</th>
												<th width="10%">Telefone</th>
												<th>Empresa</th>
												<th width="10%">Ações</th>
											</tr>
										</thead>										
										<tbody>
											<?php
												include "./conexao_db/db.php";

												$sql = "SELECT * FROM agenda";
												$listDatas = mysqli_query($conexao,$sql);
												
												while($array = mysqli_fetch_array($listDatas)){
													$name = $array['name'];
													$mail = $array['mail'];
													$telephone = $array['telephone'];
													$business = $array['business'];											
												
											?>
											<tr>
												<td><?= $name ?></td>
												<td><?= $mail ?></td>
												<td><?= $telephone ?></td>
												<td><?= $business ?></td>
												<td class="text-center">
												<button type="button" class="btn btn-warning" title="Edita"><i class="fa fa-pencil" aria-hidden="true"></i></button>
												<button type="button" class="btn btn-danger" title="Deleta"><i class="fa fa-trash" aria-hidden="true"></i></button>
												</td>
											</tr>
											<?php } ?>
										</tbody>
									</table>
									</div>
									
								</div>														
							</div><!-- end card-->					
						</div>
                                                            
                        </div>														
                    </div><!-- end card-->					
                </div>

            </div>
				 
            </div>
			<!-- END container-fluid -->

		</div>
		<!-- END content -->

    </div>
	<!-- END content-page -->
    
	<?php include './partials/footer.php' ?>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#example').DataTable({
				"language": {
					"url": "//cdn.datatables.net/plug-ins/1.10.22/i18n/Portuguese-Brasil.json"
				}
			});
		});
	</script>