@extends('layouts.app2')

@section('content')
<div class="container">
    <h1>Registro de Bienes</h1>
    <h4><a href="{{ route('bienes.index') }}" class="btn btn-info">Bienes</a></h4>
    <hr>

    <form method="post" action="/bienes" enctype="multipart/form-data">
        @include('bienes.form')
        <button type="submit" class="btn btn-default">Registrar</button>
    </form>
</div>
@endsection