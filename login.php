<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">


     <head>
     
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Login - Aluno Online</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="icon" type="image/png" href="imagens/favicon.png">

<style>
    body {
        background-image: url("imagens/fundo.jpeg");
        background-repeat: repeat;
        background-size: cover;
    }


    .cadastroin{
        border-radius: 30px;
        border: none;
        width: 400px;
        height: 40px;
        text-align: center;
		outline-color: green;
		
      
    }


    .envio{
        width: 400px;
        height: 40px;
        text-align: center;
        border-radius: 30px;
        border: none;
        background-color: #e65f30;
        color: white;
        transition: 0.2s;
    }


    .envio:hover{
        background-color:#fecb2d;
        color: black;
        }
   


    .cancel{
		width: 400px;
        height: 40px;
        text-align: center;
        border-radius: 30px;
        border: none;
        background-color: #6c757e;
        color: white;
        transition: 0.2s
    }


    .cancel:hover{
        background-color: #5c636b;
    }


    .cadastro{position: absolute;
        left:50%;
        transform: translate(-50%);
        top: 50%;
}
    .logo{position:absolute;
        left:50%;
        transform: translate(-50%);
        top: 30px;
        height: 40%;
    }
    .raspn{
        color: white;
    }
    
    
    .radios{
        text-align: center;
    }
	
	.olho{
		position: absolute;
		right: 10px;
		top:94px;
		cursor: pointer;
		height: 15px;
		width: 26px;
		}
		
</style>

<script>
function mostrar_olho() {
  var inputsenha = document.getElementById('senha');
  var troca = document.getElementById('olho');
  
  if (inputsenha.type === 'password') {
    inputsenha.type = 'text';
    troca.src = 'imagens/olho_f.png';
  } else {
    inputsenha.type = 'password';
    troca.src = 'imagens/olho_a.png';
  }
}
</script>
<script>
    function professor(){
        window.location = "login_p.php";
    }
</script>


      </head>

<body>
    
	<img src="imagens/logo_aluno.png" class="logo">
	<div class="cadastro">
    <div class="radios"><input type="radio" id="aluno" name="2radio" class="aluno" value="Aluno" checked> 
        <label for="aluno" class="raspn">Aluno</label>

        <input type="radio" onclick="professor()" class="professor" id="professor" name="radio"  value="professor"> 
        <label for="professor" class="raspn">Professor</label></div>
	
  	<form method="POST" action="valida_login.php">
           
                
               <div><input type="text" name="email" class="cadastroin" placeholder="Email" required></div> 
                <p>
				
				<div>
                <div><input type="password" id="senha" name="senha" class="cadastroin" placeholder="Senha" required></div>
				<img src="imagens/olho_a.png" id="olho" onclick="mostrar_olho()" class="olho">
				</div>

                <p>			
                    <div class="botoes">
                       <div><button type="submit" class="envio">Entrar</button></div> 
                        <p>
                       <div><button type="reset" class="cancel">Cancelar</button></div>
                    </div>     
	
	
							<?php
								if($_GET){
								//var_dump($_GET);
								$login = $_GET['login'];
								if($login == 'false'){
								echo '<div class="alert alert-danger" role="alert">
									Usuário ou senha inválidos.
								</div>';
							
								}else{
									
								};
								}else{
								
								};
								if(isset($_SESSION['erro'])){
									echo $_SESSION['erro'];
									
									session_destroy();
									
									echo
									'<script>
									setInterval(refresh, 2000)
									
									function Refresh() {
										window.location = "login.php";
									}
									</script>';
								}else{
									session_destroy();
								}
								?>
								
	
					
       	</div>
	</form>				
			

<!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	
	<!-- jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>

</html>