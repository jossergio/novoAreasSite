<?php

namespace objetos;

require_once "Figura.php";

class Quadrado implements Figura {
    
    private float $lado;
    
    function __construct (float $a) {
        $this->lado = $a;
    }
    
    public function area (): float {
        return $this->lado * $this->lado;
    }
    
    public function perimetro (): float {
        return 4 * $this->lado;
    }
    
    public function diagonal (): float {
        return sqrt (2 * $this->lado * $this->lado);
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
