<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Delivery</title>
    <link href="css/pedidos.css" rel="stylesheet" type="text/css" />
    <meta charset="utf-8" />
</head>
<body>
    <div id="wrap">
        <form action="pedido/mostrar.php" method="POST" id="delivery-form">
        <div>
            <div class="cont_order">
               <fieldset>
                    <legend>Monte sua refeição</legend>
                    <div class='field_container'>
                    <label >Acompanhamento</label>
                        <label class='radiolabel'><input type="radio" name="opcao" value="Arroz branco">Arroz branco</label><br/>
                        <label class='radiolabel'><input type="radio" name="opcao" value="Macarrao alho-e-oleo">Macarrão alho-e-óleo</label><br/>
                        <label class='radiolabel'><input type="radio" name="opcao" value="Farofa de calabresa">Farofa de calabreza</label><br/>
                        <label class='radiolabel'><input type="radio" name="opcao" value="Salada de Folhas">Salada de folhas</label><br/>
                    </div>
                    
                    <div class='field_container'>
                        <label for="flavor">Prato principal:</label >
                        <select id="flavor" name='prato_principal' >
                            <option value="">Escolha uma opção</option>
                            <option value="Bife a parmegiana">Bife à parmegiana</option>
                            <option value="Frango a parmegiana">Frango à parmegiana</option>
                            <option value="Lasanha de brocolis">Lasanha de brócolis</option>
                            <option value="Peixe frito">Peixe frito</option>
                        </select>
                    </div>

                    <div class='field_container'>
                        <label >Adicionais:</label>
                        <label><input type="checkbox" value="Batata-frita" name="1" />Batata-frita</label>
                        <label><input type="checkbox" value="Batata-palha" name="2" />Batata-palha</label>
                        <label><input type="checkbox" value="Oregano"  name="3" />Orégano</label>
                        <label><input type="checkbox" value="Vinagrete" name="4" />Vinagrete</label>
                        <label><input type="checkbox" value="Tomate" name="5" />Tomate</label>
                        <label><input type="checkbox" value="Cebola" name="6" />Cebola</label>
                    </div>

                    <div class='field_container'>
                        <label class="inlinelabel"><input type="checkbox" id="agree" value="1" name='confirmo' /> Confirmo que as opções são verdadeiras e que está de acordo com o meu pedido.</label>
                    </div>

                </fieldset>
            </div>
            
        	<div class="cont_details">
            	<fieldset>
                <legend>Informações do cliente</legend>
                    <label for='name'>Nome completo</label>
                    <input type="text" id="name" name="nome" />
                    <br/>
                    <label for='address'>Endereço de entrega</label>
                    <input type="text" id="address" name="endereco" />
                    <br/>
                    <label for='phonenumber'>Telefone</label>
                    <input type="text"  id="phonenumber" name="telefone" />
                    <br/>
                </fieldset>
            </div>
            <button type="submit">Fazer Pedido</button>
        </div>  
       </form>
	</div>
</body>
</html>