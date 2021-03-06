@extends('layouts.app')

@section('title','Historial de Sintomas (Finalizado)')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="titleForm">Comenzaste el Tratamiento: {{ $historySymptom->created_at }} y lo Terminaste
                        {{ $historySymptom->finished_date }}</h2>
                    <table class="table table-bordered table-hover text-center nowrap" id="indexTable" style="width:100%">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Fecha y Hora</th>
                                <th scope="col">Temperatura </th>
                                <th scope="col">Saturación de Oxigeno</th>
                                <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($symptoms as $key => $symptom)
                                <tr>
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td>{{ $symptom->created_at }}</td>
                                    <td>{{ $symptom->temperature }}</td>
                                    <td>{{ $symptom->oxygen_saturation }}</td>
                                    <td>
                                        <a class="btn btn-info" data-toggle="tooltip" title="Mas Infromación"
                                            href="{{ route('sintomasShow',$symptom) }}"><i
                                                class="fas fa-info-circle"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row justify-content-center">
                        <nav class="justify-content-center">
                            {{ $symptoms->links() }}
                        </nav>
                    </div>
                    <a href="{{ route('tratamientos') }}" class="btn btn-danger">Volver</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
