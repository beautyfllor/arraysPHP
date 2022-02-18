<?php
    //Criando um array e atribuindo valores
    $nomes = array('José da Silva' , 'Maria da Silva', 'André Sousa');
    
    //Exibe um texto ou um conteúdo de uma variável
        //(que não seja um array);
    //echo($nomes);

    //Exibe um texto ou um conteúdo de uma variável
        //(mesmo sendo um array) - sem detalhes 
            //técnicos, mostrando a posição
    //print_r($nomes);

    //Exibe os dados de um objeto, array ou variável
        //Mostra detalhes técnicos
    //var_dump($nomes);

    //Usando echo p/ printar o valor de um índice do array
    //echo($nomes[1]);

    //Misturando dados no array
    $dados = array('José da Silva', 20, 1850.56);
    //var_dump($dados);

    //Declarando um array
    $nomesFuncionarios = array();
    
    //Atribuindo dados individuais no array
    $nomesFuncionarios[0] = 'Luiz Silva';
    $nomesFuncionarios[2] = 30;
    //var_dump($nomesFuncionarios);

    $nomesClientes = array('Francisco', 'Luiz', 'Andreia', 'André');

    //Forma 1 de extrair dados com repetição
    $cont = 0;

    //Permite retornar a quantidade de elementos de um array
    $qtde = count($nomesClientes);

    //Exibindo dados pelo 'while'
    echo("While**" . '<br>');
    while($cont < $qtde) {
        echo($nomesClientes[$cont] . '<br>');
        $cont++;
    }
    //Exibindo dados pelo 'for'
    echo('For**' . '<br>');
    for($cont = 0; $cont < $qtde; $cont++)
        echo($nomesClientes[$cont] . '<br>');

    //Exibindo dados pelo 'foreach' - próprio para arrays
        //Permite criar uma cópia do array fazendo já a contagem
        //de quantos elementos existem no array, e permitindo que
        //na exibição dos valores não seja necessário especificar 
        //o indice do array. 
        echo('Foreach**' . '<br>');
    foreach($nomesClientes as $cliente)
        echo($cliente . '<br>');

    //Trabalhando com array (Chave-Valor)
        //Método chave-valor - acessamos o valor
        //somente pela referência da chave
    $produtos = array(
        "nome"          => "Teclado",
        "descricao"     => "Teclado da cor preto e cinza.",
        "qtde"          => 50,
        "valorUnitario" => 80.45,
        "cor"           => "Preto"
    );
    echo('<pre>'); //Imprime na tela da forma que foi escrita no código
        var_dump($produtos);
    echo('</pre>');

    //echo($produtos["nome"]); //É necessário colocar o nome da chave

    /*Exemplo utilizando o índice automático*/

    //Trabalhando com array de índice, chave e valor
    $produtosInformatica = array(
        array(
            "nome"      => "Teclado",
            "descrição" => "Teclado RGB",
            "cor"       => "Preto",
            "valor"     => 100.50,
            "qtde"      => 20
        ), 
        array(
            "nome"      => "Mouse",
            "descrição" => "Mouse com 5 botões",
            "cor"       => "cinza",
            "valor"     => 70.30,
            "qtde"      => 100
        )
    );

    echo('<pre>');
        var_dump($produtosInformatica);
    echo('</pre>');

    //Para exibir dados de um array (índice, chave, valor) temos que
    //primeiro especificar qual é o índice do array principal, depois
    //colocamos a qual chave iremos extrair o valor.
    echo($produtosInformatica[0]["nome"]);
    echo($produtosInformatica[0]["valor"]);

    //Exemplo utilizando a chave como índice no primeiro array
    /*Podemos atribuir uma chave nos arrays interiores, ao invés de deixar o índice*/
    $produtosInformatica = array(
        "listTeclados" => array(
            "nome"      => "Teclado",
            "descrição" => "Teclado RGB",
            "cor"       => "Preto",
            "valor"     => 100.50,
            "qtde"      => 20
        ), 
        "listMouses" => array(
            "nome"      => "Mouse",
            "descrição" => "Mouse com 5 botões",
            "cor"       => "cinza",
            "valor"     => 70.30,
            "qtde"      => 100
        )
    );

    echo($produtosInformatica["listTeclados"]["nome"]);
    echo($produtosInformatica["listMouses"]["valor"]);

    //foreach - para o array com chave ao invés de índice
    foreach($produtosInformatica as $produtos) {
        echo('<br>' . $produtos["nome"] . '<br>');
        echo('<br>' . $produtos["qtde"] . '<br>');
    }
?>