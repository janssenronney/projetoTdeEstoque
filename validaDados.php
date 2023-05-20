<?php
$servername = "localhost";
$database = "controle_estoque";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);


$email = $_POST['email'];
$senha1 = $_POST['senha'];

$sql = "SELECT * FROM cadastro_usuarios WHERE email = '$email'";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    // O email existe no banco de dados
    $row = $resultado->fetch_assoc();

    // Verifique a senha
    if ($senha1 == $row['senha']) { // Aqui estamos comparando as senhas sem hash
        // A senha está correta, as informações de login são válidas
        // Realize as ações necessárias, como definir sessões ou cookies
        // Redirecione para a página inicial ou área restrita
        //echo "Sistema Logado";
        header("Location: home.php");
        exit();
    } else {
        // A senha está incorreta
        echo "Nome de usuário ou senha inválidos.";
    }
} else {
    // O email não existe no banco de dados
    echo "Nome de usuário ou senha inválidos.";
}

mysqli_close($conn);

?>