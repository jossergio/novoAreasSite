<?php

namespace objetos;

interface Figura {
    public function tipo (): string;
    public function parametros (): array;
    public function resultados (): array;
}

