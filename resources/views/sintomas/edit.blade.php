@extends('layouts.app')

@section('title','Editar Control')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-12">
            <div class="card">
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
                    <form id="formulario" action="{{ route('sintomasUpdate',$historySymptomDetail)}}" method="post">
                        @csrf
                        <fieldset class="form-group radioGroup">
                            <div class="row">
                                <legend class="textInput text-left fiebre">Fiebre</legend>
                                <div class="col-sm-12">
                                    <label class="radioContainer">36°
                                        <input type="radio" name="fiebre" value="36" {{ old('fiebre', $historySymptomDetail->temperature)=="36" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">37°
                                        <input type="radio" name="fiebre" value="37" {{ old('fiebre', $historySymptomDetail->temperature)=="37" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">38°
                                        <input type="radio" name="fiebre" value="38" {{ old('fiebre', $historySymptomDetail->temperature)=="38" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">39°
                                        <input type="radio" name="fiebre" value="39" {{ old('fiebre', $historySymptomDetail->temperature)=="39" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">+39°
                                        <input type="radio" name="fiebre" value="39.1" {{ old('fiebre', $historySymptomDetail->temperature)=="39.1" ? 'checked='.'"'.'checked'.'"' : '' }}>
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
                                        <input type="radio" name="saturacion" value="92" {{ old('saturacion', $historySymptomDetail->oxygen_saturation)=="92" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">93
                                        <input type="radio" name="saturacion" value="93" {{ old('saturacion', $historySymptomDetail->oxygen_saturation)=="93" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">94
                                        <input type="radio" name="saturacion" value="94" {{ old('saturacion', $historySymptomDetail->oxygen_saturation)=="94" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">95
                                        <input type="radio" name="saturacion" value="95" {{ old('saturacion', $historySymptomDetail->oxygen_saturation)=="95" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">96
                                        <input type="radio" name="saturacion" value="96" {{ old('saturacion', $historySymptomDetail->oxygen_saturation)=="96" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">97
                                        <input type="radio" name="saturacion" value="97" {{ old('saturacion', $historySymptomDetail->oxygen_saturation)=="97" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">98
                                        <input type="radio" name="saturacion" value="98" {{ old('saturacion', $historySymptomDetail->oxygen_saturation)=="98" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">99
                                        <input type="radio" name="saturacion" value="99" {{ old('saturacion', $historySymptomDetail->oxygen_saturation)=="99" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">100
                                        <input type="radio" name="saturacion" value="100" {{ old('saturacion', $historySymptomDetail->oxygen_saturation)=="100" ? 'checked='.'"'.'checked'.'"' : '' }}>
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
                                        <input type="radio" name="estado" value="1" {{ old('estado', $historySymptomDetail->mood)=="1" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">2
                                        <input type="radio" name="estado" value="2" {{ old('estado', $historySymptomDetail->mood)=="2" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">3
                                        <input type="radio" name="estado" value="3" {{ old('estado', $historySymptomDetail->mood)=="3" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">4
                                        <input type="radio" name="estado" value="4" {{ old('estado', $historySymptomDetail->mood)=="4" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">5
                                        <input type="radio" name="estado" value="5" {{ old('estado', $historySymptomDetail->mood)=="5" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">6
                                        <input type="radio" name="estado" value="6" {{ old('estado', $historySymptomDetail->mood)=="6" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">7
                                        <input type="radio" name="estado" value="7" {{ old('estado', $historySymptomDetail->mood)=="7" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">8
                                        <input type="radio" name="estado" value="8" {{ old('estado', $historySymptomDetail->mood)=="8" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">9
                                        <input type="radio" name="estado" value="9" {{ old('estado', $historySymptomDetail->mood)=="9" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">10
                                        <input type="radio" name="estado" value="10" {{ old('estado', $historySymptomDetail->mood)=="10" ? 'checked='.'"'.'checked'.'"' : '' }}>
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
                                        <input type="radio" name="garganta" value="1" {{ old('garganta', $historySymptomDetail->sore_throat)=="1" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">2
                                        <input type="radio" name="garganta" value="2" {{ old('garganta', $historySymptomDetail->sore_throat)=="2" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">3
                                        <input type="radio" name="garganta" value="3" {{ old('garganta', $historySymptomDetail->sore_throat)=="3" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">4
                                        <input type="radio" name="garganta" value="4" {{ old('garganta', $historySymptomDetail->sore_throat)=="4" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">5
                                        <input type="radio" name="garganta" value="5" {{ old('garganta', $historySymptomDetail->sore_throat)=="5" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">6
                                        <input type="radio" name="garganta" value="6" {{ old('garganta', $historySymptomDetail->sore_throat)=="6" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">7
                                        <input type="radio" name="garganta" value="7" {{ old('garganta', $historySymptomDetail->sore_throat)=="7" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">8
                                        <input type="radio" name="garganta" value="8" {{ old('garganta', $historySymptomDetail->sore_throat)=="8" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">9
                                        <input type="radio" name="garganta" value="9" {{ old('garganta', $historySymptomDetail->sore_throat)=="9" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">10
                                        <input type="radio" name="garganta" value="10" {{ old('garganta', $historySymptomDetail->sore_throat)=="10" ? 'checked='.'"'.'checked'.'"' : '' }}>
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
                                        <input type="radio" name="cansancio" value="1" {{ old('cansancio', $historySymptomDetail->fatigue)=="1" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">2
                                        <input type="radio" name="cansancio" value="2" {{ old('cansancio', $historySymptomDetail->fatigue)=="2" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">3
                                        <input type="radio" name="cansancio" value="3" {{ old('cansancio', $historySymptomDetail->fatigue)=="3" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">4
                                        <input type="radio" name="cansancio" value="4" {{ old('cansancio', $historySymptomDetail->fatigue)=="4" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">5
                                        <input type="radio" name="cansancio" value="5" {{ old('cansancio', $historySymptomDetail->fatigue)=="5" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">6
                                        <input type="radio" name="cansancio" value="6" {{ old('cansancio', $historySymptomDetail->fatigue)=="6" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">7
                                        <input type="radio" name="cansancio" value="7" {{ old('cansancio', $historySymptomDetail->fatigue)=="7" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">8
                                        <input type="radio" name="cansancio" value="8" {{ old('cansancio', $historySymptomDetail->fatigue)=="8" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">9
                                        <input type="radio" name="cansancio" value="9" {{ old('cansancio', $historySymptomDetail->fatigue)=="9" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">10
                                        <input type="radio" name="cansancio" value="10" {{ old('cansancio', $historySymptomDetail->fatigue)=="10" ? 'checked='.'"'.'checked'.'"' : '' }}>
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
                                        <input type="radio" name="pulmon" value="1" {{ old('pulmon', $historySymptomDetail->lung_pain)=="1" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">2
                                        <input type="radio" name="pulmon" value="2" {{ old('pulmon', $historySymptomDetail->lung_pain)=="2" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">3
                                        <input type="radio" name="pulmon" value="3" {{ old('pulmon', $historySymptomDetail->lung_pain)=="3" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">4
                                        <input type="radio" name="pulmon" value="4" {{ old('pulmon', $historySymptomDetail->lung_pain)=="4" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">5
                                        <input type="radio" name="pulmon" value="5" {{ old('pulmon', $historySymptomDetail->lung_pain)=="5" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">6
                                        <input type="radio" name="pulmon" value="6" {{ old('pulmon', $historySymptomDetail->lung_pain)=="6" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">7
                                        <input type="radio" name="pulmon" value="7" {{ old('pulmon', $historySymptomDetail->lung_pain)=="7" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">8
                                        <input type="radio" name="pulmon" value="8" {{ old('pulmon', $historySymptomDetail->lung_pain)=="8" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">9
                                        <input type="radio" name="pulmon" value="9" {{ old('pulmon', $historySymptomDetail->lung_pain)=="9" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">10
                                        <input type="radio" name="pulmon" value="10" {{ old('pulmon', $historySymptomDetail->lung_pain)=="10" ? 'checked='.'"'.'checked'.'"' : '' }}>
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
                                        <input type="radio" name="apetito" value="1" {{ old('apetito', $historySymptomDetail->appetite)=="1" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">2
                                        <input type="radio" name="apetito" value="2" {{ old('apetito', $historySymptomDetail->appetite)=="2" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">3
                                        <input type="radio" name="apetito" value="3" {{ old('apetito', $historySymptomDetail->appetite)=="3" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">4
                                        <input type="radio" name="apetito" value="4" {{ old('apetito', $historySymptomDetail->appetite)=="4" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">5
                                        <input type="radio" name="apetito" value="5" {{ old('apetito', $historySymptomDetail->appetite)=="5" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">6
                                        <input type="radio" name="apetito" value="6" {{ old('apetito', $historySymptomDetail->appetite)=="6" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">7
                                        <input type="radio" name="apetito" value="7" {{ old('apetito', $historySymptomDetail->appetite)=="7" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">8
                                        <input type="radio" name="apetito" value="8" {{ old('apetito', $historySymptomDetail->appetite)=="8" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">9
                                        <input type="radio" name="apetito" value="9" {{ old('apetito', $historySymptomDetail->appetite)=="9" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">10
                                        <input type="radio" name="apetito" value="10" {{ old('apetito', $historySymptomDetail->appetite)=="10" ? 'checked='.'"'.'checked'.'"' : '' }}>
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
                                        <input type="radio" name="olfato" value="1" {{ old('olfato', $historySymptomDetail->smell)=="1" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">2
                                        <input type="radio" name="olfato" value="2" {{ old('olfato', $historySymptomDetail->smell)=="2" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">3
                                        <input type="radio" name="olfato" value="3" {{ old('olfato', $historySymptomDetail->smell)=="3" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">4
                                        <input type="radio" name="olfato" value="4" {{ old('olfato', $historySymptomDetail->smell)=="4" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">5
                                        <input type="radio" name="olfato" value="5" {{ old('olfato', $historySymptomDetail->smell)=="5" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">6
                                        <input type="radio" name="olfato" value="6" {{ old('olfato', $historySymptomDetail->smell)=="6" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">7
                                        <input type="radio" name="olfato" value="7" {{ old('olfato', $historySymptomDetail->smell)=="7" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">8
                                        <input type="radio" name="olfato" value="8" {{ old('olfato', $historySymptomDetail->smell)=="8" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">9
                                        <input type="radio" name="olfato" value="9" {{ old('olfato', $historySymptomDetail->smell)=="9" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">10
                                        <input type="radio" name="olfato" value="10" {{ old('olfato', $historySymptomDetail->smell)=="10" ? 'checked='.'"'.'checked'.'"' : '' }}>
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
                                        <input type="radio" name="voluntad" value="1" {{ old('voluntad', $historySymptomDetail->will)=="1" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">2
                                        <input type="radio" name="voluntad" value="2" {{ old('voluntad', $historySymptomDetail->will)=="2" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">3
                                        <input type="radio" name="voluntad" value="3" {{ old('voluntad', $historySymptomDetail->will)=="3" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">4
                                        <input type="radio" name="voluntad" value="4" {{ old('voluntad', $historySymptomDetail->will)=="4" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">5
                                        <input type="radio" name="voluntad" value="5" {{ old('voluntad', $historySymptomDetail->will)=="5" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">6
                                        <input type="radio" name="voluntad" value="6" {{ old('voluntad', $historySymptomDetail->will)=="6" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">7
                                        <input type="radio" name="voluntad" value="7" {{ old('voluntad', $historySymptomDetail->will)=="7" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">8
                                        <input type="radio" name="voluntad" value="8" {{ old('voluntad', $historySymptomDetail->will)=="8" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">9
                                        <input type="radio" name="voluntad" value="9" {{ old('voluntad', $historySymptomDetail->will)=="9" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">10
                                        <input type="radio" name="voluntad" value="10" {{ old('voluntad', $historySymptomDetail->will)=="10" ? 'checked='.'"'.'checked'.'"' : '' }}>
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
                                        <input type="radio" name="tos" value="1" {{ old('tos', $historySymptomDetail->cough)=="1" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">2
                                        <input type="radio" name="tos" value="2" {{ old('tos', $historySymptomDetail->cough)=="2" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">3
                                        <input type="radio" name="tos" value="3" {{ old('tos', $historySymptomDetail->cough)=="3" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">4
                                        <input type="radio" name="tos" value="4" {{ old('tos', $historySymptomDetail->cough)=="4" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">5
                                        <input type="radio" name="tos" value="5" {{ old('tos', $historySymptomDetail->cough)=="5" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">6
                                        <input type="radio" name="tos" value="6" {{ old('tos', $historySymptomDetail->cough)=="6" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">7
                                        <input type="radio" name="tos" value="7" {{ old('tos', $historySymptomDetail->cough)=="7" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">8
                                        <input type="radio" name="tos" value="8" {{ old('tos', $historySymptomDetail->cough)=="8" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">9
                                        <input type="radio" name="tos" value="9" {{ old('tos', $historySymptomDetail->cough)=="9" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">10
                                        <input type="radio" name="tos" value="10" {{ old('tos', $historySymptomDetail->cough)=="10" ? 'checked='.'"'.'checked'.'"' : '' }}>
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
                                        <input type="radio" name="diarrea" value="1" {{ old('diarrea', $historySymptomDetail->diarrhea)=="1" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">2
                                        <input type="radio" name="diarrea" value="2" {{ old('diarrea', $historySymptomDetail->diarrhea)=="2" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">3
                                        <input type="radio" name="diarrea" value="3" {{ old('diarrea', $historySymptomDetail->diarrhea)=="3" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">4
                                        <input type="radio" name="diarrea" value="4" {{ old('diarrea', $historySymptomDetail->diarrhea)=="4" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">5
                                        <input type="radio" name="diarrea" value="5" {{ old('diarrea', $historySymptomDetail->diarrhea)=="5" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">6
                                        <input type="radio" name="diarrea" value="6" {{ old('diarrea', $historySymptomDetail->diarrhea)=="6" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">7
                                        <input type="radio" name="diarrea" value="7" {{ old('diarrea', $historySymptomDetail->diarrhea)=="7" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">8
                                        <input type="radio" name="diarrea" value="8" {{ old('diarrea', $historySymptomDetail->diarrhea)=="8" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">9
                                        <input type="radio" name="diarrea" value="9" {{ old('diarrea', $historySymptomDetail->diarrhea)=="9" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">10
                                        <input type="radio" name="diarrea" value="10" {{ old('diarrea', $historySymptomDetail->diarrhea)=="10" ? 'checked='.'"'.'checked'.'"' : '' }}>
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
                                disabled='disabled' name="textComment">{{ old('textComment', $historySymptomDetail->changes)}}</textarea>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="form-group radioGroup2">
                            <legend class="textInputBig hablar">¿Lo hablaste con el doctor?</legend>
                            <div class="col-sm-12">
                                <label class="radioContainer">Si
                                    <input type="radio" name="hablar" value="1" {{ old('hablar', $historySymptomDetail->talk_doctor)=="1" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radioContainer">No
                                    <input type="radio" name="hablar" value="0" {{ old('hablar', $historySymptomDetail->talk_doctor)=="0" ? 'checked='.'"'.'checked'.'"' : '' }}>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </fieldset>
                        <fieldset class="form-group radioGroup2">
                            <legend>¿Algún comentario o nota que desees agregar?</legend>
                        <textarea name="comentario" class="form-control" id="nota" cols="40" rows="0">{{ old('comentario',$historySymptomDetail->commentary)}}</textarea>
                        </fieldset>
                        <div class="alert alert-danger alertBox" role="alert">
                            Falta completar campos
                        </div>
                        <input type="submit" class="btn btn-primary btnForm" value="Guardar">
                    <a href="{{ route('sintomas') }}" class="btn btn-danger">Cancelar</a>
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
