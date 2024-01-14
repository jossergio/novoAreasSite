function setVisible (obj, lbl, show, texto) {
    if (show) {
        obj.show ();
        lbl.html (texto);
    } else {
        obj.hide ();
    }
} // setVisible

function estruturar (figura) {
    let atual = figuras [figura];
    setVisible ($("#linha_valor1"), $("#lbl1"), atual.valor1, atual.lbl1);
    setVisible ($("#linha_valor2"), $("#lbl2"), atual.valor2, atual.lbl2);
    setVisible ($("#linha_valor3"), $("#lbl3"), atual.valor3, atual.lbl3);
} // estruturar

$("#btnCalcular").click (function () {
    let seletor = Number ($("#seletor").val ());
    let valor1 = Number ($("#valor1").val ());
    let valor2 = Number ($("#valor2").val ());
    let valor3 = Number ($("#valor3").val ());
    let url = "/calcular/" + figuras [seletor].url;
    switch (seletor) { // Observar a sequência de case, para evitar break e reduzir código; os parâmetros vão invertidos
        case 0: // Triângulo
            url += valor3+ "/";
        case 3: // Retângulo
            url += valor2 + "/";
        case 1: // Círculo
        case 2: // Quadrado
            url += valor1 + "/";
    } // switch
    $.get (url, function (resposta, status) {
        if (status !== "success") {
            alert (status + ": " + xheader.statusText);
        } else {
            $("#resultado").html (resposta);
        }
    }); // load
}); // btnCalcular click

$("#seletor").change(function () { estruturar ($("#seletor").val ()); });
$(document).ready (function () { estruturar ($("#seletor").val ()); });

const figuras = [
    {valor1: true, valor2: true, valor3: true, lbl1: "Lado 1", lbl2: "Lado 2", lbl3: "Lado 3", url: "triangulo/"}, // Triẫngulo
    {valor1: true, valor2: false, valor3: false, lbl1: "Raio", lbl2: "", lbl3: "", url: "circulo/"}, // Círculo
    {valor1: true, valor2: false, valor3: false, lbl1: "Lado", lbl2: "", lbl3: "", url: "quadrado/"}, // Quadrado
    {valor1: true, valor2: true, valor3: false, lbl1: "Base", lbl2: "Altura", lbl3: "", url: "retangulo/"} // Retângulo
];

// alert ("Carregou calcular.js");

