document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Impede o envio do formulário padrão
    
    // Simulação de login bem-sucedido
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    
    // Verificação de credenciais (substitua isso com sua lógica de autenticação real)
    if (username === "admin" && password === "123") {
        // Redirecionamento para o dashboard após o login bem-sucedido
        window.location.href = "dashboard.html";
    } else {
        alert("Credenciais inválidas. Tente novamente.");
    }
});
