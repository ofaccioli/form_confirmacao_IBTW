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
    <body>
        <main class="container">
			<br>
			<img src="img/ibtw.png" alt="ibtw" width=150 height=90>
			<br>
			<br>
			<br>
            <h1>Confirmação de Presença</h1>
            <p>Preencha os campos abaixo para confirmar a sua presença em nosso evento e receber as melhores novidades da IBTW!</p>
            <form class="form-horizontal" action="cadastro.php" method="post" role="form" data-toggle="validator">
                <div class="form-group">
                    <label class="control-label col-sm-3">Nome Completo*:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nome" id="nome" value="" placeholder="Seu nome" required >
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Email*:</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" name="email" id="email" value="" placeholder="exemplo@ibtw.com.br" required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Telefone*:</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" name="telefone" id="telefone" placeholder="(00) 00000-0000" required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
				<div class="form-group">
                    <label class="control-label col-sm-3">Nascimento (Aniversário)*:</label>
                    <div class="col-sm-9">
                        <input align="center" type="date" class="form-control" name="data" id="data" placeholder="00/00/0000" required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12 text-right">
                        <input class = "btn btn-primary" id="submit" name="btnSend" type="submit" value="ENVIAR">
                        <a name="formulario"></a>
                        <div class="mensagem-alerta"><?php echo $msg ?></div>
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
