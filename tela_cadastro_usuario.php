<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>Sistema PHP</title>
		<meta name="description" content="Free Bootstrap 4 Admin Theme | Pike Admin">
		<meta name="author" content="Pike Web Development - https://www.pikephp.com">

		<!-- Favicon -->
		<link rel="shortcut icon" href="/Nura-Admin/src/assets/images/favicon.ico">

		<!-- Bootstrap CSS -->
		<link href="/Nura-Admin/src/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		
		<!-- Font Awesome CSS -->
		<link href="/Nura-Admin/src/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		
		<!-- Custom CSS -->
		<link href="/Nura-Admin/src/assets/css/style.css" rel="stylesheet" type="text/css" />
		
		<!-- BEGIN CSS for this page -->
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"/>
		<!-- END CSS for this page -->
		
</head>

<body>

<div class="container mt-5">
    <h3 class="text-center">Cadastre seus dados abaixo: </h3>
    <div class="row justify-content-md-center">
        <div class="col-lg-6 p-5 text-center">
            <img src="./src/img/pidge_icon.jpg" alt="imagem_tela_login" style="border-radius: 150px;">
        </div>
    </div>
    <div class="row justify-content-md-center">

        <div class="col-lg-6 p-5">
            <form action="./cadastrar_usuario.php" method="post">

                <?php if($_GET['msg'] == 1){?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Dados salvos com sucesso!</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php } ?>

                <!-- Email input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email" name="email" class="form-control" />
                    <label class="form-label">Email</label>
                </div>
                
                <!-- Password input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" id="password" name="password" class="form-control" />
                    <label class="form-label" for="form2Example2">Senha</label>
                </div>
                
                <!-- Password input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" id="confirm_password" name="password2" class="form-control" />
                    <label class="form-label">Confirmar Senha</label>
                </div>
                
                <!-- Submit button -->
                <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-5">Salvar</button>

            </form>
            <p>Possui conta? Clique em acessar</p>
            <a class="btn btn-warning btn-block mb-4">Acessar</a>
        </div>
    </div>

</div>
</body>

<script type="text/javascript">
    var password = document.getElementById("password")
    var confirm_password = document.getElementById("confirm_password")

    function validatePassword(){
        if(password.value != confirm_password.value){
            confirm_password.setCustomValidity("Senhas diferentes!")
            console.log("Senhas diferentes!")
        }else{
            confirm_password.setCustomValidity('')
            console.log('passou')
        }
    }

    password.onchange = validatePassword
    confirm_password.onchange = validatePassword

</script>

</html>