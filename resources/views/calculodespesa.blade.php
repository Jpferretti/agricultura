<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>    
    <div class="questionario">
        <h2>Calcular as despesas para produzir</h2>
        <p>Antes de calcular o lucro da sua produção, é importante saber precisamente os gastos que terá de arcar. Nesta calculadora você pode adicionar todos os itens e seus respectivos preços e receber o resultado final.</p>
        <hr>
        {!! Form::open(['route' => '']) !!}
            {!!<label for="produto">Produto:</label><br>!!}
            <input type="text" name="produto" id="produto"><br>

            <label for="valor">Valor:</label><br>
            <input type="text" name="valor" id="valor"><br>
            
            <input type="submit" value="Adicionar" name="adicionar" id="adicionar">
            <input type="submit" value="Limpar" name="limpar" id="limpar">
        </form>
    </div>
</body>
</html>