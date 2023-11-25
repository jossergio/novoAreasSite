<?php

namespace objetos;

require_once "Figura.php";

class Circulo implements Figura {
    
    private float $raio;
    
    function __construct (float $r) {
        $this->raio = $r;
    }
    
    public function area (): float {
        return 3.14 * $this->raio;
    }
    
    public function diametro (): float {
        return 2 * $this->raio;
    }
    
    public function perimetro (): float {
        return 2 * $this->raio * 3.14;
    }
    
    public function tipo (): string {
        return "círculo";
    }
    
    public function parametros (): array {
        return ["Raio" => $this->raio];
    }
    
    public function resultados (): array {
        return [
            "Diâmetro" => $this->diametro (),
            "Perímetro" => $this->perimetro (),
            "Área" => $this->area ()];
    }
}
