@extends('layouts.app')

@section('title','Nuevo Control')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                @include('includes.header')
                <div class="card-body text-center">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h2 class="titleForm">Al menos 4 veces por dia necesitás controlarte</h2>
                    @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <button  type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                          <ul>
                            @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                            @endforeach
                          </ul>
                        </div>
                      @endif
                    <form id="formulario" action="{{ route('sintomasStore')}}" method="post">
                        @csrf
                        <fieldset class="form-group radioGroup">
                            <div class="row">
                                <legend class="textInput text-left fiebre">Fiebre</legend>
                                <div class="col-sm-12">
                                    <label class="radioContainer">36°
                                        <input type="radio" name="fiebre" value="36" {{ old('fiebre')=="36" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">37°
                                        <input type="radio" name="fiebre" value="37" {{ old('fiebre')=="37" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">38°
                                        <input type="radio" name="fiebre" value="38" {{ old('fiebre')=="38" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">39°
                                        <input type="radio" name="fiebre" value="39" {{ old('fiebre')=="39" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">+39°
                                        <input type="radio" name="fiebre" value="39.1" {{ old('fiebre')=="39.1" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="form-group radioGroup">
                            <div class="row">
                                <legend class="textInput text-left saturacion">Saturación de oxigeno</legend>
                                <div class="col-sm-12">
                                    <label class="radioContainer">92
                                        <input type="radio" name="saturacion" value="92" {{ old('saturacion')=="92" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">93
                                        <input type="radio" name="saturacion" value="93" {{ old('saturacion')=="93" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">94
                                        <input type="radio" name="saturacion" value="94" {{ old('saturacion')=="94" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">95
                                        <input type="radio" name="saturacion" value="95" {{ old('saturacion')=="95" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">96
                                        <input type="radio" name="saturacion" value="96" {{ old('saturacion')=="96" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">97
                                        <input type="radio" name="saturacion" value="97" {{ old('saturacion')=="97" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">98
                                        <input type="radio" name="saturacion" value="98" {{ old('saturacion')=="98" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">99
                                        <input type="radio" name="saturacion" value="99" {{ old('saturacion')=="99" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">100
                                        <input type="radio" name="saturacion" value="100" {{ old('saturacion')=="100" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="form-group radioGroup">
                            <div class="row">
                                <legend class="textInput text-left estado">Estado de animo</legend>
                                <div class="col-sm-12">
                                    <label class="radioContainer">1
                                        <input type="radio" name="estado" value="1" {{ old('estado')=="1" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">2
                                        <input type="radio" name="estado" value="2" {{ old('estado')=="2" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">3
                                        <input type="radio" name="estado" value="3" {{ old('estado')=="3" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">4
                                        <input type="radio" name="estado" value="4" {{ old('estado')=="4" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">5
                                        <input type="radio" name="estado" value="5" {{ old('estado')=="5" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">6
                                        <input type="radio" name="estado" value="6" {{ old('estado')=="6" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">7
                                        <input type="radio" name="estado" value="7" {{ old('estado')=="7" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">8
                                        <input type="radio" name="estado" value="8" {{ old('estado')=="8" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">9
                                        <input type="radio" name="estado" value="9" {{ old('estado')=="9" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">10
                                        <input type="radio" name="estado" value="10" {{ old('estado')=="10" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="form-group radioGroup">
                            <div class="row">
                                <legend class="textInput text-left garganta">Dolor de garganta</legend>
                                <div class="col-sm-12">
                                    <label class="radioContainer">1
                                        <input type="radio" name="garganta" value="1" {{ old('garganta')=="1" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">2
                                        <input type="radio" name="garganta" value="2" {{ old('garganta')=="2" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">3
                                        <input type="radio" name="garganta" value="3" {{ old('garganta')=="3" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">4
                                        <input type="radio" name="garganta" value="4" {{ old('garganta')=="4" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">5
                                        <input type="radio" name="garganta" value="5" {{ old('garganta')=="5" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">6
                                        <input type="radio" name="garganta" value="6" {{ old('garganta')=="6" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">7
                                        <input type="radio" name="garganta" value="7" {{ old('garganta')=="7" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">8
                                        <input type="radio" name="garganta" value="8" {{ old('garganta')=="8" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">9
                                        <input type="radio" name="garganta" value="9" {{ old('garganta')=="9" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">10
                                        <input type="radio" name="garganta" value="10" {{ old('garganta')=="10" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="form-group radioGroup">
                            <div class="row">
                                <legend class="textInput text-left cansancio">Cansancio</legend>
                                <div class="col-sm-12">
                                    <label class="radioContainer">1
                                        <input type="radio" name="cansancio" value="1" {{ old('cansancio')=="1" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">2
                                        <input type="radio" name="cansancio" value="2" {{ old('cansancio')=="2" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">3
                                        <input type="radio" name="cansancio" value="3" {{ old('cansancio')=="3" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">4
                                        <input type="radio" name="cansancio" value="4" {{ old('cansancio')=="4" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">5
                                        <input type="radio" name="cansancio" value="5" {{ old('cansancio')=="5" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">6
                                        <input type="radio" name="cansancio" value="6" {{ old('cansancio')=="6" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">7
                                        <input type="radio" name="cansancio" value="7" {{ old('cansancio')=="7" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">8
                                        <input type="radio" name="cansancio" value="8" {{ old('cansancio')=="8" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">9
                                        <input type="radio" name="cansancio" value="9" {{ old('cansancio')=="9" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">10
                                        <input type="radio" name="cansancio" value="10" {{ old('cansancio')=="10" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="form-group radioGroup">
                            <div class="row">
                                <legend class="textInput text-left pulmon">Dolor de pulmón</legend>
                                <div class="col-sm-12">
                                    <label class="radioContainer">1
                                        <input type="radio" name="pulmon" value="1" {{ old('pulmon')=="1" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">2
                                        <input type="radio" name="pulmon" value="2" {{ old('pulmon')=="2" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">3
                                        <input type="radio" name="pulmon" value="3" {{ old('pulmon')=="3" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">4
                                        <input type="radio" name="pulmon" value="4" {{ old('pulmon')=="4" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">5
                                        <input type="radio" name="pulmon" value="5" {{ old('pulmon')=="5" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">6
                                        <input type="radio" name="pulmon" value="6" {{ old('pulmon')=="6" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">7
                                        <input type="radio" name="pulmon" value="7" {{ old('pulmon')=="7" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">8
                                        <input type="radio" name="pulmon" value="8" {{ old('pulmon')=="8" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">9
                                        <input type="radio" name="pulmon" value="9" {{ old('pulmon')=="9" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">10
                                        <input type="radio" name="pulmon" value="10" {{ old('pulmon')=="10" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="form-group radioGroup">
                            <div class="row">
                                <legend class="textInput text-left apetito">Apetito</legend>
                                <div class="col-sm-12">
                                    <label class="radioContainer">1
                                        <input type="radio" name="apetito" value="1" {{ old('apetito')=="1" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">2
                                        <input type="radio" name="apetito" value="2" {{ old('apetito')=="2" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">3
                                        <input type="radio" name="apetito" value="3" {{ old('apetito')=="3" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">4
                                        <input type="radio" name="apetito" value="4" {{ old('apetito')=="4" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">5
                                        <input type="radio" name="apetito" value="5" {{ old('apetito')=="5" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">6
                                        <input type="radio" name="apetito" value="6" {{ old('apetito')=="6" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">7
                                        <input type="radio" name="apetito" value="7" {{ old('apetito')=="7" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">8
                                        <input type="radio" name="apetito" value="8" {{ old('apetito')=="8" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">9
                                        <input type="radio" name="apetito" value="9" {{ old('apetito')=="9" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">10
                                        <input type="radio" name="apetito" value="10" {{ old('apetito')=="10" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="form-group radioGroup">
                            <div class="row">
                                <legend class="textInput text-left olfato">Olfato</legend>
                                <div class="col-sm-12">
                                    <label class="radioContainer">1
                                        <input type="radio" name="olfato" value="1" {{ old('olfato')=="1" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">2
                                        <input type="radio" name="olfato" value="2" {{ old('olfato')=="2" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">3
                                        <input type="radio" name="olfato" value="3" {{ old('olfato')=="3" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">4
                                        <input type="radio" name="olfato" value="4" {{ old('olfato')=="4" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">5
                                        <input type="radio" name="olfato" value="5" {{ old('olfato')=="5" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">6
                                        <input type="radio" name="olfato" value="6" {{ old('olfato')=="6" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">7
                                        <input type="radio" name="olfato" value="7" {{ old('olfato')=="7" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">8
                                        <input type="radio" name="olfato" value="8" {{ old('olfato')=="8" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">9
                                        <input type="radio" name="olfato" value="9" {{ old('olfato')=="9" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">10
                                        <input type="radio" name="olfato" value="10" {{ old('olfato')=="10" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="form-group radioGroup">
                            <div class="row">
                                <legend class="textInput text-left voluntad">Voluntad (¡Ganas de ganar!)</legend>
                                <div class="col-sm-12">
                                    <label class="radioContainer">1
                                        <input type="radio" name="voluntad" value="1" {{ old('voluntad')=="1" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">2
                                        <input type="radio" name="voluntad" value="2" {{ old('voluntad')=="2" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">3
                                        <input type="radio" name="voluntad" value="3" {{ old('voluntad')=="3" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">4
                                        <input type="radio" name="voluntad" value="4" {{ old('voluntad')=="4" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">5
                                        <input type="radio" name="voluntad" value="5" {{ old('voluntad')=="5" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">6
                                        <input type="radio" name="voluntad" value="6" {{ old('voluntad')=="6" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">7
                                        <input type="radio" name="voluntad" value="7" {{ old('voluntad')=="7" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">8
                                        <input type="radio" name="voluntad" value="8" {{ old('voluntad')=="8" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">9
                                        <input type="radio" name="voluntad" value="9" {{ old('voluntad')=="9" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">10
                                        <input type="radio" name="voluntad" value="10" {{ old('voluntad')=="10" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="form-group radioGroup">
                            <div class="row">
                                <legend class="textInput text-left tos">Tos</legend>
                                <div class="col-sm-12">
                                    <label class="radioContainer">1
                                        <input type="radio" name="tos" value="1" {{ old('tos')=="1" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">2
                                        <input type="radio" name="tos" value="2" {{ old('tos')=="2" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">3
                                        <input type="radio" name="tos" value="3" {{ old('tos')=="3" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">4
                                        <input type="radio" name="tos" value="4" {{ old('tos')=="4" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">5
                                        <input type="radio" name="tos" value="5" {{ old('tos')=="5" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">6
                                        <input type="radio" name="tos" value="6" {{ old('tos')=="6" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">7
                                        <input type="radio" name="tos" value="7" {{ old('tos')=="7" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">8
                                        <input type="radio" name="tos" value="8" {{ old('tos')=="8" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">9
                                        <input type="radio" name="tos" value="9" {{ old('tos')=="9" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">10
                                        <input type="radio" name="tos" value="10" {{ old('tos')=="10" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="form-group radioGroup">
                            <div class="row">
                                <legend class="textInput text-left diarrea">Diarrea</legend>
                                <div class="col-sm-12">
                                    <label class="radioContainer">1
                                        <input type="radio" name="diarrea" value="1" {{ old('diarrea')=="1" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">2
                                        <input type="radio" name="diarrea" value="2" {{ old('diarrea')=="2" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">3
                                        <input type="radio" name="diarrea" value="3" {{ old('diarrea')=="3" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">4
                                        <input type="radio" name="diarrea" value="4" {{ old('diarrea')=="4" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">5
                                        <input type="radio" name="diarrea" value="5" {{ old('diarrea')=="5" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">6
                                        <input type="radio" name="diarrea" value="6" {{ old('diarrea')=="6" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">7
                                        <input type="radio" name="diarrea" value="7" {{ old('diarrea')=="7" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">8
                                        <input type="radio" name="diarrea" value="8" {{ old('diarrea')=="8" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">9
                                        <input type="radio" name="diarrea" value="9" {{ old('diarrea')=="9" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">10
                                        <input type="radio" name="diarrea" value="10" {{ old('diarrea')=="10" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="form-group radioGroup2">
                            <div class="row">
                                <legend class="textInputBig cambio">¿Notás algún cambio?</legend>
                                <div class="col-sm-12">
                                    <label class="radioContainer">Si
                                        <input id="test" type="radio" name="cambio" onchange='handleChange(this);' value="1" {{ old('cambio')=="1" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">No
                                        <input type="radio" name="cambio" onchange='handleChangeNot(this);' value="0" {{ old('cambio')=="0" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <legend class="textInput text-left">¿Cual?</legend>
                                    <textarea id="textComment" class="form-control" cols="40" rows="0"
                                disabled='disabled' name="textComment">{{ old('textComment')}}</textarea>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="form-group radioGroup2">
                            <legend class="textInputBig hablar">¿Lo hablaste con el doctor?</legend>
                            <div class="col-sm-12">
                                <label class="radioContainer">Si
                                    <input type="radio" name="hablar" value="1" {{ old('hablar')=="1" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radioContainer">No
                                    <input type="radio" name="hablar" value="0" {{ old('hablar')=="0" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </fieldset>
                        <fieldset class="form-group radioGroup2">
                            <legend>¿Algún comentario o nota que desees agregar?</legend>
                        <textarea name="comentario" class="form-control" id="nota" cols="40" rows="0">{{ old('comentario')}}</textarea>
                        </fieldset>
                        <div class="alert alert-danger alertBox" role="alert">
                            Falta completar campos
                        </div>
                        <input type="submit" class="btn btn-primary btnForm" value="Guardar">
                    </form>
                    <p></p>
                    <!-- HTML -->
                    <div id="fecha"></div>
                    <pre id="salida"></pre>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    function handleChange(checkbox) {
        if(checkbox.checked == true){
            document.getElementById('textComment').disabled = false;
        }else if(checkbox.checked == false){
            document.getElementById('textComment').disabled = true;
        }
    }
    function handleChangeNot(checkbox) {
        if(checkbox.checked == true){
            document.getElementById('textComment').disabled = true;
        }else if(checkbox.checked == false){
            document.getElementById('textComment').disabled = false;
        }
    }
$(document).ready(function(){
    var radioButtonType = ["fiebre","saturacion","estado", "garganta", "cansancio", "pulmon", "apetito", "olfato", "voluntad",
    "tos", "diarrea", "cambio", "hablar"]

    $('input[type=radio]').change(function(){
        $(this).parent().parent().parent().removeClass("active")
    });

    document.getElementById("formulario").addEventListener("submit", function(event){

        let hasError = false;
        for(var i = 0; i<radioButtonType.length; i++){
            if(!document.querySelector('input[name=' + radioButtonType[i] + ' ]:checked')) {
                 $('.' + radioButtonType[i]).parent().addClass('active');
                  hasError = true;
            }else{
                $('.' + radioButtonType[i]).removeClass('active');
            }
        }

        // si hay algún error no efectuamos la acción submit del form
        if(hasError){
            $(".alertBox").addClass("activeBox");
            event.preventDefault();
        }
    });


})
</script>
@endsection
