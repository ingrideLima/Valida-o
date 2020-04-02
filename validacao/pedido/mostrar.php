<?php

// Importar funcoes e variaveis
require_once ( "../validar/variaveis.php" );
require_once ( "../validar/funcoes.php" );

// Validar se o usuário chegou a página via formulário
// e limpar post
if(formEnviado($_POST)){
    $erros = gerarMensagensErro($dados);

    if(!empty($erros)){
        echo "<div>";
        echo "<h4>ERRO no Seu Pedido</h4>";
        echo "</br>";
        echo "<p><b>Os seguinte campos:</b></p>";
        foreach($erros as $erro){
            echo '<p>'.$erro.'.</p>';
        }

        echo "</div>";
    }else{
        echo "<div>";
        echo "<h4>Pedido Realizado com SUCESSO</h4>";
        echo "</br>";
        echo "<p><b>Dados do Pedido:</b></p>";
        echo '<p>Prato principal: '.$_POST['prato_principal'].'.</p>';
        echo '<p>Acompanhamento: '.$_POST['opcao'].'.</p>';
        echo '<p>Adicionais:</p>';
        echo '<ul>';
        for ($i = 1; $i <= 6; $i++) {
            if(isset($_POST["$i"])){
                echo '<li>'.$_POST["$i"].'</li>';
            }
        }
        echo '</ul>';

        echo "<p><b>Dados do cliente:</b></p>";
        echo '<p>Nome: '.$_POST['nome'].'.</p>';
        echo '<p>Endereço: '.$_POST['endereco'].'.</p>';
        echo '<p>Telefone: '.$_POST['telefone'].'.</p>';
        echo "</div>";
    }
}

// echo "<br><br>";
// var_dump( $dados );
// echo "<br><br>";
// var_dump( $erros );

?>