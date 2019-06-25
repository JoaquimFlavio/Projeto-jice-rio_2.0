var P = [];//variável para receber os valores e calcular
var cont = 0, cont1 = 0;
var largura, comprimento, Area;
var Profundidade = (1,1);
var Velocidade_media_garafa,Velocidade_media_isopor;
var Velocidade_garafa = (1,1),Velocidade_isopor = (1,1);
var vazao_g,vazao_i = (1,1);
var Vazao_Rio = (1,1);
var P_imprime = [];
//--------------------------------------------------------------------------------
for (cont = 0;cont < 9;cont++)
    {
        P_imprime[cont] = [];
    }
for (cont = 0;cont < 3;cont++)
    {
        P[cont] = [];
    }
//--------------------------------------------------------------------------------

function calcula_e_exibi(){
    //Dimensões do Rio--------------------------------------------------------------------------------
     largura = parseFloat(document.forms["formularios"]["obtem_largura"].value);
     comprimento = parseFloat(document.forms["formularios"]["obtem_comprimento"].value);

    //Profundidade do Rio------------------------------------------------------------------------
    for(cont = 0;cont < 3;cont++)
        {
            P[0][cont] = parseFloat(document.forms["formularios"]["obtem_Profundidade_" + 0 + "_" + cont].value);
        }
     for(cont = 0;cont < 3;cont++)
        {
            P[1][cont] = parseFloat(document.forms["formularios"]["obtem_Profundidade_" + 1 + "_" + cont].value);
        }
     for(cont = 0;cont < 3;cont++)
        {
            P[2][cont] = parseFloat(document.forms["formularios"]["obtem_Profundidade_" + 2 + "_" + cont].value);
        }
    //-----------------------------------------
    P_imprime[0][0] = P[0][0];
    P_imprime[0][1] = P[0][1];
    P_imprime[0][2] = P[0][2];
    P_imprime[0][3] = P[1][0];
    P_imprime[0][4] = P[1][1];
    P_imprime[0][5] = P[1][2];
    P_imprime[0][6] = P[2][0];
    P_imprime[0][7] = P[2][1];
    P_imprime[0][8] = P[2][2];
    //-----------------------------------------
    Profundidade = Media(P);
//    document.write("Profundidade : "+Profundidade+"<br>"); nao usar pois meu formulario e tudo mais deicha de existir ?????
//    entender melhor depois
    
    //Velocidade da Garafa-------------------------------------------------------------------------------
    for(cont = 0;cont < 3;cont++)
        {
            P[0][cont] = parseFloat(document.forms["formularios"]["obtem_Velocidade_Garafa_" + 0 + "_" + cont].value); 
        }
     for(cont = 0;cont < 3;cont++)
        {
            P[1][cont] = parseFloat(document.forms["formularios"]["obtem_Velocidade_Garafa_" + 1 + "_" + cont].value);
        }
     for(cont = 0;cont < 3;cont++)
        {
            P[2][cont] = parseFloat(document.forms["formularios"]["obtem_Velocidade_Garafa_" + 2 + "_" + cont].value);
        }
    //-----------------------------------------
    P_imprime[1][0] = P[0][0];
    P_imprime[1][1] = P[0][1];
    P_imprime[1][2] = P[0][2];
    P_imprime[1][3] = P[1][0];
    P_imprime[1][4] = P[1][1];
    P_imprime[1][5] = P[1][2];
    P_imprime[1][6] = P[2][0];
    P_imprime[1][7] = P[2][1];
    P_imprime[1][8] = P[2][2];
    //-----------------------------------------
    Velocidade_media_garafa = Media(P);
    
    //Velocidae do Isopor------------------------------------------------------------------------------
    for(cont = 0;cont <= 2;cont++)
        {
            P[0][cont] = parseFloat(document.forms["formularios"]["obtem_Velocidade_Isopor_" + 0 + "_" + cont].value);
        }
     for(cont = 0;cont <= 2;cont++)
        {
            P[1][cont] = parseFloat(document.forms["formularios"]["obtem_Velocidade_Isopor_" + 1 + "_" + cont].value);
        }
     for(cont = 0;cont <= 2;cont++)
        {
            P[2][cont] = parseFloat(document.forms["formularios"]["obtem_Velocidade_Isopor_" + 2 + "_" + cont].value);
        }
    //-----------------------------------------
    P_imprime[2][0] = P[0][0];
    P_imprime[2][1] = P[0][1];
    P_imprime[2][2] = P[0][2];
    P_imprime[2][3] = P[1][0];
    P_imprime[2][4] = P[1][1];
    P_imprime[2][5] = P[1][2];
    P_imprime[2][6] = P[2][0];
    P_imprime[2][7] = P[2][1];
    P_imprime[2][8] = P[2][2];
    //-----------------------------------------
    Velocidade_media_isopor = Media(P);
    //----------------------------------------------------------------------------------------------
    Area = largura * Profundidade;
    Velocidade_garafa = comprimento / Velocidade_media_garafa;
    vazao_g = (Area * Velocidade_garafa) * 1000;
    Velocidade_isopor = comprimento / Velocidade_media_isopor
    vazao_i = (Area * Velocidade_isopor) * 1000;

    Vazao_Rio = (vazao_g + vazao_i) / 2;
    
    //Result_area.innerHTML = ("Area = " + Area);
    //Result_profundidade.innerHTML = ("Profundidade = "+Profundidade);
    //Result_Velocidade_garafa.innerHTML = ("Velocidade da garrafa = " + Velocidade_garafa);
    //Result_Velocidade_isopor.innerHTML = ("Velocidade do isopor = " + Velocidade_isopor);
    VAZAO.innerHTML = (Vazao_Rio + " L/s");
    //----------------------------------------------------------------------------------------------
}
function Media(P)
{
    var cont11;
    var cont12;
    var cont13;
    
    cont11 = ((P[0][0] + P[0][1] + P[0][2]) / 3);
    cont12 = ((P[1][0] + P[1][1] + P[1][2]) / 3);
    cont13 = ((P[2][0] + P[2][1] + P[2][2]) / 3);
    return ((cont11  + cont12 + cont13 ) / 3);  
}
