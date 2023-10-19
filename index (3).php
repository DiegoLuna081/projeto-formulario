<?php
//Depois de pronto, obtive a seguinte rota: http://localhost/projeto-formulario/index%20(3).php?nomeCandidato=Diego+Augusto+Batista+de+Luna&idadeCandidato=&genero=Feminino&possuiConhecimentos=N%C3%A3o&trabalhouProgramacao=N%C3%A3o&comoNosConheceu=midiasSociais&codigoPromocional=
//Aqui eu utilizei a verificação via GET para exibir em tela o que foi feito
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Aqui eu condicionei a variável if para exibir via get os nomes das variáveis que quero exibir na URL. O isset está condicionando em TRUE OR FALSE as informações
    if (isset($_GET["nomeCandidato"]) &&
        isset($_GET["idadeCandidato"]) &&
        isset($_GET["genero"]) &&
        isset($_GET["possuiConhecimentos"]) &&
        isset($_GET["comoNosConheceu"]) 
        ) {
        
        // Aqyi eu atribui os valores das variáveis ao getara exibir tudo o que for digitato
        $nomeCandidato = $_GET["nomeCandidato"];
        $idadeCandidato = $_GET["idadeCandidato"];
        $genero = $_GET["genero"];
        $possuiConhecimentos = $_GET["possuiConhecimentos"];
        $trabalhouProgramacao = $_GET["trabalhouProgramacao"];
        $comoNosConheceu = $_GET["comoNosConheceu"];
        // Pela função ECHO, obrigo o PHP a exibir em tela o que foi definido por mim, note que o campo password por exemplo não é exibido em tela
        echo "Nome do Candidato: " . $nomeCandidato . "<br>";
        echo "Idade do Candidato: " . $idadeCandidato . "<br>";
        echo "Gênero: " . $genero . "<br>";
        echo "Possui Conhecimentos em Programação: " . $possuiConhecimentos . "<br>";
        echo "Já Trabalhou na Área de Programação: " . $trabalhouProgramacao . "<br>";
        echo "Como você nos conheceu? " . $comoNosConheceu . "<br>";
    } else {
        echo "Os dados não foram preenchidos corretamente.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Lista de Espera: Turma PHP com o Professor Simon</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        select {
            height: 35px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Lista de Espera: Turma PHP com o Professor Simon</h2>
        <form method="GET" action="">
            <label for="nomeCandidato">Digite o seu nome completo:</label>
            <input type="text" name="nomeCandidato" id="nomeCandidato">
            <br><br>
            <label for="idadeCandidato">Digite a sua idade:</label>
            <input type="number" name="idadeCandidato" id="idadeCandidato">
            <br><br>
            <label for="genero">Escolha o seu gênero:</label>
            <select id="genero" name="genero">
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
                <option value="Prefiro não informar">Prefiro não informar</option>
            </select>
            <br><br>
            <label for="possuiConhecimentos">Você possui algum conhecimento na área de programação?:</label>
            <select id="conhecimentos" name="possuiConhecimentos">
                <option value="Sim">Sim</option>
                <option value="Não">Não</option>
            </select>
            <br><br>
            <label for="trabalhouProgramacao">Você já trabalhou na área de programação?:</label>
            <select id="trabalhouProgramacao" name="trabalhouProgramacao">
                <option value="Sim">Sim</option>
                <option value="Não">Não</option>
            </select>
            <label for="comoNosConheceu">Como você nos conheceu?</label>
            <select id="comoNosConheceu" name="comoNosConheceu">
                <option value="amigos">Amigos</option>
                <option value="midiasSociais">Mídias Sociais</option>
                
            </select>
            <br><br>
            <label for="codigoPromocional">Digite o seu código promocional:</label>
            <input type="password" name="codigoPromocional" id="codigoPromocional">
            <br><br>
            <br><br>
            <input type="submit" value="Enviar">
            <br><br>
        </form>
    </div>
</body>
</html>