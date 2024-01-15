@props(['titulo' => "Meu valor padrão"])

<a {{ $attributes->merge(['class' => "btn btn-outline-light"]) }}>
    <i class="fas fa-download mr-2"></i>
    {{ $titulo }} 
</a>