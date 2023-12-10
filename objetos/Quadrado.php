<?php

namespace objetos;

require_once "Figura.php";

class Quadrado implements Figura {
    
    private float $lado;
    
    function __construct (float $a) {
        $this->lado = round ($a, 2);
    }
    
    public function area (): float {
        return round ($this->lado * $this->lado, 2);
    }
    
    public function perimetro (): float {
        return round (4 * $this->lado, 2);
    }
    
    public function diagonal (): float {
        return round (sqrt (2 * $this->lado * $this->lado), 2);
    }
    
    public function tipo (): string {
        return "quadrado";
    }
    
    public function parametros (): array {
        return ["Lado" => $this->lado];
    }
    
    public function resultados (): array {
        return [
            "Perímetro" => $this->perimetro (),
            "Área" => $this->area (),
            "Diagonal" => $this->diagonal ()];
    }
}
