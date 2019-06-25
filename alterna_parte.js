X = document.getElementById("capa");
Y = document.getElementById("name_project");
Z = document.getElementById("Campo_Formulario");
K = document.getElementById("Final_list");

abrePagina();
//saiDaCapa();
function abrePagina(){
    X.style.display = "block"; 
    Y.style.display = "none";
    Z.style.display = "none";
    K.style.display = "none";
}

$("#entrada_Name_project").submit(function(e){
                                saiDaCapa();
                                return false;
});
function saiDaCapa(){
    X.style.display = "none"; 
    Y.style.display = "block";
    Z.style.display = "block";
    K.style.display = "none";
    capta_nome();
}
//------------------------------------------------------------------
var name;
function capta_nome(){
    name = document.forms["entrada_Name_project"]["nameP"].value
    name_arquivo_dowload.innerHTML = (name + ".TXT");
}
//------------------------------------------------------------------

$("#campo_botao_comecaCalc").submit(function(e){
                                final();
                                return false;
});
function final(){
    X.style.display = "none"; 
    Y.style.display = "none";
    Z.style.display = "none";
    K.style.display = "block";
    calcula_e_exibi();
}
//-----------------------------------------------------------------------
$("#baixar").submit(function(e){
                                passar_arquivos_php();
                                return false;
});

function passar_arquivos_php(){      
    
    //Passa_Dimensões do Rio--------------------------------------------------------------------------------
     document.forms["campos_secretos"]["camposecreto1"].value = largura;
     document.forms["campos_secretos"]["camposecreto2"].value = comprimento;
    
    //Passa_Profundidade do Rio------------------------------------------------------------------------
    for(cont = 0;cont < 9;cont++)
        {
            document.forms["campos_secretos"]["camposecreto3" + "_" + cont].value = P_imprime[0][cont];
        }
    document.forms["campos_secretos"]["camposecreto4"].value = Profundidade;
    //Passa_Velocidade da Garafa-------------------------------------------------------------------------------
    for(cont = 0;cont < 9;cont++)
        {
            document.forms["campos_secretos"]["camposecreto5" + "_" + cont].value = P_imprime[1][cont];
        }
    document.forms["campos_secretos"]["camposecreto6"].value = Velocidade_media_garafa;
    
    //Passa_Velocidae do Isopor------------------------------------------------------------------------------
    for(cont = 0;cont < 9;cont++)
        {
            document.forms["campos_secretos"]["camposecreto7" + "_" + cont].value = P_imprime[2][cont];
        }
    document.forms["campos_secretos"]["camposecreto8"].value = Velocidade_media_isopor;
    //---------------------------------------------------------------------------------------------------------
    document.forms["campos_secretos"]["camposecreto9"].value = Area;
    document.forms["campos_secretos"]["camposecreto10"].value = Velocidade_garafa;
    document.forms["campos_secretos"]["camposecreto11"].value = vazao_g;
    document.forms["campos_secretos"]["camposecreto12"].value = Velocidade_isopor;
    document.forms["campos_secretos"]["camposecreto13"].value = vazao_i;
    document.forms["campos_secretos"]["camposecreto14"].value = Vazao_Rio;
    //--------------------------------------------------------------------------------------------------------    
    document.forms["campos_secretos"]["titulo"].value = name;
    
//    document.forms["campos_secretos"]["roda_ou_nao"].value = true;
  
    $('#campos_secretos').submit();
}