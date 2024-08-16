$(document).ready(function () {
  $(document).on("click", "#btn-editar", function () { // Ao clicar no botão editar
    editarCliente();
  });

  $(document).on("click", "#btn-limpar", function () { // Ao clicar no botão limpar
    limparCampos();
  });
});

function limparResultadoCliente() {  // Função para limpar o resultado do cliente
  $("#resultado").html("");
}

function editarCliente() {
  if (!validarFormulario()) {
    return; // Se a validação falhar, não prosseguir
  }

  const name = $("#name").val();
  const razaoSocial = $("#razao_social").val();
  const cnpj = $("#cnpj").val();
  const logradouro = $("#logradouro").val();
  const numero = $("#numero").val();
  const bairro = $("#bairro").val();
  const cidade = $("#cidade").val();
  const estado = $("#estado").val();

  xajax_editarCliente(
    name,  
    razaoSocial,
    cnpj,
    logradouro,
    numero,
    bairro,
    cidade,
    estado
  );

  limparCampos();
}
function redirecionarListagem() { // Função para redirecionar para a listagem de clientes
  alert("Cliente nao foi encontrado!");
  window.location.href = "https://minas/xajax/luciana/cadastro-clientes/views/cadastro.php";
}

function validarFormulario() {  // Função para validar o formulário
  let isValid = true;
  let errorMessage = "";

  if ($("#name").val().trim() === "") {
    isValid = false;
    errorMessage += "O campo Nome e obrigatorio.\n";
  }
  if ($("#razao_social").val().trim() === "") {
    isValid = false;
    errorMessage += "O campo Razao Social e obrigatorio.\n";
  }
  if ($("#cnpj").val().trim() === "") {
    isValid = false;
    errorMessage += "O campo CNPJ e obrigatorio.\n";
  }
  if ($("#logradouro").val().trim() === "") {
    isValid = false;
    errorMessage += "O campo Logradouro e obrigatorio.\n";
  }
  if ($("#numero").val().trim() === "") {
    isValid = false;
    errorMessage += "O campo Numero e obrigatorio.\n";
  }
  if ($("#bairro").val().trim() === "") {
    isValid = false;
    errorMessage += "O campo Bairro e obrigatorio.\n";
  }
  if ($("#cidade").val().trim() === "") {
    isValid = false;
    errorMessage += "O campo Cidade e obrigatorio.\n";
  }
  if ($("#estado").val().trim() === "") {
    isValid = false;
    errorMessage += "O campo Estado e obrigatorio.\n";
  }

  if (!isValid) {
    alert(errorMessage); // Exibe a mensagem de erro
  }

  return isValid;
}

function limparCampos() { //funcao para limpar os campos
  $("#name").val("");
  $("#razao_social").val("");
  $("#cnpj").val("");
  $("#logradouro").val("");
  $("#numero").val("");
  $("#bairro").val("");
  $("#cidade").val("");
  $("#estado").val("");
}

function exibirCliente(resultado) { // Função para exibir o cliente
  $("#resultado").html(resultado); 
}

function preCliente() {
  xajax_preCliente();
}
