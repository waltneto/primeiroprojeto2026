<html>
<head><title>Exercício 6</title></head>
<body>
    <h1>Exercício 6</h1>
    <form method="POST" action="/respexercicio6">
        @csrf
        <label for="valor1">Valor 1:</label><input type="text" name="valor1" id="valor1"><br>
        <button type="submit">Calcular</button>
    </form>
    <a href="/">Voltar ao Menu</a>
</body>
</html>
