@extends('products.layout')
  
@section('content')
    <div class="row">
        <div class="text-center col-lg-12 ">
            <div class="pull-left">
                <h2> Mostrar Produto</h2>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="text-center col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                {{ $product->name }}
            </div>
        </div>
        <div class="text-center col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Preço:</strong>
                {{ $product->price }}
            </div>
        </div>
        <div class="text-center col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Quantidade:</strong>
                {{ $product->quant }}
            </div>
            <div>
                <a class="btn btn-warning mt-3" href="{{ route('products.index') }}"> Voltar</a>
            </div>
        </div>
    </div>
@endsection