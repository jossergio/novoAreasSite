<?php

namespace objetos;

require_once "Figura.php";

class Retangulo implements Figura {
    
    private float $base;
    private float $altura;
    
    function __construct (float $b, float $a) {
        $this->base = round ($b, 2);
        $this->altura = round ($a, 2);
    }
    
    public function area (): float {
        return round ($this->base * $this->altura, 2);
    }
    
    public function perimetro (): float {
        return round (2 * ($this->base + $this->altura), 2);
    }
    
    public function diagonal (): float {
        return round (sqrt ($this->base * $this->base + $this->altura * $this->altura), 2);
    }
    
    public function tipo (): string {
        return "retãngulo";
    }
    
    public function informacao_adicional (): string {
        if ($this->base == $this->altura) {
            return "Esse retângulo tem dimensões de um quadrado";
        }
        // else
        return "Nada a acrescentar";
    }
    
    public function parametros (): array {
        return ["Base" => $this->base,
            "Altura" => $this->altura];
    }
    
    public function resultados (): array {
        return [
            "Perímetro" => $this->perimetro (),
            "Área" => $this->area (),
            "Diagonal" => $this->diagonal (),
            "Informação adicional" => $this->informacao_adicional ()];
    }
}

