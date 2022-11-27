@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
    <ul>
@foreach($errors->all() as $error)
   <li> {{$error}}</li>
@endforeach
</ul>
</div>
@endif
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>


<label for="Titulo">Titulo</label>
<input type="text" name="Titulo" value="{{ isset($pelicula->titulo)?$pelicula->titulo:''}}" id="Titulo">

<label for="Director">Director</label>
<input type="text" name="Director" value="{{ isset($pelicula->director)?$pelicula->director:''}}" id="Director">

<label for="Reseña">Reseña</label>
<input type="text" name="Reseña" value="{{ isset($pelicula->reseña)?$pelicula->reseña:''}}" id="Reseña">

<label for="Actores">Actores</label>
<input type="text" name="Actores" value="{{ isset($pelicula->actores)?$pelicula->actores:''}}" id="Actores">

<!-- <label for="FechaEstreno">Fecha de Estreno</label> -->
<!-- <form> -->
<!-- <div class="row form-grougp justify-content-center"> -->
<label for="datepicker">Fecha de Estreno</label>
<!-- <div class="col"> -->
<div class="input-group date" id="datepicker" name="datepicker">
    <input type="text" class="form-control date" name="fecha_estreno" value="{{ isset($pelicula->fecha_estreno)?$pelicula->fecha_estreno:''}}" id="fecha_estreno">
    <span class="input-group-append">
        <span class="input-group-text">
            <i class="fa fa-calendar"></i>
        </span>

    </span>
</div>
<!-- </div> -->

<!-- </div> -->
<!-- </form> -->
<!-- <input type="text" name="FechaEstreno" id="FechaEstreno"> -->

<label for="Link">Link</label>
<input type="text"  value="{{ isset($pelicula->Link)?$pelicula->Link:''}}" name="Link" id="Link">

<input type="submit" value="Guardar">

<script type="text/javascript">
    $('#datepicker').datepicker({
        format: 'yyyy-mm-dd'
    });
</script>