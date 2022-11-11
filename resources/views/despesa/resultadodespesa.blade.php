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
        <table>
            <tr>
                <th>Produto</th>
                <th>Valor</th>
            </tr>
        @foreach($oProduto as $oProduto)
            <tr>
                <td>{{$oProduto->name}}</td>
                <td>{{$oProduto->valor}}</td>
            </tr>   
        @endforeach
        </table>
    </div>
</body>
</html>