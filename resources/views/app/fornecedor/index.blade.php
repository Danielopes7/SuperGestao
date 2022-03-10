<h3>Fornecedor</h3>

{{-- comentario --}}

@php

    // 
    echo "teste";
@endphp

@isset($fornecedores)

    @foreach ( $fornecedores as $indice)
     {{-- {{$fornecedor['nome']}}  --}}
    {{-- @php $fornecedor['nome']= 'fornecedoreteste'@endphp --}}
    {{-- {{$fornecedor['nome']}}  --}}
        indice : {{$indice['nome']}}
        @php $indice['nome']='teste' @endphp
        indice : {{$indice['nome']}}
    @endforeach

    {{$fornecedores[0]['nome']}}
    {{-- Fornecedor: {{ $fornecedores[1]['nome'] }}
    <br>
    Status: {{ $fornecedores[1]['status'] }}
    <br>
    CNPJ: {{ $fornecedores[1]['cnpj'] ?? 'Dado não preenchido' }} --}}

@endisset