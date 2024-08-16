$(document).ready(function () {
  $(document).on("click", "#btn-buscar-cnpj", function () {
      buscarClienteCnpj(); // Chama a função para buscar o cliente por CNPJ
  });

  $(document).on("click", "#btn-buscar-nome", function () {
      buscarClienteNome();   // Chama a função para buscar o cliente por nome
  });

  $(document).on("click", "#btn-buscar-editar-cliente", function () {
      buscarEditarCliente(); // Chama a função para buscar o cliente para edição
  });
});

function limparResultadoCliente() { // Função para limpar o resultado da busca
  $("#resultado").html("");
}

function buscarClienteCnpj() { // Função para buscar o cliente por CNPJ
  const cnpj = $("#cnpj").val().trim();
  if (cnpj === "") {
      alert("O campo CNPJ e obrigatorio.");
      return;
  }
  xajax_buscarClienteCnpj(cnpj);
}

function buscarClienteNome() { // Função para buscar o cliente por nome
  const nome = $("#nome").val().trim();
  if (nome === "") {
      alert("O campo Nome e obrigatorio.");
      return;
  }
  xajax_buscarClienteNome(nome);
}

function buscarEditarCliente() { // Função para buscar o cliente para edição
  var myid = $("#res-id").html().trim();
  if (myid && !isNaN(myid)) {
      var url = "editarcliente.php?id=" + myid;
      window.location = url;
  } else {
      alert("ID do cliente nao encontrado.");
  }
}

function exibirCliente(resultado) {  // Função para exibir o cliente
  if (resultado === "") {
      alert("Cliente nao encontrado.");
      $("#resultado").html("<p>Cliente nao encontrado.</p>");
  } else {
      $("#resultado").html(resultado);
  }
}