<!DOCTYPE html>

<html lang="pt-br">
<head>
    <title>Cálculo de áreas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <link rel="stylesheet" href="calcular.css">
</head>

<body class="bg-secondary">
<div class="container text-bg-primary">
    <form id="formulario">
    @csrf
    <div class="row border border-5">
        <div class="col-lg-2">
            <div class="container-flush"><h2>Tipo de figura</h2></div>
            <div class="container-flush">
                <select id="seletor">
                    <option value="0">Triângulo</option>
                    <option value="1">Círculo</option>
                    <option value="2">Quadrado</option>
                    <option value="3">Retãngulo</option>
                </select>
            </div>
        </div><!-- Coluna 1 - Seletor -->
        <div class="col-lg-3"><!-- Coluna 2 -->
            <div class="container-flush"><h2>Valores necessários</h2></div>
            <div class="row py-1" id="linha_valor1">
                <div class="col text-end"><label id="lbl1" for="valor1">Valor 1</label></div>
                <div class="col"><input type="number" id="valor1" class="valores" /></div>
            </div><!-- linha_valor1 -->
            <div class="row py-1" id="linha_valor2">
                <div class="col text-end"><label id="lbl2" for="valor2">Valor 2</label></div>
                <div class="col"><input type="number" id="valor2" class="valores" /></div>
            </div><!-- linha_valor2 -->
            <div class="row py-1" id="linha_valor3">
                <div class="col text-end"><label id="lbl3" for="valor3" />Valor 3</label></div>
                <div class="col"><input type="number" id="valor3" class="valores" /></div>
            </div><!-- linha_valor3 -->
            <div class="container-fluid">
                <input type="button" id="btnCalcular" value="Calcular" /t>
            </div>
        </div><!-- Coluna 2 - Valores -->
        <div class="col-lg-5" style="height=100rem">
            <div class="container-flush"><h2>Resultados</h2></div>
            <div id="resultado" class="container-fluid""></div>
        </div><!-- Coluna 3 - Resultados -->
        <div class="col-lg-2">
            <h2>Sobre</h2>
            <p class="border-start border-5 border-info px-2 lead">Projeto básico para testar funcionalidades de diversos itens em produção de sites</p>
        </div><!-- Coluna 4 - Sobre -->
    </div><!-- row -->
    </form>
</div>
</body>
</html>

<script src="calcular.js"></script>

