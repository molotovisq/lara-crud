@extends('products.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Produto</h2>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Opa!</strong> Existem alguns problemas na sua entrada.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('products.update',$product->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>Nome:</strong>
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Nome">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>Preço:</strong>
                    <input type="text" name="price" value="{{ $product->price }}" class="form-control" placeholder="1.00" pattern="[0-9.]+">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>Quantidade:</strong>
                    <input type="text" name="quant" value="{{ $product->quant }}" class="form-control" placeholder="1.00" pattern="[0-9]+">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-4">
              <button type="submit" class="btn btn-primary">Salvar</button>
              <a class="btn btn-warning" href="{{ route('products.index') }}"> Voltar</a>
            </div>
        </div>
   
    </form>
@endsection