document.getElementById("postForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Impede o envio do formulário padrão
    
    // Obter dados do formulário
    var formData = new FormData(this);
    
    // Enviar dados para o servidor
    fetch("processar_post.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        // Exibir mensagem de sucesso ou erro
        alert(data.message);
    })
    .catch(error => {
        console.error("Erro:", error);
        alert("Ocorreu um erro ao processar sua postagem.");
    });
});

