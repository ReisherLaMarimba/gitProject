@include('layouts.app')

<form action="{{url('/peliculas/'.$pelicula->id)}}" method="post">
    @csrf 
    {{method_field('PATCH')}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-header">EDITAR PELICULA</div>

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

  
    


  </form>
