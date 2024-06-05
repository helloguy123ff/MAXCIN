<?php
// Verifica se os dados foram recebidos via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter dados do formulário
    $titulo = $_POST["titulo"];
    $descricao = $_POST["descricao"];
    $url = $_POST["url"];
    
    // Aqui você pode realizar validações adicionais
    
    // Por simplicidade, vamos apenas retornar uma mensagem de sucesso
    $response = ["success" => true, "message" => "Postagem realizada com sucesso!"];
    echo json_encode($response);
} else {
    // Se os dados não foram enviados via POST, retorna um erro
    $response = ["success" => false, "message" => "Método de requisição inválido."];
    echo json_encode($response);
}
?>
