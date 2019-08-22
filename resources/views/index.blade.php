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

                    <div class="row">
                        <div class="col-md-6">
                            <input type="file" name ="file" class="form-control-file" id="selectFile">
                        </div>
                        <div class="col-md-6 sendButton">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#emailModal">
                            Enviar e-mail
                        </button>
                        <a type="button" href="{{ route('fan.formulario') }}" class="btn btn-primary">
                            Cadastrar Torcedor
                        </a>
                        </div>
                    </div>

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



<!-- Modal formulario de envio de emails-->
<div class="modal fade bd-example-modal-lg" id="emailModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

        <div class="modal-header">
            <h5 class="modal-title">Enviar email para todos os torcedores cadastrados</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body">
            <form method="POST" enctype="multipart/form-data" action="{{ route('fan.email') }}">
            @csrf
                
                <div class="form-group row">
                    <label for="nome" class="col-sm-2 col-form-label">Nome</label>
                    <div class="col-sm-10">
                        <input type="text" name="nome" class="form-control" id="nome">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="assunto" class="col-sm-2 col-form-label">Assunto</label>
                    <div class="col-sm-10">
                        <input type="text" name="assunto" class="form-control" id="assunto">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="mensagem" class="col-sm-2 col-form-label">Mensagem</label>
                    <div class="col-sm-10">
                        <textarea type="textarea" name="texto" class="form-control" rows="5" id="mensagem"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>



