<form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="{{ url('noticias') }}">
{{ csrf_field() }}
  <div class="form-group">
    <label for="titulo">Titulo</label>
    <input type="text" class="form-control" name="titulo" id="titulo" placeholder="titulo">
    @if($errors->has('titulo'))
    <span style="color:red"> {{$errors->first('titulo')}}</span>
    @endif
  </div>
  <div class="form-group">
    <label for="descripcion">Descripción</label>
    <input type="text" class="form-control" name="descripcion"  id="descripcion" placeholder="descripcion">
    @if($errors->has('descripcion'))
    <span style="color:red"> {{$errors->first('descripcion')}}</span>
    @endif
  </div>
  <div class="form-group">
    <label for="urlImg">File input</label>
    <input type="file"  id="urlImg" name="urlImg">
  </div>
 
  <button type="submit" class="btn btn-default">Crear</button>
</form>