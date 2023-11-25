<p class="topicos_quadro">Acionada função e passados parâmetros para calcular informações de <span class="destaque_quadro">{{ $figura->tipo () }}</span>.</p>
<p class="subtopicos_quadro">Parâmetros passados:</p>
@foreach ($figura->parametros () as $nome => $valor)
    <p class="texto_quadro">{{ $nome }}: {{ $valor }}</p>
@endforeach
<p class="subtopicos_quadro">Valores calculados</p>
@foreach ($figura->resultados () as $nome => $valor)
    <p class="texto_quadro">{{ $nome }}: {{ $valor }}</p>
@endforeach

