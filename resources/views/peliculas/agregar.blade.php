
@include('layouts.app')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3">
                <div class="card1">
                    <div class="card-header">INSERTAR PELICULA</div>

                    <div class="card-body">
                       <form action="{{ url('/peliculas') }}" method="post">
                           @csrf
                          @include('peliculas.form')
                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

 
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstra...">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/lib...">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/lib...">
<script src="https://ajax.googleapis.com/ajax/libs..."></script>
<script src="https://cdn.jsdelivr.net/npm/bootstra..."></script>
<script src="https://cdnjs.cloudflare.com/ajax/lib..."></script> -->

    <script type="text/javascript">
$('#datepicker').datepicker({
    format: 'yyyy-mm-dd'
});
</script>

