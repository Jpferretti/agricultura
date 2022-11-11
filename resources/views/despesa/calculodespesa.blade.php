@extends('layout.app')
@section('content')
<div class="questionario">
    <h2>Calcular as despesas para produzir</h2>
    <p>Antes de calcular o lucro da sua produção, é importante saber precisamente os gastos que terá de arcar. Nesta calculadora você pode adicionar todos os itens e seus respectivos preços e receber o resultado final.</p>
    <hr>
    {{Form::open(['route' => 'resultadodespesa', 'method' => 'POST', 'enctype'=>'multipart/form-data'])}}
        {{Form::label('produto', 'Produto')}}
        {{Form::text('produto','',['class'=>'form-control','required','placeholder'=>'Nome completo'])}}
    
        <label for="produto">Produto:</label><br>
        <input type="text" name="produto" id="produto"><br>

        <label for="valor">Valor:</label><br>
        <input type="text" name="valor" id="valor"><br>
        
        <input type="submit" value="Adicionar" name="adicionar" id="adicionar">
        <input type="submit" value="Limpar" name="limpar" id="limpar">
    {{Form::close()}}
</div>
@endsection