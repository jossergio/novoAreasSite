<?php

namespace objetos;

require_once "Figura.php";

class Retangulo implements Figura {
    
    private float $base;
    private float $altura;
    
    function __construct (float $b, float $a) {
        $this->base = $b;
        $this->altura = $a;
    }
    
    public function area (): float {
        return $this->base * $this->altura;
    }
    
    public function perimetro (): float {
        return 2 * ($this->base + $this->altura);
    }
    
    public function tipo (): string {
        return "retãngulo";
    }
    
    public function parametros (): array {
        return ["Base" => $this->base,
            "Altura" => $this->altura];
    }
    
    public function resultados (): array {
        return [
            "Perímetro" => $this->perimetro (),
            "Área" => $this->area ()];
    }
}

