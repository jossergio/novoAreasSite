<?php

namespace objetos;

require_once "Figura.php";

class Triangulo implements Figura {
    
    private float $v1;
    private float $v2;
    private float $v3;
    private int $tipo; // Tipo do triângulo que as arestas formam
    private array $strTipo; // Será um vetor
    
    function __construct (float $v1, float $v2, float $v3) {
        $this->strTipo = array (
            -1 => "Não forma triângulo",
            0 => "Triâgulo retângulo",
            1 => "Triângulo retãgulo isósceles",
            2 => "Triângulo escaleno",
            3 => "Triângulo equilátero",
            4 => "Triângulo isósceles"
        ); // $this->tipo
        if ($v1 < $v2) {
            $tmp = $v1;
            $v1 = $v2;
            $v2 = $tmp;
        }
        if ($v1 < $v3) {
            $tmp = $v1;
            $v1 = $v3;
            $v3 = $tmp;
        }
        // Nesse ponto, v1 contém a maior das arestas
        $this->v1 = $v1;
        $this->v2 = $v2;
        $this->v3 = $v3;
        if ($v1 >= $v2 + $v3) {
            $this->tipo = -1; // Não forma triângulo
        } elseif ($v1 * $v1 == ($v2 * $v2 + $v3 * $v3)) { // $v1 contém o maior, logo, pode ser hipotenusa se esse cálculo for verdadeiro
            if ($v2 == $v3) {
                $this->tipo = 1; // Retângulo isósceles
            } else {
                $this->tipo = 0; // Retãngulo comum
            }
        } elseif ($v1 == $v2 && $v2 == $v3) {
            $this->tipo = 3; // Triângulo equilátero
        } elseif ($v1 == $v2 || $v1 == $v3 || $v2 == $v3) {
            $this->tipo = 4; // Isósceles
        } else {
            $this->tipo = 2; // Escaleno
        }
        if ($this->tipo == 4) { // Isósceles
            // Ajusta para que v1 fique com o lado diferente
            if ($this->v2 != $this->v3) {
                if ($this->v1 == $this->v2) { // v3 é o diferente
                    $tmp = $this->v1;
                    $this->v1 = $this->v3;
                    $this->v3 = $tmp;
                } else { // v1 só pode ser igual a v3; ou seja, v2 é o diferente
                    $tmp = $this->v1;
                    $this->v1 = $this->v2;
                    $this->v2 = $tmp;
                }
            }
        }
    }
    
    public function area (): float {
        $retorno = 0;
        switch ($this->tipo) {
            case 0: // Retângulo
            case 1: // Retângulo isósceles
                $retorno = ($this->v2 * $this->v3) / 2; // Lembrar que v1 é a hipotenusa
                break;
            case 2:
                $retorno = 0; // Ainda por implementar
                break;
            case 3: // Equilátero
            case 4: // Isósceles
                $retorno = ($this->v1 * $this->altura ()) / 2; // No isósceles, v1 é a base, no equilátero, tanto faz
        }
        return $retorno; // Ainda por implementar
    }
    
    public function perimetro (): float {
        return $this->tipo != -1 ? $this->v1 + $this->v2 + $this->v3 : 0;
    }
    
    public function altura (): float {
        $retorno = 0;
        switch ($this->tipo) {
            case 0: // Retângulo
            case 1: // Retângulo isósceles
                $retorno = ($this->v2 * $this->v3) / $this->v1; // Lembrar que v1 é a hipotenusa
                break;
            case 2:
                $retorno = 0; // Ainda por implementar
                break;
            case 3: // Equilátero
            case 4: // Isósceles
                $tmp = $this->v1 / 2; // Metade da base; no isósceles, v1 é a base; no equilátero, tanto faz
                $retorno = sqrt ($this->v2 * $this->v2 - $tmp * $tmp); // 
        }
        return $retorno; // Ainda por implementar
    }
    
    public function tipo (): string {
        return "triângulo";
    }
    
    public function parametros (): array {
        return ["Aresta 1" => $this->v1,
            "Aresta 2" => $this->v2,
            "Aresta 3" => $this->v3];
    }
    
    public function tipo_triangulo (): string {
        return $this->strTipo [$this->tipo];
    }
    
    public function resultados (): array {
        return [
            "Perímetro" => $this->perimetro (),
            "Área" => $this->area (),
            "Altura" => $this->altura (),
            "Tipo do triângulo" => $this->tipo_triangulo (),
            "Informação adicional" => $this->tipo == -1 ? "Não forma triângulo" : "Nada a adicionar"];
    }
}

