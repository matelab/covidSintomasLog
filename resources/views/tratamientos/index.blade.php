@extends('layouts.app')

@section('title','Historial de Tratamientos')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                @include('includes.header')
                <div class="card-body">
                    @include('flash::message')
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-bordered table-hover text-center nowrap" id="indexTable" style="width:100%">
                        <thead class="thead-dark">
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
                                    <th scope="row">{{ $key + 1 }}</th>
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
                            <td>
                                <form action="{{ route('tratamientosUpdate',$historySymptom) }}"
                                    method="POST">
                                    @csrf
                                    @switch($historySymptom->status)
                                        @case('Active')
                                            <button type="submit" class="btn btn-success"><i
                                                    class="fas fa-check-circle"></i> Finalizar Tratamiento</button>
                                            @break
                                        @case('Finished')
                                            <a class="btn btn-info"
                                                href="{{ route('sintomasFinished',$historySymptom) }}"><i
                                                    class="fa fa-info-circle"></i> Ver Historial
                                                de Controles</a>
                                            @break
                                        @default
                                    @endswitch
                                </form>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row justify-content-center">
                        <nav class="justify-content-center">
                            {{ $historySymptoms->links() }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

