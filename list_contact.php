
<?php include_once './partials/header.php';?>

<script>
	$(function(){
		$('#exampleModal').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget) 
			var id = button.data('id')
			var name = button.data('name')
			var email = button.data('email')
			var telephone = button.data('telephone')
			var business = button.data('business')
			var modal = $(this)
			modal.find('.modal-title').text('Editar')
			modal.find('#id_edit').val(id)
			modal.find('#name_edit').val(name)
			modal.find('#email_edit').val(email)
			modal.find('#telephone_edit').val(telephone)
			modal.find('#business_edit').val(business)
		});
	});

	$(function(){
		$('#exampleModal2').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget) 
			var id = button.data('id')
			var name = button.data('name')
			var email = button.data('email')
			var telephone = button.data('telephone')
			var business = button.data('business')
			var modal = $(this)
			modal.find('.modal-title').text('Deletar')
			modal.find('#id_delete').val(id)
			modal.find('#name_delete').val(name)
			modal.find('#email_delete').val(email)
			modal.find('#telephone_delete').val(telephone)
			modal.find('#business_delete').val(business)
		});
	});
</script>

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
							
							<?php 
								if(isset($_GET['msg'])){ 
									if($_GET['msg'] == 1){
							?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Dados salvos com sucesso!</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php }else{ ?>
								<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Dados deletados com sucesso!</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
							<?php }
						
								} ?>


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
													$id = $array['id'];
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
												<button type="button" class="btn btn-warning" title="Edita" data-toggle="modal" data-target="#exampleModal" 
													data-id="<?php echo $id ?>"
													data-name="<?= $name ?>"
													data-email="<?= $mail ?>"
													data-telephone="<?= $telephone ?>"
													data-business="<?= $business ?>"
												>
													<i class="fa fa-pencil" aria-hidden="true"></i>
												</button>
												<button type="button" class="btn btn-danger" title="Deleta"><i class="fa fa-trash" aria-hidden="true"
													data-toggle="modal" data-target="#exampleModal2" 
													data-id="<?php echo $id ?>"
													data-name="<?= $name ?>"
													data-email="<?= $mail ?>"
													data-telephone="<?= $telephone ?>"
													data-business="<?= $business ?>"
												></i></button>
												</td>
											</tr>

											<!-- Inicio Modal Editar -->
											<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="exampleModalLabel"></h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<form action="edit_contact.php" method="post">
																<input type="hidden" class="form-control" name="id" id="id_edit">
																<div class="form-group">
																	<label for="recipient-name" class="col-form-label">Nome:</label>
																	<input type="text" class="form-control" name="name" id="name_edit">
																</div>
																<div class="form-group">
																	<label for="recipient-name" class="col-form-label">Email:</label>
																	<input type="text" class="form-control" name="email" id="email_edit">
																</div>
																<div class="form-group">
																	<label for="recipient-name" class="col-form-label">Telefone:</label>
																	<input type="text" class="form-control telefone" name="telephone" id="telephone_edit">
																</div>
																<div class="form-group">
																	<label for="recipient-name" class="col-form-label">Empresa:</label>
																	<input type="text" class="form-control" name="business" id="business_edit">
																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
																	<button type="submit" class="btn btn-primary">Enviar</button>
																</div>
															</form>
														</div>
													</div>
												</div>
											</div>
											<!-- Fim Modal Editar -->

											<!-- Inicio Modal Deletar -->
											<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="exampleModalLabel"></h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<form action="delete_contact.php" method="post">
																<input type="hidden" class="form-control" name="id" id="id_delete">
																<div class="form-group">
																	<label for="recipient-name" class="col-form-label">Nome:</label>
																	<input type="text" class="form-control" name="name" id="name_delete" readonly>
																</div>
																<div class="form-group">
																	<label for="recipient-name" class="col-form-label">Email:</label>
																	<input type="text" class="form-control" name="email" id="email_delete" readonly>
																</div>
																<div class="form-group">
																	<label for="recipient-name" class="col-form-label">Telefone:</label>
																	<input type="text" class="form-control telefone" name="telephone" id="telephone_delete" readonly>
																</div>
																<div class="form-group">
																	<label for="recipient-name" class="col-form-label">Empresa:</label>
																	<input type="text" class="form-control" name="business" id="business_delete" readonly>
																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
																	<button type="submit" class="btn btn-primary">Deletar</button>
																</div>
															</form>
														</div>
													</div>
												</div>
											</div>
											<!-- Fim Modal Deletar -->

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
    
	<script type="text/javascript">
		$('.telefone').mask('(00) 00000-0000');
	</script>

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