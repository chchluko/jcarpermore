@extends('layouts.app')

@section('content')


   <div class="col-auto d-flex flex-column">
        <div>
            <h2>Constancias</h2>
        </div>
    </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
    <div class="col-auto d-flex flex-column">
           <table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th width="280px">Accion</th>
    </tr>
    @foreach ($products as $product)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $product->nombre }}</td>
        <td>{{ $product->paterno }}</td>
        <td>{{ $product->materno }}</td>
        <td>
                <a class="btn btn-default" href="{{ route('registro.show',$product->id) }}">Descargar</a>
        </td>
    </tr>
    @endforeach
</table>
{!! $products->links() !!}
@include('partials.arte');
    </div>



@endsection
