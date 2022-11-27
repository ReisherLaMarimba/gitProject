<div class="container">
    <div class="row row-cols-4 row-cols-md-3">
        @if(count($peliculas)<=0)
            <tr>
                <td colspan="8">
                    No hay resultados
                </td>
            </tr>
        @endif
        @foreach($peliculas as $pelicula)

        <div class="col">
            <div class="card h-100" >

                     <!-- <img src="..." class="card-img-top" alt="..."> -->
                
                    <iframe class="card-img-top" src="<?php echo $pelicula->Link;?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              <div class="card-body" >
                    <h4 class="card-title">{{$pelicula->titulo}}</h5>
                    <h6 class="card-text">Director: <h6 style="color:#05C2FF">{{$pelicula->director}}</h6></h6>
                    <h6 class="card-text">Actores: <h6 style="color:#05C2FF">{{$pelicula->actores}}</h6></h6>
                    <p class="card-text">Reseña:<h6 style="color:#05C2FF">{{$pelicula->reseña}}</h6></p>
                    <p class="card-text">Fecha de estreno:<h4 style="color:#05C2FF"> {{$pelicula->fecha_estreno}}</h4></p>

                    @if(Auth::id())
                    <!-- <a href="#" class="card-link"> -->

                        <form action="{{ url('/peliculas/'.$pelicula->id) }}" method="post">
                            @csrf
                            {{method_field('DELETE')}}
                            <input type="submit" onclick="return confirm('Eliminar pelicula?')" value="Eliminar">
                        </form>

                        <a href="{{url('/peliculas/'.$pelicula->id.'/edit')}}">
                            Editar Pelicula
                        </a>
                        <br>

                    <!-- </a> -->
                    @endif
                    

                </div>
               
            </div>
            
        </div>
     
        @endforeach
        
    </div>
</div>