<?php

include("config/banco.php");

?>


<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="IBTW - In Between"/>
        <meta name="keywords" content="formulario php, bootstrap, bootstrap validator"/>
        <meta name="author" content="Otavio Faccioli"/>

        <title>IBTW | Confirmação de Presença</title>

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" />
        <style>
            main, footer, .mensagem-alerta{
                text-align: center; 
            }
            form{
                max-width: 800px;
                padding-top: 30px;
                display: block;
                margin: 0 auto;
            }
            .mensagem-alerta{
                max-width: 500px;
                margin: 20px auto;
            }
        </style>

    </head>
	
	<?php
		 $nome = $_POST['nome'];
		 $telefone = $_POST['telefone'];
		 $email = $_POST['email'];
		 $data = $_POST['data'];

try{
		 
			 
			 $sql_val = "select * from cadastro where email = '".$email."'";
			 
			 $query_val = mysqli_query($conexao, $sql_val);
			 
			 $busca = mysqli_num_rows($query_val);
			 
			 if($busca != 0){
			 	
				echo "<h1>Este email já está cadastrado, <a href='index.php'>tente novamente...</a></h1>";
				
			 }else{
			 
			
			 
			 
			 		$sql = "insert into cadastro values (null, '$nome', '$telefone', '$email','$data')";
					
		 			$query = mysqli_query($conexao, $sql);
			
				
			
	?>
	
    <body>
        <main class="container">
		    <br>
		    <img src="img/ibtw.png" alt="ibtw" width=150 height=90>
			<br>
			<br>
			<br>
            <h1>Confirmação efetuada com Sucesso!</h1>
            <p>Esperamos ansiosamente por você na próxima terça-feira!</p>
            <br>
                        <a href="https://ibtw.com.br" class="btn btn-primary">Ir para IBTW</a>
                    </div>
                </div>
            </form>
        </main>
        <footer>
            <hr>
            <div class="copyright">Desenvolvido com ❤ por
                <a href="https://ibtw.com.br" target="_blank">ofaccioli</a>
            </div>  
        </footer>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>

    </body>
</html>


   
    
    <div id="conteudo">

</div>
       
        <?php		
		
			 }
			
		 }catch(Exception $erro){
			 echo "Erro: ".$erro;
		 }
		
		
	?>
       
    </div>
    
	</body>
</html>