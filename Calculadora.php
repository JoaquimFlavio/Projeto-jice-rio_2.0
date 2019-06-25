<?php
    if(isset($_GET['titulo'])){
        $arquivo = fopen("c:/xampp/htdocs/jice/Arquivos/".$_GET['titulo'].".txt", "w");
        $titulo_projet = $_GET['titulo'];
        fwrite($arquivo , "Projeto: ".$_GET['titulo']. PHP_EOL);
        //-------------------------------------------------------------------------
        fwrite($arquivo , "Largura: ".$_GET['camposecreto1'] . PHP_EOL);
        fwrite($arquivo , "Comprimento: ".$_GET['camposecreto2']. PHP_EOL);

        fwrite($arquivo , "------------*---------------*-----------------*-------------------*-----------*----------".PHP_EOL);
        fwrite($arquivo , "Profundidade inicio:".PHP_EOL);
        fwrite($arquivo , "                    ponto 1: " . $_GET['camposecreto3_0'].PHP_EOL);
        fwrite($arquivo , "                    ponto 2: ".$_GET['camposecreto3_1'].PHP_EOL);
        fwrite($arquivo , "                    ponto 3: ".$_GET['camposecreto3_2'].PHP_EOL);
        fwrite($arquivo , "             centro:".PHP_EOL);
        fwrite($arquivo , "                    ponto 1: ".$_GET['camposecreto3_3'].PHP_EOL);
        fwrite($arquivo , "                    ponto 2: ".$_GET['camposecreto3_4'].PHP_EOL);
        fwrite($arquivo , "                    ponto 3: ".$_GET['camposecreto3_5'].PHP_EOL);
        fwrite($arquivo , "             fim:".PHP_EOL);
        fwrite($arquivo , "                 ponto 1: ".$_GET['camposecreto3_6'].PHP_EOL);
        fwrite($arquivo , "                 ponto 2: ".$_GET['camposecreto3_7'].PHP_EOL);
        fwrite($arquivo , "                 ponto 3: ".$_GET['camposecreto3_8'].PHP_EOL);

        fwrite($arquivo , "Media Profundidade: ".$_GET['camposecreto4'].PHP_EOL);

        fwrite($arquivo , "------------*---------------*-----------------*-------------------*-----------*----------".PHP_EOL);
        fwrite($arquivo , "Velocidade garafa inicio:".PHP_EOL);
        fwrite($arquivo , "                         ponto 1: ".$_GET['camposecreto5_0'].PHP_EOL);
        fwrite($arquivo , "                         ponto 2: ".$_GET['camposecreto5_1'].PHP_EOL);
        fwrite($arquivo , "                         ponto 3: ".$_GET['camposecreto5_2'].PHP_EOL);
        fwrite($arquivo , "                  centro:".PHP_EOL);
        fwrite($arquivo , "                         ponto 1: ".$_GET['camposecreto5_3'].PHP_EOL);
        fwrite($arquivo , "                         ponto 2: ".$_GET['camposecreto5_4'].PHP_EOL);
        fwrite($arquivo , "                         ponto 3: ".$_GET['camposecreto5_5'].PHP_EOL);
        fwrite($arquivo , "                  fim:".PHP_EOL);
        fwrite($arquivo , "                      ponto 1: ".$_GET['camposecreto5_6'].PHP_EOL);
        fwrite($arquivo , "                      ponto 2: ".$_GET['camposecreto5_7'].PHP_EOL);
        fwrite($arquivo , "                      ponto 3: ".$_GET['camposecreto5_8'].PHP_EOL);

        fwrite($arquivo , "Media Velocidade garafa: ".$_GET['camposecreto6'].PHP_EOL);

        fwrite($arquivo , "------------*---------------*-----------------*-------------------*-----------*----------".PHP_EOL);
        fwrite($arquivo , "Velocidade isopor inicio:".PHP_EOL);
        fwrite($arquivo , "                         ponto 1: ".$_GET['camposecreto7_0'].PHP_EOL);
        fwrite($arquivo , "                         ponto 2: ".$_GET['camposecreto7_1'].PHP_EOL);
        fwrite($arquivo , "                         ponto 3: ".$_GET['camposecreto7_2'].PHP_EOL);
        fwrite($arquivo , "                  centro:".PHP_EOL);
        fwrite($arquivo , "                         ponto 1: ".$_GET['camposecreto7_3'].PHP_EOL);
        fwrite($arquivo , "                         ponto 2: ".$_GET['camposecreto7_4'].PHP_EOL);
        fwrite($arquivo , "                         ponto 3: ".$_GET['camposecreto7_5'].PHP_EOL);
        fwrite($arquivo , "                  fim:".PHP_EOL);
        fwrite($arquivo , "                      ponto 1: ".$_GET['camposecreto7_6'].PHP_EOL);
        fwrite($arquivo , "                      ponto 2: ".$_GET['camposecreto7_7'].PHP_EOL);
        fwrite($arquivo , "                      ponto 3: ".$_GET['camposecreto7_8'].PHP_EOL);

        fwrite($arquivo , "Media Velocidade isopor: ".$_GET['camposecreto8'].PHP_EOL);

        fwrite($arquivo , "------------*---------------*-----------------*-------------------*-----------*----------".PHP_EOL);
        fwrite($arquivo , "Area: ".$_GET['camposecreto9'].PHP_EOL);
        fwrite($arquivo , "Velocidade da garafa: ".$_GET['camposecreto10'].PHP_EOL);
        fwrite($arquivo , "Vazao com a garafa: ".$_GET['camposecreto11'].PHP_EOL);
        fwrite($arquivo , "Velocidade do isopor: ".$_GET['camposecreto12'].PHP_EOL);
        fwrite($arquivo , "Vazao com o isopor: ".$_GET['camposecreto13'].PHP_EOL);
        fwrite($arquivo , "Vazao do Rio: ".$_GET['camposecreto14'].PHP_EOL);

        fclose($arquivo);
        //header('location:index.php');
    }
/*---------------------------------------------------------------------------------------------------------------
*/

?>


<!DOCTYPE html>
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
        <script type="text/javascript" language="javascript" src="jquery-1.2.2.pack.js"></script>
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
                        <li><a href="Tutorial.php">Tutorial</a></li>
                        <li class="active"><a href="Calculadora.php">Calculadora</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
        <!--**************************************************************************************************************************-->
        <div id="capa" class="">
            <div class="container span7 text-center col-md-6 col-md-offset-3">
                <h1>Entre com o Nome do Projeto:</h1> <!--cria um texto ensima da div de envio-->
            </div>    
            <div class="container span7 text-center col-md-12 col-md-offset-3 col-md-top-3">
                <div class="row">
                  <div class="col-lg-6">
                      <form id="entrada_Name_project">
                          <div class="input-group">
                              <input id="nameP" type="text" class="form-control">
                              <span class="input-group-btn">
                                  <button class="btn btn-default" type="send">Enviar</button>
                              </span>
                          </div>
                      </form>
                  </div>
                </div>
            </div>
        </div>
        <!--**********************************************************************************************************************-->
        
        <div id="name_project" class="container theme-showcase col-md-offset-1">
            <div id="Campo_name_project" class="jumbotron col-lg-7 text-center"><h1 id="exib_name_project">Formularios</h1></div>
        </div>
        <div class="container theme-showcase">
        <div id="Campo_Formulario" class="jumbotron col-lg-9">
            <form id="formularios">
                <div class="page-header"><h2>Dimenções</h2></div>
                <div class="row">
                    <div class="col-lg-1 col-md-offset-2">
                        <div class="span6">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon2">Largura</span>
                            <input id="obtem_largura" type="text" class="form-control" placeholder="Entrada em Cm" aria-describedby="basic-addon2" value="2">
                        </div><!-- /input-group -->
                        </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-1 col-md-offset-3">
                        <div class="span6">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon2">Comprimento</span>
                            <input id="obtem_comprimento" type="text" class="form-control" placeholder="Entrada em Cm" aria-describedby="basic-addon2" value="4">
                        </div><!-- /input-group -->
                        </div>
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
                <!-----------------------------------------------------------------------------------------------------------------> 
                <div class="page-header"><h2>Profundidade</h2></div>
                <div class="row">
                    <div class="col-lg-3 col-md-offset-2">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">P1</span>
                            <input id="obtem_Profundidade_0_0" type="text" class="form-control" placeholder="Inicio" value="0.5">
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg- -->
                    <div class="col-lg-3">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">P2</span>
                            <input id="obtem_Profundidade_0_1" type="text" class="form-control" placeholder="Inicio" value="0.8">
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-3">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">P3</span>
                            <input id="obtem_Profundidade_0_2" type="text" class="form-control" placeholder="Inicio" value="0.5">
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
                <br>
                <div class="row">
                    <div class="col-lg-3 col-md-offset-2">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">P1</span>
                            <input id="obtem_Profundidade_1_0" type="text" class="form-control" placeholder="Centro" value="0.8">
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg- -->
                    <div class="col-lg-3">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">P2</span>
                            <input id="obtem_Profundidade_1_1" type="text" class="form-control" placeholder="Centro" value="0.8">
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-3">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">P3</span>
                            <input id="obtem_Profundidade_1_2" type="text" class="form-control" placeholder="Centro" value="0.8">
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
                <br>
                <div class="row">
                    <div class="col-lg-3 col-md-offset-2">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">P1</span>
                            <input id="obtem_Profundidade_2_0" type="text" class="form-control" placeholder="Fim" value="0.3">
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg- -->
                    <div class="col-lg-3">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">P2</span>
                            <input id="obtem_Profundidade_2_1" type="text" class="form-control" placeholder="Fim" value="0.4">
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-3">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">P3</span>
                            <input id="obtem_Profundidade_2_2" type="text" class="form-control" placeholder="Fim" value="0.5">
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
                <!----------------------------------------------------------------------------------------------->
                <div class="page-header"><h2>Flutuador: Garrafa</h2></div>
                <div class="row">
                    <div class="col-lg-3 col-md-offset-2">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">1°</span>
                            <input id="obtem_Velocidade_Garafa_0_0" type="text" class="form-control" placeholder="Inicio" value="10">
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg- -->
                    <div class="col-lg-3">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">2°</span>
                            <input id="obtem_Velocidade_Garafa_0_1" type="text" class="form-control" placeholder="Inicio" value="10">
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-3">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">3°</span>
                            <input id="obtem_Velocidade_Garafa_0_2" type="text" class="form-control" placeholder="Inicio" value="10">
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
                <br>
                <div class="row">
                    <div class="col-lg-3 col-md-offset-2">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">1°</span>
                            <input id="obtem_Velocidade_Garafa_1_0" type="text" class="form-control" placeholder="Centro" value="12">
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg- -->
                    <div class="col-lg-3">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">2°</span>
                            <input id="obtem_Velocidade_Garafa_1_1" type="text" class="form-control" placeholder="Centro" value="12">
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-3">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">3°</span>
                            <input id="obtem_Velocidade_Garafa_1_2" type="text" class="form-control" placeholder="Centro" value="12">
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
                <br>
                <div class="row">
                    <div class="col-lg-3 col-md-offset-2">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">1°</span>
                            <input id="obtem_Velocidade_Garafa_2_0" type="text" class="form-control" placeholder="Fim" value="10">
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg- -->
                    <div class="col-lg-3">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">2°</span>
                            <input id="obtem_Velocidade_Garafa_2_1" type="text" class="form-control" placeholder="Fim" value="10">
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-3">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">3°</span>
                            <input id="obtem_Velocidade_Garafa_2_2" type="text" class="form-control" placeholder="Fim" value="10">
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
                 <!----------------------------------------------------------------------------------------------->
                <div class="page-header"><h2>Flutuador: Isopor</h2></div>
                <div class="row">
                    <div class="col-lg-3 col-md-offset-2">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">1°</span>
                            <input id="obtem_Velocidade_Isopor_0_0" type="text" class="form-control" placeholder="Inicio" value="12">
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg- -->
                    <div class="col-lg-3">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">2°</span>
                            <input id="obtem_Velocidade_Isopor_0_1" type="text" class="form-control" placeholder="Inicio" value="12">
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-3">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">3°</span>
                            <input id="obtem_Velocidade_Isopor_0_2" type="text" class="form-control" placeholder="Inicio" value="12">
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
                <br>
                <div class="row">
                    <div class="col-lg-3 col-md-offset-2">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">1°</span>
                            <input id="obtem_Velocidade_Isopor_1_0" type="text" class="form-control" placeholder="Centro" value="14">
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg- -->
                    <div class="col-lg-3">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">2°</span>
                            <input id="obtem_Velocidade_Isopor_1_1" type="text" class="form-control" placeholder="Centro" value="14">
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-3">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">3°</span>
                            <input id="obtem_Velocidade_Isopor_1_2" type="text" class="form-control" placeholder="Centro" value="14">
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
                <br>
                <div class="row">
                    <div class="col-lg-3 col-md-offset-2">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">1°</span>
                            <input id="obtem_Velocidade_Isopor_2_0" type="text" class="form-control" placeholder="Fim" value="13">
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg- -->
                    <div class="col-lg-3">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">2°</span>
                            <input id="obtem_Velocidade_Isopor_2_1" type="text" class="form-control" placeholder="Fim" value="13">
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-3">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">3°</span>
                            <input id="obtem_Velocidade_Isopor_2_2" type="text" class="form-control" placeholder="Fim" value="13">
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </form>
            <br>
            <br>
            <div class="btn-group col-md-offset-5" role="group" aria-label="..."> 
                <form id="campo_botao_comecaCalc"><button class="btn btn-default">Calcular</button></form>
            </div>
        </div>
        </div>
        <!--************************************************************************************************************-->
        <div id="Final_list" class="container theme-showcase" role="main">
            <div id="campo_exibiResult" class="jumbotron text-center col-lg-5 col-md-offset-1">
                <h3>Vazão do Rio</h3>
                <h2><div id="VAZAO"></div></h2>
            </div>
            <div id="campo_baixar" class="jumbotron text-center col-lg-4 col-md-offset-1">
                <h3>Baixar Arquivo</h3>
                <h3><div class="container text-center" id="name_arquivo_dowload"></div></h3>
                <form id="baixar"><button type="send" class="btn btn-lg btn-primary">Dowload</button></form>
            </div>
        </div>
        <!--************************************************************************************************************-->
         <form id="campos_secretos" action="Calculadora.php">
            <input type="hidden" name="camposecreto1"></input><!-- largura -->
            <input type="hidden" name="camposecreto2"></input><!-- comprimento-->
            
            <!---------------------------------------------------------------------------->

            <input type="hidden" name="camposecreto3_0"></input><!-- profundidade ponto 1 -->
            <input type="hidden" name="camposecreto3_1"></input><!--          ||          -->
            <input type="hidden" name="camposecreto3_2"></input><!--          ||          -->

            <input type="hidden" name="camposecreto3_3"></input><!--  profundidade ponto 2-->
            <input type="hidden" name="camposecreto3_4"></input><!--          ||          -->
            <input type="hidden" name="camposecreto3_5"></input><!--          ||          -->

            <input type="hidden" name="camposecreto3_6"></input><!--  profundidade ponto 3-->
            <input type="hidden" name="camposecreto3_7"></input><!--          ||          -->
            <input type="hidden" name="camposecreto3_8"></input><!--          ||          -->

            <input type="hidden" name="camposecreto4"></input><!--Media profundidade-->

            <!---------------------------------------------------------------------------->

            <input type="hidden" name="camposecreto5_0"></input><!-- velocidade garafa ponto 1 -->
            <input type="hidden" name="camposecreto5_1"></input><!--              ||           -->
            <input type="hidden" name="camposecreto5_2"></input><!--              ||           -->

            <input type="hidden" name="camposecreto5_3"></input><!-- velocidade garafa ponto 2 -->
            <input type="hidden" name="camposecreto5_4"></input><!--              ||           -->
            <input type="hidden" name="camposecreto5_5"></input><!--              ||           -->

            <input type="hidden" name="camposecreto5_6"></input><!-- velocidade garafa ponto 3 -->
            <input type="hidden" name="camposecreto5_7"></input><!--              ||           -->
            <input type="hidden" name="camposecreto5_8"></input><!--              ||           -->

            <input type="hidden" name="camposecreto6"></input><!--media velocidade garafa-->
            <!---------------------------------------------------------------------------->

            <input type="hidden" name="camposecreto7_0"></input><!-- velocidade isopor ponto 1 -->
            <input type="hidden" name="camposecreto7_1"></input><!--              ||           -->
            <input type="hidden" name="camposecreto7_2"></input><!--              ||           -->

            <input type="hidden" name="camposecreto7_3"></input><!-- velocidade isopor ponto 2 -->
            <input type="hidden" name="camposecreto7_4"></input><!--              ||           -->
            <input type="hidden" name="camposecreto7_5"></input><!--              ||           -->

            <input type="hidden" name="camposecreto7_6"></input><!-- velocidade isopor ponto 3 -->
            <input type="hidden" name="camposecreto7_7"></input><!--              ||           -->
            <input type="hidden" name="camposecreto7_8"></input><!--              ||           -->

            <input type="hidden" name="camposecreto8"></input><!-- Media velocidade isopor -->

            <input type="hidden" name="camposecreto9"></input><!--Area-->
            <input type="hidden" name="camposecreto10"></input><!--Velocidade garafa-->
            <input type="hidden" name="camposecreto11"></input><!--Vazao com a garrafa-->
            <input type="hidden" name="camposecreto12"></input><!--Velocidade isopor-->
            <input type="hidden" name="camposecreto13"></input><!--Vazao isopor-->
            <input type="hidden" name="camposecreto14"></input><!--Vazao media-->
    
            <!----------------------------------------------------------------------------------->
            <input type="hidden" name="titulo"></input>
        </form>    
        
    </body>
    <script src="alterna_parte.js"></script>
    <script src="Calculadora_formulario.js"></script>
</html>