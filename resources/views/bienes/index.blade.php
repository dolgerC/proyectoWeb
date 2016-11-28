@extends('layouts.app2')

@section('content')
<div class="container">
    <h1>Bienes</h1>
    <h4><a href="{{ route('bienes.create') }}" class="btn btn-info">Registrar Bien</a></h4>
     <h4><a href="{{ url('/home') }}" class="btn btn-info">Inicio</a></h4>
    <hr>

    <div class="table-responsive">
        @if($data)
            <table class="table">
                <thead>
                    <tr>
                        <td>Imagen</td>
                        <td>Precio</td>
                        <td>Descripción</td>
                        <td>Ubicación</td>
                    </tr>
                </thead>
                <tbody>
                @foreach($data as $row)
                    <tr>
                        <td><img src="../casas.jpg" width="150" height="150"></td>
                        <td>{{ $row->precio }}</td>
                        <td>{{ $row->descripcion }}</td>
                        <td>{{ $row->ubicacion }}</td>
                        <td>
                            <a href="{{ route('bienes.edit', $row->id) }}" class="btn btn-info"><span class="glyphicon glyphicon glyphicon-pencil" aria-hidden="true"></span></a>

                            <form action="{{ route('bienes.destroy', $row->id) }}" method="post">
                                <input name="_method" type="hidden" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                            </form>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        @endif
    </div>
</div>
@endsection