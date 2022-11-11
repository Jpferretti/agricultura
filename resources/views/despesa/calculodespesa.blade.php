@extends('layout.app')
@section('content')
<div class="questionario">
    <h2>Calcular as despesas para produzir</h2>
    <p>Antes de calcular o lucro da sua produção, é importante saber precisamente os gastos que terá de arcar. Nesta calculadora você pode adicionar todos os itens e seus respectivos preços e receber o resultado final.</p>
    <hr>
    <a href="{{ url('despesa/create') }}">Create</a>
</div>
@endsection