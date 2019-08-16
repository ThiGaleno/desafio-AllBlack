@extends('template.main')

@section('title', 'Bom dia campeão')

@section('content')
    
    
    <div class="container">
        <h1>Nome da aplicação</h1>
        <div class="row">
            <form>
                <div class="form-group">
                    <label for="selectFile">Selecione o arquivo XML</label>
                    <input type="file" class="form-control-file" id="selectFile">
                </div>
            </form>
        </div>
    </div>
    
@endsection