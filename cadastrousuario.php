<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Usuario</title>
    <link rel="stylesheet"  type="text/css" href="style.css"/>
   
</head>
<body>
    <form action="index.php">
        <header class="cabecalho-home"> 
            <div>
            </div>    
                <nav class="menu-button-sair" >
                	<button class="botao-sair" type="submit" >Sair</button>
            	</nav> 
        </header>  
    </form>
    <div class="tela-login-home">
        <div>
            <form action="home.php">
            	<h2 class="sub-titulo-home">Registro</h2>
                <div class="entrada-dados">
                    <span class="icone"><ion-icon name="person-outline"></ion-icon></span>
                    <input type="text" required>
                    <label>Usuário</label>
                </div> 

                <div class="entrada-dados">
                    <span class="icone"><ion-icon name="mail-outline"></ion-icon></span>
                    <input type="email" required>
                    <label>Email</label>
                </div>  
                <div class="entrada-dados">
                    <span class="icone"><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <input type="password" required>
                    <label>password</label>
                </div>
                <div class="lembrar_dados">
                    <label><input type="checkbox">
                    Concorda com os termos e condições
                	</label>  
                    
                </div>
                <button class="botao-logar" type="submit">Registrar</button>
                <div class="registre-se">
                  
                </div>

            </form>

        </div>

     
    </div>


    <footer>
        <p>Todos os direios reservados a CartagenesDEV &copy; 2023</p>
    </footer>
    
</body>
</html> 