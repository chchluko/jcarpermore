@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro exitoso!') }}</div>

                <div class="card-body">
               <p>Tu constacia esta en tramite, en breve nuestro equipo se pondra en contacto contigo.</p>
                </div>
            </div>
            <br>
        </div>
    </div>
    @include('partials.arte');
</div>
@endsection
