<?php

   include('protect.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Site da academia">
    <link rel="stylesheet" href="assestp/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Abyssinica+SIL&family=Alkalami&family=Righteous&family=Sarala:wght@400;700&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;

}

body{
    font-size: 100%;
    background:linear-gradient(90deg, rgb(109, 177, 194) 10%, #1190e6  50%,#000000 95%);
    font-family:Arial, Helvetica, sans-serif;
}
.cabecalho{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-around;
    padding: 24px;
}

.cabecalho-img{
	 font-family: 'Sarala' , sans-serif;
    color: #fff2e7;
    font-weight: 400;
    font-size: 18px;
}
.cabecalho-menu{
    display: flex;
    gap: 32px;
}

.cabecalho-menu-item{
    font-family: 'Sarala' , sans-serif;
    color: #fff2e7;
    font-weight: 400;
    font-size: 18px;
}


.material-symbols-outlined {
  font-variation-settings:
  'FILL' 0,
  'wght' 700,
  'GRAD' 200,
  'opsz' 48
}


.conteudo{
    border-top: 2px solid #fff2e7;
    margin-bottom:80px ;
}
.perfil {
    display: flex;
    align-items: center;
    width: 100%;

  }
  
  .perfil-foto {
    align-self: center;
    border-radius:10px;
    
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 25);
    
  }
  

.conteudo-principal{
    display: block;
    flex-direction:column;
    align-items:center;
    justify-content:flex-start;
    padding-left:300px ;
    
 }

.conteudo-principal-escrito{
    display: blo;
    flex-direction:column;
    align-items:flex ;
    gap:32px;
    justify-content:right;
    font-size: 24px;
    font-weight: 400;

}

.conteudo-principal-escrito-titulo{
    font-family: 'Righteous', cursive;
    font-size: 64px;
    font-weight: 400%;
    color: #fff2e7;
    display:flex;
    justify-content:right;
    flex-direction:column;
    align-items:center;
    padding-left: 600px;
    
}

.conteudo-principal-escrito-s{
    color: #ecd6c4;
    font-family: 'Sarala' , sans-serif;
    font-size: 24px;
    font-weight: 400;
    justify-content:right;
    display: block;
    flex-direction:column;
    align-items:center; 
 
}


.conteudo-principal-escrito-botao{
    background-color: #ecd6c4;
    border:none;
    padding-left:30px;
    align-items: center;
    height: 55px;
    width:140px ;
    box-shadow: 4px 5px 4px rgba(0 , 0 , 0 , 0.25);
    border-radius:10px; 
    font-family: 'Sarala' , sans-serif;
    font-size: 30px;
    font-weight: 200px;
    color:black;
    cursor: pointer;
}





.conteudo-secundario{
    display: flex;
    flex-direction:column;
    align-items:flex ;
    gap:32px;
    justify-content:right;
    font-size: 24px;
    font-weight: 400;

}

.conteudo-secundario-titulo{
   display: flex;
    flex-direction: row-reverse;
    padding-left: 100px;
    border: none;
    border-radius: 10px;
    font-family: 'Righteous',cursive;
    font-weight: 400;
    font-size: 30px;
    color: #fff2e7;
    margin-bottom: 0px;
    
}

.conteudo-secundario-paragrafo{
    font-family: 'Sarala' , sans-serif;
    font-size: 20px;
    font-weight: 30;
    color: #ecd6c4;
    display: block;
    padding-left: 1100px;
}



.area-login{
    display: flex;
    justify-content: center;
    align-items:center;
    height: 100vh;
    align-items: center;
    
}

.login{
    display: flex;
    flex-direction: column;
    align-items: center;
    background:linear-gradient(90deg, rgb(109, 177, 194) 10%, #1190e6  50%);
    width: 550px;
    height: 520px;
    padding: 40px;
    border-radius: 100px;
    padding-top: -100px;
}

.login form{
    display: flex;
    flex-direction: column;
    width:100% ;
}

.login input{
    margin-top:27px;
    color: #0c23cf;
    background: #252a34;
    border:none;
    height: 65px;
    outline: none;
    border-radius: 10px;
    padding-left: 20px;
}

.login img{
    width: 109px;
    height:auto;
}

.input::placeholder{
    color: #0016bd;
    font-size: 10px;
   
}

.sair{
display: flex;
color: #ffff;
padding-left: 210px;
padding-top: 40px;
  background: #252a34;
    border:none;
    border-radius: 10px;
    

    margin-top:30px;

  
    background: #252a34;
   
    height: 65px;
    outline: none;

   
    padding-top: 10px;
    font-family:'Sarala' , sans-serif; 


}

.nome{
display: flex;
align-items:row;
padding-left: 100px;
padding-top:10px;
  margin-top:27px;
    color: #fff;
    font-family:'Sarala' , sans-serif; 


}
.usuarios{
    margin-top:27px;
    color: #fff;
    background: #252a34;
    border:none;
    height: 65px;
    outline: none;
    border-radius: 10px;
    padding-left: 20px;
    padding-top: 10px;
    font-family:'Sarala' , sans-serif; 


}





</style>

    <title>Painel</title>
</head>
<body>
  

    
    	  <header class="cabecalho">
        <a class="cabecalho-img" > Phanter gym </a>
        <nav class="cabecalho-menu"> 
            <a class="cabecalho-menu-item" href="principal.html">Home
                <span class="material-symbols-outlined">exit_to_app</span></a>
            <a class="cabecalho-menu-item" href=""></a>
            <a class="cabecalho-menu-item" href="">Blog</a>
            <a class="cabecalho-menu-item" href="">Perfil
                <span class="material-symbols-outlined">account_circle</span></a>
            </a>
        </nav>

    </header>
        <!--Meio-->
    <main class="conteudo">
     
              
                
            </div>

           
         </section>
         <section class="conteudo-secundario">


            <section class="area-login">
                <div class="login">
                    <form action="POST">
                    	<div class= "nome">
    Bem vindo ao Painel, <?php echo $_SESSION['nome']; ?>
</div>
                      
             <a class="usuarios">Nome :        <?php echo $_SESSION['nome'];?></a>
                        <input type="password" name="Senha" placeholder="Senha" required >
                        <input type="email" name="Email" placeholder="Email" required >
                          
        <a class="sair" href="logout.php">Sair</a>
    
                   
        
                    </form>
                  
        
                </div>
        
            </section>


    </main>
    

</body>
</html>