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
        <link href="<?php echo base_url() ?>assets/css/empregofacil.css" rel="stylesheet">


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
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuário: <?php echo strtoupper($this->session->nome) ?> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                              <li><a href="">Meus Dados</a></li>
                              <li><a href="<?php echo base_url('sair') ?>">Sair</a></li>
                            </ul>
                        </li>

                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>

        <?php echo $contents ?>
        
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
                            <a target="blank" href="http://www.ifspcapivari.com.br/"><i class="fa fa-dribbble"></i></a>
                            <a target="blank" href="https://www.facebook.com/ifspcapivari/"><i class="fa fa-facebook"></i></a>
                            <a target="blank" href="https://www.instagram.com/explore/locations/354443833/ifsp-campus-capivari/"><i class="fa fa-instagram"></i></a>
                            
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <h4>Endereço</h4>
                        <div class="hline-w"></div>
                        <p>
                            Avenida Ênio Pires de Camargo, 2971,<br/>
                            São João Batista, CEP 13360-000 - Capivari/SP,<br/>
                            Brazil.<br/>
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
        <script src="<?php echo base_url() ?>assets/js/jquery.mask.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/custom.js"></script>
        <script src="<?php echo base_url() ?>assets/js/candidato.js"></script>
        <script src="<?php echo base_url() ?>assets/js/mascaras.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#myAffix').affix({
                    offset: {
                      bottom: $('#footerwrap').outerHeight(true)
                    }
                  }); 
                <?php if(!is_null($abrir)) : ?>
                $('#modal<?php echo $abrir ?>').modal();
                <?php endif; ?>
            });
        </script>
    </body>
</html>
