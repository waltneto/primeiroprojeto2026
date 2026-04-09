<html>
<head><title>Exercício 5</title></head>
<body>
    <h1>Exercício 5</h1>
    <form method="POST" action="/respexercicio5">
        @csrf
        <label for="valor1">Valor 1:</label><input type="text" name="valor1" id="valor1"><br>
        <label for="valor2">Valor 2:</label><input type="text" name="valor2" id="valor2"><br>
        <label for="valor3">Valor 3:</label><input type="text" name="valor3" id="valor3"><br>
        <button type="submit">Calcular</button>
    </form>
    <a href="/">Voltar ao Menu</a>
</body>
</html>
