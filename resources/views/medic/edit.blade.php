@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrarse') }}</div>

                <div class="card-body">
                    <form action="{{ route('registro.update',$medic->id) }}" method="POST">
                        @csrf
                        @method('PUT')

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
                        <div class="form-group row">
                        <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                        <div class="col-md-6">
                            <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ $medic->nombre }}" required autocomplete="nombre" autofocus>

                            @error('nombre')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="paterno" class="col-md-4 col-form-label text-md-right">{{ __('Apellido Paterno') }}</label>

                        <div class="col-md-6">
                            <input id="paterno" type="text" class="form-control @error('paterno') is-invalid @enderror" name="paterno" value="{{ $medic->paterno }}" required autocomplete="paterno" autofocus>

                            @error('paterno')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="materno" class="col-md-4 col-form-label text-md-right">{{ __('Apellido Materno') }}</label>

                        <div class="col-md-6">
                            <input id="materno" type="text" class="form-control @error('materno') is-invalid @enderror" name="materno" value="{{ $medic->materno }}" required autocomplete="materno" autofocus>

                            @error('materno')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="especialidad" class="col-md-4 col-form-label text-md-right">{{ __('Especialidad') }}</label>

                        <div class="col-md-6">
                            <input id="especialidad" type="text" class="form-control @error('especialidad') is-invalid @enderror" name="especialidad" value="{{ $medic->especialidad }}" required autocomplete="especialidad" autofocus>

                            @error('especialidad')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo electrónico') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $medic->email }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telefono" class="col-md-4 col-form-label text-md-right">{{ __('Teléfono de contacto') }}</label>

                        <div class="col-md-6">
                            <input id="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ $medic->telefono }}" required autocomplete="telefono" autofocus>

                            @error('telefono')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="iduser" class="col-md-4 col-form-label text-md-right">{{ __('Código de Médico') }}</label>

                        <div class="col-md-6">
                            <input id="iduser" type="text" class="form-control @error('iduser') is-invalid @enderror" name="iduser" value="{{ $medic->iduser }}" required autocomplete="iduser" autofocus>

                            @error('iduser')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-outline-secondary">
                                {{ __('Actualizar') }}
                            </button>
                        </div>
                    </div>
                </div>
                </form>
            </div><br><br>
        </div>
    </div>
    @include('partials.arte');
</div>

@endsection
