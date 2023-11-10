/*Função criada para utilizar no botão de esqueceu senha da tela de login */
function mostrarPopUp() {
    alert("Nova senha enviada para o e-mail cadastrado");
}


/*Função criada para mostrar a senha digitada na tela de login */
function mostrarSenha() {
  const senhaInput = document.getElementById("senha");
  const botaoMostrarSenha = document.getElementById("mostrar-senha");
  
  if (senhaInput.type === "password") {
    senhaInput.type = "text";
    botaoMostrarSenha.innerHTML = "Ocultar";
  } else {
    senhaInput.type = "password";
    botaoMostrarSenha.innerHTML = "Exibir";
  }
}

