@extends('layouts.app')

@section('title','Historial de Sintomas')

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

                    <table class="table table-bordered table-hover text-center ">
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
                                    <th scope="row">{{ $key + 1}}</th>
                                    <td>{{ $symptom->created_at }}</td>
                                    <td>{{ $symptom->temperature }}</td>
                                    <td>{{ $symptom->oxygen_saturation }}</td>
                                    <td>
                                    <form action="{{ route('sintomasDestroy',$symptom->id)}}" method="POST">
                                    <a class="btn btn-info" href=""><i class="fas fa-info-circle"></i></a>
                                        <a class="btn btn-success" href="{{ route('sintomasEdit',$symptom)}}"><i class="fas fa-edit"></i></a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row justify-content-center">
                            <nav class="justify-content-center">
                                {{ $symptoms->links()}}
                            </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
