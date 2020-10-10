@extends('layouts.app')

@section('content')


<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Médicos registrados</h2>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Especialidad</th>
        <th>Correo</th>
        <th>Teléfono</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($products as $product)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $product->nombre }}</td>
        <td>{{ $product->paterno }}</td>
        <td>{{ $product->materno }}</td>
        <td>{{ $product->especialidad }}</td>
        <td>{{ $product->email }}</td>
        <td>{{ $product->telefono }}</td>
        <td>
                <a class="btn btn-info" href="{{ route('medicos.show',$product->id) }}">Ver</a>
                <a class="btn btn-primary" href="{{ route('medicos.edit',$product->id) }}">Editar</a>
        </td>
    </tr>
    @endforeach
</table>

{!! $products->links() !!}

@endsection
