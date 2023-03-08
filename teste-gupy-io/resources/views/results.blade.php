<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Teste gupy.io</title>
<body>
    <div style="  display: flex;
    flex-direction: column;
    jusify-content: center;
    align-items: center;">
        @if (isset($soma))
                <h2>O resultado de soma é: {{ $soma }}</h2>
        @elseif(isset($fibo))
            <h2>{{ $fibo }}</h2>
        @elseif(isset($padrao))
            @foreach ($padrao as $key => $value)
                <h2>{{$key}}) {{ $value }} </h2>
            @endforeach
        @elseif(isset($estrada))
        <h2>{{ $estrada }}</h2>
        @elseif(isset($string))
        <h2>O resultado da frase "{{ $stringNormal }}" é : "{{ $string }}"</h2>
        @endif
    </div>
</body>