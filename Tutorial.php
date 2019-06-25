<?php
    if(isset($_GET['avaliacoes'])){
        $arquivo = fopen("c:/xampp/htdocs/jice/Arquivos/avaliacao.txt", "w");
        $ultima_leitura = fread($file,filesize($arquivo));
        if($GET['avalia_pos'] == true && $GET['avalia_neg'] == false){
            fwrite($arquivo , "Positivas: ".$_GET['avalia_pos'] .PHP_EOL);//falta olhar o valor anterior e add +1
        }else if($GET['avalia_pos'] == false && $GET['avalia_neg'] == true){
            fwrite($arquivo , "Negativas: ".$_GET['avalia_neg'] .PHP_EOL);
        }
        fclose($arquivo);
    }
?>


<html>
    <head>
        <link rel="stylesheet" type="text/css" href="bootstrap-3.3.6-dist/css/bootstrap-theme.css">
        <link rel="stylesheet" type="text/css" href="bootstrap-3.3.6-dist/css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="bootstrap-3.3.6-dist/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="bootstrap-3.3.6-dist/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">
        
        <link rel="shortcut icon" href="Imagens/favicon%20(1).ico" type="image/x-icon">
        <link rel="icon" href="Imagens/favicon%20(1).ico" type="image/x-icon">
        <meta charset="utf-8">
        
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div id="navbar" class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="http://dianopolis.ifto.edu.br/">IFTO - DNO</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">Home <span class="sr-only">(current)</span></a></li>
                        <li class="active"><a href="Tutorial.html">Tutorial</a></li>
                        <li><a href="Calculadora.php">Calculadora</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>    
        </nav>
            <!---------------------------------------------------------------------------------------------------->
        <div id="corpo_tuto" class="container theme-showcase">
            <div class="page-header col-md-offset-2">
                <h2>Video Tutorial</h2>
                <p>Nossa equipe produzil um video para facilitar o uso do software.</p>
            </div>
            <div class="span8">
            <div id="campo_video" class="jumbotron col-lg-6 col-md-offset-2">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="video/Upload%20Studio.mp4"></iframe>
                </div>
            </div>
            </div>
            <div class="span4">
            <div id="avalia_qualit_video" class="jumbotron col-lg-3 col-md-offset-1">
                <h3>Avalie o video</h3>
                <div class="row">
                    <form id="avaliacao_video">
                        <div class="input-group">    
                            <div class="col-lg-12 col-md-offset-2">
                                <input name="qualidade_video" type="radio" aria-label="ruim">    
                                Ruim
                            </div>
                            <div class="col-lg-12 col-md-offset-2">   
                                <input name="qualidade_video" type="radio" checked aria-label="razoavel">    
                                Bom
                            </div>        
                            <div class="col-lg-12 col-md-offset-2">
                                <input name="qualidade_video" type="radio" aria-label="..." value="bom">
                                Otimo
                            </div><!-- /input-group -->
                        </div><!-- /.col-lg-6 -->
                        <input id="avaliacoes" type="hidden"></input>
<!--                        <input id="avaliacoes_vez" type="hidden"></input>-->
                        <input id="avalia_pos" type="hidden"></input>
                        <input id="avalia_neg" type="hidden"></input>
                    </form>
                    <script>
                        function obtem_opiniao(){
                            qualidade_video = document.forms["avaliacao_video"]["qualidade_video"].value;//pega a avaliação do usuario

                            if(qualidade_video == "ruim" || qualidade_video == "razoavel"){
                                document.forms["avaliacao_video"]["avalia_pos"].value = true;//passa para um campo invisivel qual foi a avaliação
                                document.forms["avaliacao_video"]["avalia_neg"].value = false;//do usuario, para o PHP.
                                }
                            else if(qualidade_video == "bom"){
                                document.forms["avaliacao_video"]["avalia_pos"].value = false;
                                document.forms["avaliacao_video"]["avalia_neg"].value = true;
                            }
                            //quanto_por_100_é = (pode_esperar / (melhorar_rapido + pode_esperar)) * 100;
                            //$('#avaliacoes').val(quanto_por_100_é);
                        }
                    </script>
                </div><!-- /.row -->
                <br>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 55%">
                        <span class="sr-only">45% Complete</span>
                    </div>
                </div>
                <br>
                <br>
                <br>
            </div>
            </div>
        </div>
            <!--*************************************************************************************************************-->
            <!--<div class="page-header col-md-offset-2">
                <h2>Passo a passo</h2>
                <p>Nossa equipe produzil um material escrito de como utilizar o software, tanto no trabalho de campo quanto na aplicação no software.</p>
            </div>
            
            <img src="Imagens/teste.jpg" alt="Imagens/teste.jpg" class="img-rounded">
            <img src="Imagens/teste.jpg" alt="Imagens/teste.jpg" class="img-circle">
            <img src="Imagens/teste.jpg" alt="Imagens/teste.jpg" class="img-thumbnail">-->
    </body>
</html>