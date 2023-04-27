@extends('products.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb mt-5">
        <div class="pull-left">
            <h2>Adicionar Novo Produto</h2>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('products.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
            <div class="form-group">
                <strong>Preço:</strong>
                <input class="form-control" name="price" placeholder="0.00" pattern="[0-9.]+"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
            <div class="form-group">
                <strong>Quantidade:</strong>
                <input class="form-control" name="quant" placeholder="Quantidade (Ex: 1)"  pattern="[0-9.]+"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a class="btn btn-warning" href="{{ route('products.index') }}"> Voltar</a>
        </div>
    </div>
   
</form>
@endsection