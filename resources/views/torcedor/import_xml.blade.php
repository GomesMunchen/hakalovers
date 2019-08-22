@extends('layouts.app')
@section('stylecss')
<style media="screen">
    .a-line {
        line-height: 30px;
    }
</style>
@section('content')
<div class="container">
    <div class="card-header"> Importe seu Arquivo xml </div>
    @if(count($errors) > 0)
    <div class="alert alert-danger">
      Opss! Tivemos um erro no upload.
      <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    @if($message = Session::get('success'))
    <div class="alert alert-success alert-block">
       <button type="button" class="close" data-dismiss="alert-success">x</button>
       <strong> {{ $message }} </strong>
     </div>
     @endif


      <div class="input-group mb-3">
        <form action="{{url('/import_xml/import')}}" method="post" enctype="multipart/form-data" >
        {{ @csrf_field() }}

      <div class="form-group">
        <label for="select_file"> Selecione um Arquivo </label>
              <input type="file" name="select_file">
              <input type="submit" name="upload" class="btn-btn-primary" value="Upload">
              <span class="text-muted">.xls, .xslx .xml </span></td>
        </div>
        <div class="card-footer text-right">
            <a href="#" onclick="history.back()" class="btn btn-secondary">Voltar</a>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
      </form>
    </div>
  </div>


      @endsection
