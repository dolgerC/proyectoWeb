<input type="hidden" name="_token" value="{{ csrf_token() }}">

@if(isset($bien))

    <div class="form-group">
        <label for="exampleInputEmail1">Precio</label>
        <input type="text" name="precio" class="form-control" placeholder="Precio" value="{{ $bien->precio }}">
    </div>


    <div class="form-group">
        <label for="exampleInputEmail1">Descripción</label>
        <input type="text" name="descripcion" class="form-control" placeholder="Descripcion" value="{{ $bien->descripcion}}">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Ubicación</label>
        <input type="text" name="ubicacion" class="form-control" placeholder="Ubicacion" value="{{ $bien->ubicacion }}">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Imagen</label>
        <input type="file" name="imagen" class="form-control" value="{{ $bien->imagen }}">
    </div>


@else


<div class="form-group">
        <label for="exampleInputEmail1">Precio</label>
        <input type="text" name="precio" class="form-control">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Descripción</label>
        <input type="text" name="descripcion" class="form-control">
    </div>

 <div class="form-group">
        <label for="exampleInputEmail1">Ubicación</label>
        <input type="text" name="ubicacion" class="form-control" >
    </div>

<div class="form-group">
        <label for="exampleInputEmail1">Imagen</label>
        <input type="file" name="imagen" class="form-control">
    </div>


@endif 