@extends('pagPlantilla')

@section('titulo')
    <h1 class="display-4">Página de Registro</h1>
@endsection

@section('seccion')
    
    @if(session('msj'))
        <div class="alert alert-success">
            {{ session('msj')}}
        </div>
    @endif

    <form action="{{ route('Seguimiento.xRegistrarSeg')}}" method="post" class="d-grid gap-2">
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

        <input type="text" name="idEst" placeholder="Código" value="{{ old('idEst')}}" class="form-control mb-2">
        <select name="traAct" class="form-control mb-2">
            <option value="">Seleccione trabajo actual...</option>
            <option value="1">Si</option>
            <option value="2">No</option>
        </select>
        <input type="text" name="ofiAct" placeholder="Oficio Actual" value="{{ old('ofiAct')}}" class="form-control mb-2">
        <select name="satEst" class="form-control mb-2">
            <option value="">Seleccione satisfacción estudiantil...</option>
            <option value="0">No esta satisfecho</option>
            <option value="1">Regular</option>
            <option value="2">Bueno</option>
            <option value="3">Muy bueno</option>
        </select>
        <input type="date" name="fecSeg" placeholder="Fecha de seguimiento" value="{{ old('fecSeg')}}" class="form-control mb-2">
        <input type="text" name="estSeg" placeholder="Estado de seguimiento" value="{{ old('estSeg')}}" class="form-control mb-2">

        <button type="button" class="btn btn-outline-success">Agregar</button>
    </form>

    <hr>
    <h3><center>Lista de Registros</center></h3>

    <table class="table">
        <thead class="table-success">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Código</th>
                <th scope="col">Trabajo Actual</th>
                <th scope="col">Oficio Actual</th>
                <th scope="col">Satisfaccion estudidantil</th>
                <th scope="col">Editar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($xSeguimiento as $item)
            <tr>
                <th scope="row">{{ $item->id }}</th>
                
                <td>
                    <a href="{{ route('Seguimiento.xDetalleSeg',$item->id) }}">    
                    {{ $item->idEst }}
                    </a>
                </td>
                <td>{{ $item->traAct }}</td>
                <td>{{ $item->ofiAct }}</td>
                <td>{{ $item->satEst }}</td>
                <td>
                    
                    <a class="btn btn-warning btn-sm" href="{{route('Seguimiento.xActualizarSeg', $item->id ) }}">
                    A
                    </a>
                    <-->
                    <form action="{{route('Seguimiento.xEliminarSeg', $item->id ) }}" method="post" class="d-inline">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">X</button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $xSeguimiento->links() }}

@endsection