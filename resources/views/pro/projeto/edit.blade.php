@extends('home')
@section('conteudo')
<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Projetos: {{ $projeto->nome }}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::model($projeto, ['method'=>'PATCH', 'route'=>['projeto.update', $projeto->idprojeto]])!!}
			{{Form::token()}}

            <div class="form-group">
            	<label for="nome">Nome</label>
            	<input type="text" name="nome" class="form-control" 
            	value="{{ $projeto->nome }}"
            	placeholder="Nome...">
            </div>
			<div class="form-group">
            <label for="inicio">Data Inicial</label>
            <input type="date" name="inicio" class="form-control" placeholder="Inicio...">
        </div>

        <div class="form-group">
            <label for="termino">Data Término</label>
            <input type="date" name="termino" class="form-control" placeholder="Término...">
        </div>

        <div class="form-group">
		     <label for="valor">Valor</label>
            <input type="number" name="valor" class="form-control" placeholder="Valor...">
        </div>

        <div class="form-group">
            <label for="risco">Riscos</label>
            <input type="mumber" name="risco" class="form-control" placeholder="Riscos...">
        </div>

        <div class="form-group">
            <label for="paricipantes">Participantes</label>
            <input type="text" name="participantes" class="form-control" placeholder="Participantes...">
        </div>
            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Salvar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

			{!!Form::close()!!}		
            
		</div>
	</div>
@stop