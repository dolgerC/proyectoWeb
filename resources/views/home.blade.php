@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <ul class="nav navbar-nav">
                        &nbsp;
                        <li><a href="{{ route('bienes.index') }}">Bienes</a></li>
                    <li><a href="{{ url('/contact') }}">Contacto</a></li>

                    </ul>
        </div>
    </div>
</div>
@endsection
