
  @csrf 
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nome">nome</label>
      <input type="text" name="nome" required class="form-control" value="{{ isset($dados) ? $dados->nome : ''}}" id="nome" placeholder="nome">
    </div>
    <div class="form-group col-md-3">
      <label for="cpf">CPF</label>
      <input type="text" name="cpf" required class="form-control" value="{{ isset($dados) ? $dados->cpf : ''}}" id="cpf" placeholder="cpf">
    </div>
    <div class="form-group col-md-3">
      <label for="cep">CEP</label>
      <input type="cep" name="cep" required class="form-control" value="{{ isset($dados) ? $dados->cep : ''}}" id="cep" placeholder="cep">
    </div>
  </div>

<div class="form-row">
    <div class="form-group col-md-8">
      <label for="endereco">Endereço</label>
      <input type="text" name="endereco" required class="form-control"  value="{{ isset($dados) ? $dados->endereco : ''}}" id="endereco" placeholder="Rua dos Bobos, nº 0">
    </div>

    <div class="form-group col-md-4">
      <label for="uf">UF</label>
      <select required id="uf" name="uf" class="form-control">
        @if(isset($dados))
          @include('ufEditar')
        @else
          @include('ufCadastrar')
        @endif
      </select>
    </div>
</div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="cidade">Cidade</label>
      <input type="text" name="cidade" required class="form-control" value="{{ isset($dados) ? $dados->cidade : ''}}" id="cidade">
    </div>
    <div class="form-group col-md-6">
      <label for="bairro">Bairro</label>
      <input type="text" name="bairro" required class="form-control" value="{{ isset($dados) ? $dados->bairro : ''}}" id="bairro">
    </div>
    
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="telefone">telefone</label>
      <input type="tel" name="telefone" required class="form-control" value="{{ isset($dados) ? $dados->telefone : ''}}" id="telefone">
    </div>
    <div class="form-group col-md-6">
      <label for="email">email</label>
      <input type="email" name="email" required class="form-control" value="{{ isset($dados) ? $dados->email : ''}}" id="email">
    </div>

  </div>

  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" name="ativo" required type="checkbox" id="ativo" 
        @if(isset($dados))
          {{$dados->ativo == '1' ? 'checked = "checked"' : ''}}
        @endif
      >
      <label class="form-check-label" for="ativo">
        Ativo
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Entrar</button>
