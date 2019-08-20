@extends('template.main')

@section('title', 'Bom dia campeão')

@section('content')

<div class="panel panel-primary">
    <div class="card">
        <div class="card-header">                
            <h1>Nome da aplicação</h1>
            <form method="POST" enctype="multipart/form-data" action="{{ route('fan.extract') }}">
                @csrf
                <div class="form-group">
                    <label for="selectFile">Selecione o arquivo XML</label>
                    <input type="file" name ="file" class="form-control-file" id="selectFile">
                </div>
                <input type="submit" value="importar">
            </form>
        </div>

        <table class="table table-sm table-dark">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Documento</th>
                    <th scope="col">CEP</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Bairro</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">UF</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ativo</th>
                    <th scope="col">ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dados as $dado)
                <tr>
                    <td>{{$dado->nome}}</td>
                    <td>{{$dado->cpf}}</td>
                    <td>{{$dado->cep}}</td>
                    <td>{{$dado->endereco}}</td>
                    <td>{{$dado->bairro}}</td>
                    <td>{{$dado->cidade}}</td>
                    <td>{{$dado->uf}}</td>
                    <td>{{$dado->telefone}}</td>
                    <td>{{$dado->email}}</td>
                    <td>{{$dado->ativo}}</td>
                    <td>
                        <a class="btn  btn-light text-dark" href="{{ route('fan.formulario',$dado->id) }}">E</a>
                        <a class="btn  btn-danger text-light" href="{{ route('fan.delete',$dado->id) }}">X</a>
                    </td>
                    
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection