@extends('layouts.app')

@section('title','Inicio')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                @include('includes.header')
                <div class="card-body">
                <div class="introImg">
                <img
                        src="{{ asset('img/seguiSalud_2.gif') }}" width="200" height="202"
                        alt="SeguiSalud" />
                </div>
                <div class="introText">
                SeguiSalud es una aplicación confiable y segura, en la que vas a poder realizar tu propio control diario sobre los síntomas a lo largo de todo tu tratamiento.
Esta aplicación te ofrece la posibilidad de cargar tus controles de manera ilimitada, con la opción de editarlos ante cualquier inquietud, y además la ventaja de descargar un reporte en PDF en cualquiera de tus dispositivos para  ¡Enviarlo a tu médico de confianza!
                </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
