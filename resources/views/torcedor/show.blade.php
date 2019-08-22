@extends('layouts.app')

@section('stylecss')
<style>
.form-control {
    font-weight: bold;
}

</style>
@endsection
@section('javascript')
<script type="text/javascript">
function validate_delete() {
    return confirm('Excluir o registro atual? Essa ação não pode ser desfeita.');
}
</script>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Perfil do Torcedor</div>
                <form action="{{ url('torcedor/'.$data->id) }}" method="post" onsubmit="validate_delete()">
                    <div class="card-body">
                        @method('DELETE')

                        @csrf
                          <div class="row">
                                <div class="form-group">
                                    <label for="nome">Nome Completo</label>
                                    <p class="form-control">{{ $data->nome }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="documento">Documento</label>
                                    <p class="form-control">{{ $data->documento }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="cep">CEP</label>
                                    <p class="form-control">{{ $data->cep }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="endereco">Endereço</label>
                                    <p class="form-control">{{ $data->endereco }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="bairro">Bairro</label>
                                    <p class="form-control">{{ $data->bairro }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="cidade">Cidade</label>
                                    <p class="form-control">{{ $data->cidade }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="uf">UF</label>
                                    <p class="form-control">{{ $data->uf }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="telefone">Telefone</label>
                                    <p class="form-control">{{ $data->telefone }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <p class="form-control">{{ $data->email }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="ativo">Torcedor Ativo:</label>
                                    <p class="form-control">{{ $data->ativo }}</p>
                                </div>

                            </div>
                        </div><!-- /.row -->
                        <div class="card-footer text-right">
                          <a href="#" onclick="history.back()" class="btn btn-secondary">Voltar</a>
                          <button type="submit" class="btn btn-danger">Excluir</button>
                          <a href="{{ url('torcedor/edit/'.$data->id) }}" class="btn btn-primary">Editar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
