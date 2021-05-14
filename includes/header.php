<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../img/mst.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Fabrício Romani e Pedro Lill">
    <meta name="description" content="Cooptar - cooperativa agropecuária">
    <meta name="keywords" content="mst, cooperativa, pontão, agropecuária, bovino">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous" rel="stylesheet" />
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/adicionar-animal.css" rel="stylesheet">
    <link href="../css/lista-animais.css" rel="stylesheet">
    <link href="../css/graficos.css" rel="stylesheet">
    <link href="../css/relatorios.css" rel="stylesheet">
    <link href="../css/previsoes.css" rel="stylesheet">
    <link href="../css/configuracoes.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/login.css">
    <title>COOPTAR</title>
</head>

<body>

    <header>
        <input type="checkbox" id="check" onclick="MeuBotaoMenu()">
        <label for="check" class="checkbtn">&#9776;</label>
        <ul id="PrecisoParajs">
            <li><a href="../controller/animalController.php">Animais</a></li>
            <li><a href="../views/graficos.php">Gráficos</a></li>
            <li><a href="../views/previsoes.php">Previsões</a></li>
            <li><a href="../controller/relatorioController.php?acao=prod&filtroMes=00">Relatórios</a></li>
            <li><a href="../controller/animalController.php?acao=adiciona">+  Animal</a></li>
            <li><a href="../controller/producaoController.php?acao=adiciona">+  Produção</a></li>
            <li><a href="../controller/inseminacaoController.php?acao=adiciona">+  Inseminação</a></li>
            <li><a href="../controller/tratamentoController.php?acao=adiciona">+  Tratamento</a></li>
        </ul>
        <a class="icone-configuracoes" href="../views/configuracoes.php"><i class="fas fa-cog"></i></a>
        <a class="logo-header" href="../index.php"><img title="Logo do mst" src="/img/mst.png" /></a>
    </header>

<script src="../js/header.js"></script>
</body>