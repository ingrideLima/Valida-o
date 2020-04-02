<?php

// Limpar dados para evitar possíveis scripts
function __e($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}
function limparVetor($varPost) {
    $arrayLimpo = [];
    foreach ($varPost as $indice => $valor) {
        $arrayLimpo[$indice] = __e($valor);
    }
    return $arrayLimpo;
}

// Verificar se o formulário foi enviado
function formEnviado($postArray) {
    global $dados;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Limpar post
        $dados = limparVetor($postArray);
        return true;
    } else {
        header('Location: ../index.php');
        die();
    }
}

// Criar mensagem de erro
function gerarMensagensErro($postArray) {
    global $mensagem_erro;

    if(!isset($postArray['opcao'])){
       $mensagem_erro['opcao_vazio'] = "Precisa escolher um acompanhamento";
    }

    if ($postArray["prato_principal"] == "") {
        $mensagem_erro["prato_principal_vazio"] = "Informe um prato principal";
    }

    if(!isset($postArray["confirmo"])){
        $mensagem_erro["confirmo_vazio"] = "Precisa selecionar o campo confirmo o pedido";
    }

    if($postArray["nome"] == ""){
        $mensagem_erro["nome_vazio"] = "Precisa preencher o campo nome";
    }

    if($postArray["endereco"] == ""){
        $mensagem_erro["endereco_vazio"] = "precisa preencher o endereço";
    }

    if($postArray["telefone"] == ""){
        $mensagem_erro["telefone_vazio"] = "precisa preencher o telefone";
    }

    return $mensagem_erro;
}
?>