@extends('template.main')

@section('title', 'Bom dia campeão')

@section('content')




<div class="panel panel-primary">
    <div class="card">
        <div class="card-header">                
            <h1>Nome da aplicação</h1>
            <form>
                <div class="form-group">
                    <label for="selectFile">Selecione o arquivo XML</label>
                    <input type="file" class="form-control-file" id="selectFile">
                </div>
                <input type="submit" value="importar" http="{{route('xml.read')}}">
            </form>
        </div>

        <table class="table table-sm table-dark">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Documento</th>
                    <th scope="col">CEP</th>
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
                    <td>{{$dado->bairro}}</td>
                    <td>{{$dado->cidade}}</td>
                    <td>{{$dado->uf}}</td>
                    <td>{{$dado->telefone}}</td>
                    <td>{{$dado->email}}</td>
                    <td>{{$dado->ativo}}</td>
                    <td>
                        <a class="btn  btn-light text-dark">E</a>
                        <a class="btn  btn-danger text-light">X</a>
                    </td>
                    
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection