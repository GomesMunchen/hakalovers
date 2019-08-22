@extends('layouts.app')

@section('stylecss')
<style media="screen">
    .a-line {
        line-height: 30px;
    }
</style>
@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
          <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Pesquisar Torcedor" ></input>
              <form action="{{ url('torcedor/busca') }}" method="post">
              <span class="btn btn-outline-secondary" type="submit">Buscar</button>
          </span>
            <a href="{{ url('torcedor/add') }}" class="btn btn-outline-secondary float-right">Novo Torcedor</a>
          </div>
          <div class="col-sm-12" style="padding-bottom: 10px">
            @foreach(range('A','Z') as $letra)
            <div class="btn-group">
              <a href="{{ url('torcedor/' .$letra) }}" class="btn btn-outline-secondary">
                {{ $letra }}
              </a>
            </div>
            @endforeach
            </div>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive border-0">
                <table class="table table-hover" style="margin-bottom: inherit">
                                 <thead>
                                   <tr>
                                       <th scope="col">#</th>
                                       <th scope="col">Nome</th>
                                      <th scope="col">Documento</th>
                                      <th scope="col">Cep</th>
                                      <th scope="col">Endereço</th>
                                      <th scope="col">Bairro</th>
                                      <th scope="col">Cidade</th>
                                      <th scope="col">UF</th>
                                      <th scope="col">Telefone</th>
                                      <th scope="col">E-mail</th>
                                      <th scope="col">Ativo</th>

                            </tr>
                        </thead>
                            <tbody>
                        @foreach ($torcedores as $torcedor)
                        <tr>
                            <td><a href="{{ url('torcedor/'.$torcedor->id) }}">{{ $torcedor->id }} </a></td>
                            <td><a class='a-line' href="{{ url('torcedor/'.$torcedor->id) }}">{{ $torcedor->nome }}</a></td>
                            <td class="d-none d-md-table-cell"><a class='a-line' href="{{ url('torcedor/'.$torcedor->id) }}">{{ $torcedor->documento }}</a></td>
                            <td class="d-none d-md-table-cell"><a class='a-line' href="{{ url('torcedor/'.$torcedor->id) }}">{{ $torcedor->cep }}</a></td>
                            <td class="d-none d-md-table-cell"><a class='a-line' href="{{ url('torcedor/'.$torcedor->id) }}">{{ $torcedor->endereco }}</a></td>
                            <td class="d-none d-md-table-cell"><a class='a-line' href="{{ url('torcedor/'.$torcedor->id) }}">{{ $torcedor->bairro }}</a></td>
                            <td class="d-none d-md-table-cell"><a class='a-line' href="{{ url('torcedor/'.$torcedor->id) }}">{{ $torcedor->cidade }}</a></td>
                            <td class="d-none d-md-table-cell"><a class='a-line' href="{{ url('torcedor/'.$torcedor->id) }}">{{ $torcedor->uf }}</a></td>
                            <td class="d-none d-md-table-cell"><a class='a-line' href="{{ url('torcedor/'.$torcedor->id) }}">{{ $torcedor->telefone }}</a></td>
                            <td class="d-none d-md-table-cell"><a class='a-line' href="{{ url('torcedor/'.$torcedor->id) }}">{{ $torcedor->email }}</a></td>
                            <td class="d-none d-md-table-cell"><a class='a-line' href="{{ url('torcedor/'.$torcedor->id) }}">{{ $torcedor->ativo }}</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @endsection
    </div>
  </div>
    @endsection
