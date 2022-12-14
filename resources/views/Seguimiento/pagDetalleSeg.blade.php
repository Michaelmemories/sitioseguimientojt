@extends('pagPlantilla')

@section('titulo')
    <h1 class="display-4">Página Detalles</h1>
@endsection

@section('seccion')
    <h3> Detalle estudiante </h3>

    <p> Id:                         {{ $xDetSeguimiento->id }} </p>
    <p> Código:                     {{ $xDetSeguimiento->idEst }} </p>
    <p> Trabajo Actual:             {{ $xDetSeguimiento->traAct }} </p>
    <p> Oficio Actual:              {{ $xDetSeguimiento->ofiAct }} </p>
    <p> Satisfacción estudiantil:   {{ $xDetSeguimiento->satEst }} </p>
    <p> Fecha de seguimiento:       {{ $xDetSeguimiento->fecSeg }} </p>
    <p> Estado de seguimiento:      {{ $xDetSeguimiento->estSeg}} </p>

@endsection