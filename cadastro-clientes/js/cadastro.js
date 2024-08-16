$(document).ready(function () {
  $(document).on("click", "#btn-salvar", function () {  // Ao clicar no botão salvar
    salvarCliente();
  });

  $(document).on("click", "#btn-limpar", function () { // Ao clicar no botão limpar
    limparCampos();
  });

  console.log("Documento pronto. Iniciando atualização de clientes.");
  exibirClientes(); // Chama a função para exibir clientes ao carregar a página

 
});

function limparResultadoCliente() { 
  $("#resultado").html(""); 
}

function salvarCliente() { 
  if (!validarFormulario()) { // Valida o formulário
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

  console.log("Salvando cliente:", { name, razaoSocial, cnpj, logradouro, numero, bairro, cidade, estado });

  // Chama a função XAJAX para salvar o cliente
  xajax_salvar(
    name,razaoSocial,cnpj,logradouro,numero,bairro,cidade,estado);

  limparCampos(); // Limpa os campos após o cadastro
}

function exibirClientes() {
  console.log("Chamando xajax_exibirClientes...");
  xajax_exibirClientes(); // Verifique se a função xajax_exibirClientes está registrada e funcionando
}

function atualizarTabelaClientes(clientes) {
  console.log("Atualizando tabela de clientes com os dados:", clientes);
  
  const tabela = document.getElementById('clientes-body'); 
  tabela.innerHTML = ''; 

  clientes.forEach(cliente => {  // Para cada cliente, cria uma linha na tabela
      const row = tabela.insertRow();
      row.insertCell(0).innerText = cliente.nome_fantasia;
      row.insertCell(1).innerText = cliente.razao_social;
      row.insertCell(2).innerText = cliente.cnpj;
      
  });
}

function validarFormulario() { // Função para validar o formulário
  let isValid = true;
  let errorMessage = "";

  if ($("#name").val().trim() === "") {
    isValid = false;
    errorMessage += "CAMPO NOME E  OBRIGATORIO.\n";
  }
  if ($("#razao_social").val().trim() === "") {
    isValid = false;
    errorMessage += "CAMPO RAZAO SOCIAL E OBRIGATORIO.\n";
  }
  if ($("#cnpj").val().trim() === "") {
    isValid = false;
    errorMessage += "CAMPO CNPJ E  OBRIGATORIO.\n";
  }
  if ($("#logradouro").val().trim() === "") {
    isValid = false;
    errorMessage += "CAMPO LOGRADOURO E OBRIGATORIO.\n";
  }

  if ($("#numero").val().trim() === "") {
    isValid = false;
    errorMessage += "CAMPO NUMERO E OBRIGATORIO.\n";
  }
  if ($("#bairro").val().trim() === "") {
    isValid = false;
    errorMessage += "CAMPO BAIRRO E OBRIGATORIO.\n";
  }
  if ($("#cidade").val().trim() === "") {
    isValid = false;
    errorMessage += "CAMPO CIDADE E OBRIGATORIO.\n";
  }
  if ($("#estado").val().trim() === "") {
    isValid = false;
    errorMessage += "CAMPO ESTADOE E OBRIGATORIO.\n";
  }

  if (!isValid) {
    alert(errorMessage); // Exibe a mensagem de erro
  }

  return isValid;
}

function limparCampos() {   // Função para limpar os campos
  $("#name").val("");
  $("#razao_social").val("");
  $("#cnpj").val("");
  $("#logradouro").val("");
  $("#numero").val("");
  $("#bairro").val("");
  $("#cidade").val("");
  $("#estado").val("");
}
