@extends('products.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb text-center">
        <div class="pull-left">
            <h2>Produtos HotSat <i class="fa-solid fa-satellite-dish" style="color: #ff0000;"></i></h2>
        </div>

    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<div class="row">
    <div class="col-lg-8 text-left">
    </div>
    <div class="col-lg-4 d-flex justify-content-end">
        <form action="/products" method="GET" class="form-inline">
            <div class="input-group">
                <input type="search" name="search" class="form-control">
                <div class="input-group-append ms-2">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa-solid fa-search"></i> Pesquisar
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<table id="products-table" class="table table-bordered table-responsive mt-4">
    <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Nome</th>
        <th class="text-center">Preço</th>
        <th class="text-center">Quantidade</th>
        <th class="text-center">
            <a class="btn btn-success" href="{{ route('products.create') }}">
                <i class="fa-solid fa-plus"></i>
                Novo Produto </a>
        </th>
    </tr>
    @foreach ($products as $product)
    <tr>
        <td class="text-center">{{ $product->id }}</td>
        <td class="text-center">{{ $product->name }}</td>
        <td class="text-center">R${{ number_format($product->price,2,'.','') }}</td>
        <td class="text-center">{{ $product->quant }}</td>
        <td class="text-center">
            <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                <a class="btn btn-info " href="{{ route('products.show',$product->id) }}">
                    <i class="fa-solid fa-eye"></i>
                </a>

                <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">
                    <i class="fa-solid fa-pen-to-square"></i>
                </a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">
                    <i class="fa-solid fa-trash"></i>
                </button>
            </form>
        </td>
    </tr>
    @endforeach
</table>


{!! $products->appends(request()->except('page'))->links() !!}

@endsection