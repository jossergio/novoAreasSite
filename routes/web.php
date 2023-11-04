<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view ('/', 'inicial');

Route::get ("/calcular/triangulo/{v1}/{v2}/{v3}/", function (int $v3, int $v2, int $v1) { // Vêm invertidos
    $parametros ["v1"] = $v1;
    $parametros ["v2"] = $v2;
    $parametros ["v3"] = $v3;
    $parametros ["area"] = "Ainda por implementar";
    $parametros ["perimetro"] = $v1 + $v2 + $v3;
    $parametros ["info"] = "Nada a acrescentar";
    return view ("triangulo", $parametros);
});

Route::get ("/calcular/circulo/{v1}/", function (int $v1) {
    $parametros ["v1"] = $v1;
    $parametros ["diametro"] = 2 * $v1;
    $parametros ["area"] = $v1 * $v1 * 3.14;
    $parametros ["perimetro"] = 2 * $v1 * 3.14;
    $parametros ["info"] = "Nada a acrescentar";
    return view ("circulo", $parametros);
});

Route::get ("/calcular/quadrado/{v1}/", function (int $v1) {
    $parametros ["v1"] = $v1;
    $parametros ["area"] = $v1 * $v1;
    $parametros ["perimetro"] = 4 * $v1;
    $parametros ["info"] = "Nada a acrescentar";
    return view ("quadrado", $parametros);
});

Route::get ("/calcular/retangulo/{v1}/{v2}/", function (int $v2, int $v1) { // Vêm invertidos
    $parametros ["v1"] = $v1;
    $parametros ["v2"] = $v2;
    $parametros ["area"] = $v1 * $v2;
    $parametros ["perimetro"] = 2 * ($v1 + $v2);
    $parametros ["info"] = "Nada a acrescentar";
    return view ("retangulo", $parametros);
});

Route::fallback (function () {
    return "Não há referência a essa função ou conjnto de parâmetros para a função!";
});

