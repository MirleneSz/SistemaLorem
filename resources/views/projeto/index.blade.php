@extends('home')
@section('conteudo')
<!DOCTYPE html>
<html lang="pt-br">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>

    <form action="{{route('create-projeto')}}" method="POST">

        @csrf

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control" placeholder="Nome...">
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
            <button class="btn btn-primary" type="submit">Cadastrar</button>
            <button class="btn btn-danger" type="reset">Cancelar</button>
        </div>
    </form>

    @if(session('success'))
    <h1>{{session('success')}}</h1>
    @endif

    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-condensed table-hover">
                        <thead>
                            <th>Nome</th>
                            <th>Data Inicial</th>
                            <th>Data Término</th>
                            <th>Valor do Projeto</th>
                            <th>Riscos</th>
                            <th>Participantes</th>
                        </thead>

                        @foreach ($projetos as $pro)

                        <tr>

                            <td>{{$pro->nome}}</td>
                            <td>{{$pro->inicio}}</td>
                            <td>{{$pro->termino}}</td>
                            <td>{{$pro->valor}}</td>
                            <td>{{$pro->risco}}</td>
                            <td>{{$pro->participantes}}</td>

                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>

</body>
</html>
@stop

