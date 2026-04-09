<html>
<head><title>Exercício 13</title></head>
<body>
    <h1>Exercício 13</h1>
    <form method="POST" action="/respexercicio13">
        @csrf
        <label for="valor1">Valor 1:</label><input type="text" name="valor1" id="valor1"><br>
        <button type="submit">Calcular</button>
    </form>
    <a href="/">Voltar ao Menu</a>
</body>
</html>
