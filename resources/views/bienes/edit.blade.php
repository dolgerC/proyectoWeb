@extends('layouts.app2')

@section('content')
<div class="container">
    <h1>Edicion de Bienes</h1>
    <h4><a href="{{ route('bienes.index') }}">Bienes</a></h4>
    <hr>

    <form method="post" action="/bienes">
        @include('bienes.form')
        <button type="submit" class="btn btn-default">Editar</button>
    </form>
</div>
@endsection