<?php

namespace objetos;

require_once "Figura.php";

class Circulo implements Figura {
    
    private float $raio;
    
    function __construct (float $r) {
        $this->raio = round ($r, 2);
    }
    
    public function area (): float {
        return round (pi () * $this->raio, 2); // pi (), da biblioteca Math
    }
    
    public function diametro (): float {
        return round (2 * $this->raio, 2);
    }
    
    public function perimetro (): float {
        return round (2 * $this->raio * pi (), 2); // pi (), da biblioteca Math
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
