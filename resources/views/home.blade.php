@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Te damos la bienvenida. {{ Auth::user()->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{ route('labs.index') }}"><p>Aqui puede descargar su(s) constancia(s)</p></a>
                </div>
            </div> <br>
        </div>
    </div>
    @include('partials.arte');
</div>
@endsection
