@extends('layouts.app')

@section('title','Historial de Tratamientos')

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
                                <th scope="col">Inicio de Tratamiento</th>
                                <th scope="col">Final de Tratamiento</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($historySymptoms as $key => $historySymptom)
                                <tr>
                                    <th scope="row">{{ $key + 1}}</th>
                                    <td>{{ $historySymptom->created_at }}</td>
                                    <td>{{ $historySymptom->finished_date }}</td>
                                    <td>@switch ($historySymptom->status)
                                            @case('Active')
                                                En Tratamiento
                                            @break
                                            @case('Finished')
                                                Tratamiento Finalizado
                                            @break
                                        @endswitch
                                    </td>
                                    <td>Ver</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <nav class="justify-content-center">
                        {{ $historySymptoms->links()}}
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
