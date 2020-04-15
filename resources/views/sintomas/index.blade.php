@extends('layouts.app')

@section('title','Historial de Sintomas')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                @include('includes.header')
                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Fecha y Hora</th>
                                <th scope="col">Temperatura </th>
                                <th scope="col">Saturación de Oxigeno</th>
                                <th scope="col">Freceuncia Cardiaca</th>
                                <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($symptoms as $key => $symptom)
                                <tr>
                                    <th scope="row">{{ $key + 1}}</th>
                                    <td>{{ $symptom->created_at }}</td>
                                    <td>{{ $symptom->temperature }}</td>
                                    <td>{{ $symptom->oxygen_saturation }}</td>
                                    <td>{{ $symptom->heart_rate }}</td>
                                    <td>Editar</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <nav class="justify-content-center">
                        {{ $symptoms->links()}}
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
