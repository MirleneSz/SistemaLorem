@extends('home')
@section('conteudo')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Lista de Projetos <a href="projeto/create"><button class="btn btn-success">Novo</button></a></h3>
		@include('pro.projeto.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Nome</th>
					<th>Data Inicio</th>
					<th>Data Termino</th>
					<th>Valor do Projeto</th>
					<th>Risco</th>
					<th>Participantes</th>
					<th>Opções</th>
				</thead>
               @foreach ($produtos as $pro)
				<tr>
					<td>{{ $pro->nome}}</td>
					<td>{{ $pro->inico}}</td>
					<td>{{ $pro->termino}}</td>
					<td>{{ $pro->valor}}</td>
					<td>{{ $pro->risco}}</td>
					<td>{{ $pro->participantes}}</td>
					<td>
						<a href="{{URL::action('ProjetoController@edit',$pro->idprojeto)}}"><button class="btn btn-info">Editar</button></a>
                         <a href="" data-target="#modal-delete-{{$pro->idprojeto}}" data-toggle="modal"><button class="btn btn-danger">Excluir</button></a>
					</td>
				</tr>
				@include('pro.projeto.modal')
				@endforeach
			</table>
		</div>
		{{$projetos->render()}}
	</div>
</div>
@stop