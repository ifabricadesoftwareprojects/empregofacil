<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/ico/favicon.ico">

    <title>EMPREGO FÁCIL</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet">


    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <script src="<?php echo base_url() ?>assets/js/modernizr.js"></script>
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url() ?>">EMPREGO FÁCIL</a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#" data-toggle="modal" data-target="#modalEntrar">ENTRAR</a></li>
            <li><a href="#" data-toggle="modal" data-target="#modalCadastrar">CADASTRAR-SE</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

	<!-- *****************************************************************************************************************
	 HEADERWRAP
	 ***************************************************************************************************************** -->
            <div id="headerwrap" style="background-image: url('<?php echo base_url() ?>assets/img/business.jpg'); background-position: center;">
	    <div class="container">
			<div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div id="formPesquisar" style="padding-top: 100px;">
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="" placeholder="Pesquise aqui..." style="height: 50px;">
                                            <button type="button" class="btn btn-primary btn-lg" style="margin-top: 20px;">Pesquisar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /headerwrap -->
	<!-- *****************************************************************************************************************
	 FOOTER
	 ***************************************************************************************************************** -->
	 <div id="footerwrap">
	 	<div class="container">
		 	<div class="row">
		 		<div class="col-lg-4">
		 			<h4>Sobre</h4>
		 			<div class="hline-w"></div>
                                        <p>O Emprego Fácil é um projeto desenvolvido pelo grupo de extensão {IF}ábrica de Software do IFSP Câmpus Capivari.</p>
		 		</div>
		 		<div class="col-lg-4">
		 			<h4>Social Links</h4>
		 			<div class="hline-w"></div>
		 			<p>
		 				<a href="#"><i class="fa fa-dribbble"></i></a>
		 				<a href="#"><i class="fa fa-facebook"></i></a>
		 				<a href="#"><i class="fa fa-twitter"></i></a>
		 				<a href="#"><i class="fa fa-instagram"></i></a>
		 				<a href="#"><i class="fa fa-tumblr"></i></a>
		 			</p>
		 		</div>
		 		<div class="col-lg-4">
		 			<h4>Our Bunker</h4>
		 			<div class="hline-w"></div>
		 			<p>
		 				Some Ave, 987,<br/>
		 				23890, New York,<br/>
		 				United States.<br/>
		 			</p>
		 		</div>
		 	
		 	</div><! --/row -->
	 	</div><! --/container -->
	 </div><! --/footerwrap -->
	 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/retina-1.1.0.js"></script>
	<script src="<?php echo base_url() ?>assets/js/jquery.hoverdir.js"></script>
	<script src="<?php echo base_url() ?>assets/js/jquery.hoverex.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/jquery.prettyPhoto.js"></script>
  	<script src="<?php echo base_url() ?>assets/js/jquery.isotope.min.js"></script>
  	<script src="<?php echo base_url() ?>assets/js/custom.js"></script>

 <!-- MODAL DE LOGIN -->       
 <div id="myModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Entrar</h4>
      </div>
      <div class="modal-body">
          <form>
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Senha</label>
                <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Senha">
              </div>
              <button type="button" class="btn btn-success btn-lg">Entrar</button>
              <br />
              <a href="#">Esqueci a senha</a>
          </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
 <!-- FIM MODAL DE LOGIN -->  
 
 <!-- MODAL DE CADASTRO -->       
 <div id="modalCadastrar" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Formulário de Cadastro</h4>
      </div>
      <div class="modal-body">
          <form>
              <div class="form-group">
                <label for="txtNome">Nome</label>
                <input type="text" name="nome" class="form-control" id="txtNome" placeholder="Nome">
              </div>
              <div class="form-group">
                <label for="txtEmail">Email</label>
                <input type="email" name="email" class="form-control" id="txtEmail" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="txtSenha">Senha</label>
                <input type="password" name="senha" class="form-control" id="txtSenha" placeholder="Senha">
              </div>
              <div class="form-group">
                <label for="txtConfirmarSenha">Confirmar Senha</label>
                <input type="password" name="confirmar_senha" class="form-control" id="txtConfirmarSenha" placeholder="Confirmar Senha">
              </div>
              <button type="button" class="btn btn-success btn-lg">Cadastrar</button>
          </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
 <!-- FIM MODAL DE LOGIN -->  
  </body>
</html>
