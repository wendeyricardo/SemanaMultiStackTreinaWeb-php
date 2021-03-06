@extends('app')

@section('titulo', 'Página Inicial')
    
@section('conteudo')

<h1>Lista de Diaristas</h1>
<table class="table">
<thead>
<tr>
  <th scope="col">ID</th>
  <th scope="col">Nome</th>
  <th scope="col">Telefone</th>
  <th scope="col">Ações</th>
</tr>
</thead>
<tbody>
@forelse ($diaristas as $diaristas)
<tr>
  <th scope="row">{{$diaristas-> id}}</th>
  <td>{{$diaristas-> nome_completo}}</td>
  <td>{{ \Clemdesign\PhpMask\Mask::apply($diaristas-> telefone, '(00) 00000-0000')}}</td>
  <td>
    <a href="{{ route('diaristas.edit', $diaristas )}}" class="btn btn-primary">Atualizar</a>
    <a href="{{ route('diaristas.destroy', $diaristas )}}" class="btn btn-danger" onclick="return confirm('tem certeza que deseja apagar?')">Apagar</a>
  </td>
</tr>
@empty
<tr>
<th></th>
<td>Nenhum registro cadastrado</td>
<td></td>
<td></td>
</tr>
@endforelse    
</tbody>
</table>
<a href="{{route('diaristas.create')}}" class="btn btn-success">Nova Diarista</a>

    
@endsection