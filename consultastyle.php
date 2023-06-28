<?php header ("Content-type: text/css;") ?>
/*Fontes importadas do tio google*/
/*como indicar elas:
font-family: 'Plus Jakarta Sans', sans-serif;
font-family: 'Poppins', sans-serif;
*/

@import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200&family=Poppins:ital,wght@0,100;0,200;1,100&display=swap');
/*RESETANDO O CSS - anula as configurações pré definidas pelo html*/
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
}
body{
    font-size: 100%;
    background: linear-gradient(90deg, rgba(73, 190, 255, 0.3) 0%, rgba(200, 82, 255, 0.28) 100%);
    
}

/*---------------------Estilizando a barra de navegação-------------------------*/
/*posição do cabeçalho na pagina - conteúdo PAI no flex box*/
.cabecalho{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: end;
    padding: 1%;
    background: linear-gradient(263.35deg, rgba(73, 190, 255, 0.3) 28.29%, rgba(200, 82, 255, 0.28) 107.57%);
    
}
/*configurações do menu da barra de navegação - conteúdo PAI e filho de CABECALHO*/
.menu{
    display: flex;
    gap: 30px;
    justify-content: center;
    align-items: center;
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 600;
    font-size: 25px;
    line-height: 27px;
    color: #1D1D1D;  
    margin-right: 1%;  


}
/*estilização dos itens do menu da barra de navegação - conteúdo filho*/
.menu-item{
    color: black;
    /*Esse padding serviu pra alinhar o texto ao botão*/
    
}
/*hover dos itens do menu da barra de navegação - conteúdo filho*/
.menu-item:hover{
    color: #7f7f7f;

}
/*estilização do botão de login - conteúdo filho*/
.menu-botao{  
        color: #0f0f0f;
        font-size: 25px;
        border: 2px solid #3d3d3d;
        border-radius: 18px;
        padding: 10px 30px;
        cursor: pointer;
        font-family: 'Poppins';
        font-style:normal;
        font-weight: 700;
        
}
.menu-botao:hover {
    color: #ffffff;
    border: 2px solid #6d6d6d;
    background-color: #6d6d6d;
}

/*---------------------Estilizando a barra de navegação - FIM -------------------------*/




/*------------------ ESTILIZANDO MAIN ------------------------*/

.main-config{
    display: flex;
    flex-direction: column;
    margin-bottom: 8%;
}
.container-secao1-form{
    
    display: flex;
    flex-direction: column;
    text-align: center;
    align-items: center;
    
    
}

/*Estilizando títulos antes da tabela*/



.secao1-title{

    font-family: 'Poppins';
    font-style: normal;
    font-weight: 600;
    font-size: 36px;
    
}
.secao1-title2{
    font-family: 'Poppins';
    font-style: italic;
    font-weight: 800;
}
/*Estilizando a tabela e itens da tabela */

.container-tabela{
    margin-top: 1%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 2% 5%;
    max-width: 90%;

    background: linear-gradient(94.73deg, #EFF9FF 1.96%, rgba(252, 245, 255, 0.58) 91.67%);
    border: 4px solid rgba(255, 255, 255, 0.4);
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 18px 52.8537px rgba(215, 228, 249, 0.5);
    border-radius: 20px;

}

.tabela{
    
    font-family: 'Poppins';
    font-style: italic;
    font-weight: 800;
    border-radius: 100px;
    border: none;

}

.tabela-itens{
    width: 400px;
    height: 30px;
    border: solid 1px black;
    border-radius: 10px;
    

}


.container-reserva{
    display: flex;
    flex-direction: column;
    margin-top: 2%;
    
    
}

.container-secao2{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin-top: 5%;

}
.reserva-content{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 10%;
    text-align: center;
}
.reserva-content-titulo{
    margin-top: 2%;
    margin-bottom: 2%;
}
.reserva-content-botoes{
    display: flex;
    flex-direction: Column;
    justify-content: center;
    text-align: center;
    font-family: 'Poppins';
    font-style:normal;
    font-weight: 700;
}
.botoesalign{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-content: center;
    text-align: center;
}

.reserva-botao{
        display: flex;
        flex-direction: row;
        color: #0f0f0f;
        font-size: 15px;
        border: 2px solid #3d3d3d;
        border-radius: 18px;
        padding: 10px 30px;
        cursor: pointer;
        font-family: 'Poppins';
        font-style:normal;
        font-weight: 700;
        background-color: #ffffff;
        margin-top: 2%;
}
.reserva-botao:hover {
    color: #ffffff;
    border: 2px solid #6d6d6d;
    background-color: #aeadad;
}

.reserva-content-titulo{
    font-family: 'Poppins';
    font-style: italic;
    font-weight: 900;
    font-size: 100%;
    color: #1D1D1D;
}
.date-title{
    font-family: 'Poppins';
    font-style: italic;
    font-weight: 1000;
    color: #1D1D1D;
}
.date-input{
    font-family: 'Poppins';
    font-style: italic;
    font-weight: 1000;
    border: 2px solid #404040;
    border-radius: 5px;
    padding: 1%;
    margin: 1%;
}
/*Container Imagem - PAI*/
.gurizin{
    position: absolute;
    left: 60%;
    right: 0%;
    top: 50%;
    bottom: -0.35%;
    width: 30%;
    height: 60%;
   


}
.gurizin-img{
    width: 90%;
    height: 90%;
    
}

/* ---------- Estilizando o container pai do footer -------------- */

.rodape-background{
    display: flex;
    flex-direction: column;
    /*Align-itens alinha horizontal*/
    align-items: center;
    /*Justify-content alinha na vertical*/
    justify-content: center;
    background: linear-gradient(263.35deg, rgba(73, 190, 255, 0.3) 28.29%, rgba(200, 82, 255, 0.28) 107.57%);
    padding-bottom: 2%;
   
}
.rodape-background-dev{
    font-family: 'Poppins';
    font-style: italic;
    font-weight: 300;
    font-size: 10px;
    line-height: 160%;
    
    
    color: rgba(29, 29, 29, 0.8);
}
.social-media{
    display: flex;
    flex-direction: row;
    gap: 10px;
    
    
    
    
}
.social-media-img{
    width: 60px;
    height: 60px;
}
.social-media-img:hover{
    filter: blur(1px);
    cursor: pointer;
}

/* ---------- Estilizando o container pai do footer - FIM -------------- */

/*------------------Responsividade usando media querys---------------------*/

@media screen and (max-width: 768px){
 
   
    body{
        display: block;
        text-align: center;
        margin: 0%;
        
        
    }
    .cabecalho{
        display: block;
        padding: 5%;
        justify-content: center;
    }
    .menu{

        margin: 0px;
        font-size: 120%;
        text-align: center;

    }
    .menu-item{
        padding: 0%;
        margin: 0%;
        text-align: center;
        
    }
    .conteudo-principal{
        display: block;
        margin: 0%;
    }
/*A fazer responsividade da tela de cadastro*/
    .conteudo-principal-formulario{
        display: block;
        margin: 2%;
    }
    .cadastro{
        display: block;
        text-align: center;

    }
    .cadastro-info{
        font-size: 100%;
        padding: 3%;
    }
  
    /* Responsividade imagem mascote */ 
    .gurizin{
        
        position: static;
        bottom: -0.35%;
        width: 90%;
        
        
        
    }
    .gurizin-img{
        display: block;
        width: 100%;
        
         
    }
    
/* Responsividade imagem mascote - fim */ 
    
/*A fazer responsividade da tela de Consulta na parte abaixo*/



/*A fazer responsividade da tela de Consulta na parte cima*/

/*A fazer responsividade da tela de cadastro na parte acima*/

    .conteudo-secundario{
        
        margin: 2%;
        margin-left: 3%;

    }
    
    .conteudo-secundario-bloco{
        display: block;
        margin: 0%;
    }
    .conteudo-secundario-texto1{
        text-align: center;
    }
    .rodape-background{
        display: block;
        margin: 0%;
        text-align: center;
    }
    .social-media{
        display: block;
    }
}
