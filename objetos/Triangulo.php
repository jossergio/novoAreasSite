<?php

namespace objetos;

require_once "Figura.php";

class Triangulo implements Figura {
    
    private float $v1;
    private float $v2;
    private float $v3;
    
    function __construct (float $v1, float $v2, float $v3) {
        $this->v1 = $v1;
        $this->v2 = $v2;
        $this->v3 = $v3;
    }
    
    public function area (): float {
        return 0; // Ainda por implementar
    }
    
    public function perimetro (): float {
        return $this->v1 + $this->v2 + $this->v3;
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
        return "[ainda por implementar]";
    }
    
    public function resultados (): array {
        return [
            "Perímetro" => $this->perimetro (),
            "Área" => $this->area (),
            "Tipo do triângulo" => $this->tipo_triangulo (),
            "Informação adicional" => "Ainda implementando"];
    }
}

