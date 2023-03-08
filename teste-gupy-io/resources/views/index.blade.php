<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Teste gupy.io</title>
<body>
    <div class="conteiner">
        <div class="links-container">
            <a href="{{ route('teste.indice') }}" class="w3-button w3-hover-green w3-large w3-round w3-blue w3-border link">questão 1 - Indice</a>
            <br>
            <div class="w3-button w3-hover-green w3-large w3-round w3-blue w3-border link">
                <form action="{{ route('teste.fibonaci') }}">
                    @csrf
                    <label for="">Numero que deseja encontrar na sequencia de Fibonacci</label>
                    <input type="number" name="numero">
                </form>
            </div>
            <br>
            <a href="{{ route('teste.padrao') }}" class="w3-button w3-hover-green w3-large w3-round w3-blue w3-border link">Teste de Sequencia</a>
            <br>
            <a href="{{ route('teste.estrada') }}" class="w3-button w3-hover-green w3-large w3-round w3-blue w3-border link">Caminhão e carro</a>
            <br>
            <div class="w3-button w3-hover-green w3-large w3-round w3-blue w3-border link">
                <form action="{{ route('teste.string') }}">
                    @csrf
                    <label for="">Coloque aqui a string que deseja reverter</label>
                    <input type="text" name="string">
                </form>
            </div>
            <br>
        </div>
    </div>
</body>
<style>
    .container {
    max-width: 720px;
  }

.link {
    width: 100%;
  }
</style>