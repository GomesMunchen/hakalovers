@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Editar Torcedor</div>
                <form action="{{ url('torcedor/'.$data->id) }}" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        @method('PUT')

                        @csrf
                        <div class="form-group">
                            <label for="nome">Nome completo</label>
                            <input type="text" required class="form-control{{$errors->has('nome') ? ' is-invalid':''}}" value="{{ old('nome', $data->nome) }}" id="nome" name="nome">
                            <div class="invalid-feedback">{{ $errors->first('nome') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="documento">Documento</label>
                            <input type="text" required class="form-control{{$errors->has('documento') ? ' is-invalid':''}}" value="{{ old('documento') }}" id="documento" name="documento">
                            <div class="invalid-feedback">{{ $errors->first('documento') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="cep">CEP</label>
                            <input type="text" required class="form-control{{$errors->has('cep') ? ' is-invalid':''}}" value="{{ old('cep') }}" id="cep" name="cep">
                            <div class="invalid-feedback">{{ $errors->first('cep') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="endereco">Endereço</label>
                            <input type="text" required class="form-control{{$errors->has('endereco') ? ' is-invalid':''}}" value="{{ old('endereco') }}" id="endereco" name="endereco">
                            <div class="invalid-feedback">{{ $errors->first('endereco') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="bairro">Bairro</label>
                            <input type="text" required class="form-control{{$errors->has('bairro') ? ' is-invalid':''}}" value="{{ old('bairro') }}" id="bairro" name="bairro">
                            <div class="invalid-feedback">{{ $errors->first('bairro') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="cidade">Cidade</label>
                            <input type="text" required class="form-control{{$errors->has('cidade') ? ' is-invalid':''}}" value="{{ old('cidade') }}" id="cidade" name="cidade">
                            <div class="invalid-feedback">{{ $errors->first('cidade') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="uf">UF</label>
                            <input type="text" required class="form-control{{$errors->has('uf') ? ' is-invalid':''}}" value="{{ old('uf') }}" id="uf" name="uf">
                            <div class="invalid-feedback">{{ $errors->first('uf') }}</div>
                        </div>

                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input type="text" required class="form-control{{$errors->has('telefone') ? ' is-invalid':''}}" value="{{ old('telefone', $data->telefone) }}" id="telefone" name="telefone">
                            <div class="invalid-feedback">{{ $errors->first('telefone') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control{{$errors->has('email') ? ' is-invalid':''}}" value="{{ old('email', $data->email) }}" id="email" name="email" placeholder="email@provedor.com.br">
                            <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="ativo">Torcedor encontra-se ativo?</label>
                            <select id="ativo" name="ativo" class="form-control">
                                <option value="">Selecione...</option>
                                <option value="Sim"{{ old('ativo') == 'Sim' ? ' selected' : ''}}>Sim</option>
                                <option value="Não"{{ old('ativo') == 'Não' ? ' selected' : ''}}>Não</option>
                            </select>

                    </div>
                    <div class="card-footer text-right">
                        <a href="#" onclick="history.back()" class="btn btn-secondary">Voltar</a>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
