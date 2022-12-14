@extends('pagPlantilla')

@section('titulo')
    <h1 class="display-4">Página de actualizar</h1>
@endsection

@section('seccion')
    <h3> Actualizar detalle </h3>

    @if(session('msj'))
        <div class="alert alert-success">
            {{ session('msj')}}
        </div>
    @endif

    <form action="{{ route('Seguimiento.xUpdateSeg' , $xActSeguimiento->id)}}" method="post" class="d-grid gap-2">
        @method('PUT')
        @csrf

        @error('idEst')
            <div class="alert alert-danger">
                El código es requerido
            </div>
        @enderror

        @error('traAct')
            <div class="alert alert-danger">
                El trabajo actual es requerido
            </div>
        @enderror

        @error('ofiAct')
            <div class="alert alert-danger">
                El oficio actual es requerido
            </div>
        @enderror

        @error('satEst')
            <div class="alert alert-danger">
                Satisfacción estudiantil es requerido
            </div>
        @enderror

        @error('fecSeg')
            <div class="alert alert-danger">
                Fecha de seguimiento es requerido
            </div>
        @enderror

        @error('estSeg')
            <div class="alert alert-danger">
                Estado de seguimiento es requerido
            </div>
        @enderror

        <input type="text" name="idEst" placeholder="Código" value="{{ $xActSeguimiento->idEst }}" class="form-control mb-2">
        <select name="traAct" class="form-control mb-2">
            <option value="">Seleccione trabajo actual...</option>
            <option value="1" @if ($xActSeguimiento->traAct == 1) {{ "SELECTED" }} @endif>Si</option>
            <option value="2" @if ($xActSeguimiento->traAct == 2) {{ "SELECTED" }} @endif>No</option>
        </select>
        <input type="text" name="ofiAct" placeholder="Oficio Actual" value="{{ $xActSeguimiento->ofiAct }}" class="form-control mb-2">
        <select name="satEst" class="form-control mb-2">
            <option value="">Seleccione satisfacción estudiantil...</option>
            <option value="0" @if ($xActSeguimiento->satEst == 0) {{ "SELECTED" }} @endif>No esta satisfecho</option>
            <option value="1" @if ($xActSeguimiento->satEst == 1) {{ "SELECTED" }} @endif>Regular</option>
            <option value="2" @if ($xActSeguimiento->satEst == 2) {{ "SELECTED" }} @endif>Bueno</option>
            <option value="3" @if ($xActSeguimiento->satEst == 3) {{ "SELECTED" }} @endif>Muy bueno</option>
        </select>
        <input type="date" name="fecSeg" placeholder="Fecha de seguimiento" value="{{ $xActSeguimiento->fecSeg }}" class="form-control mb-2">
        <input type="text" name="estSeg" placeholder="Estado de seguimiento" value="{{ $xActSeguimiento->estSeg }}" class="form-control mb-2">

        <button class="btn btn-outline-warning" type="submit">Actualizar</button>
    </form>


@endsection