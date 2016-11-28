@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="col-md-8 col-md-offset-2">
        <div class="row">
            <div class="col-md-12">
                <h1>Contáctenos</h1>
                <hr>
                <form action="{{url('contact')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label name="name">Nombre</label>
                        <input id="name" name="name" class="from-control">
                    </div>
                    <div class="form-group">
                        <label name="email">Emial</label>
                        <input id="email" name="email" class="from-control">
                    </div>
                    <div class="form-group">
                        <label name="message">Mensaje</label>
                        <textarea id="message" name="message" class="from-control">Escriba su mensaje aquí...</textarea>
                    </div>
                    <input type="submit" value="Enviar" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
