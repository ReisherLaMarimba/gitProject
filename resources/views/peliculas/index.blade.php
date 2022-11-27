@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="col-md-12">

                    <form action="{{ route('peliculas.index') }}" method="get">
                        <div class="form-row">
                            <div class="col-sm-5 my-1">
                                <input type="text" class="form-control" name="buscar" value="{{$buscar}}">
                            </div>
                            <div class="col-sm-5 my-1">
                                <input type="submit" class="btn btn-primary" value="Buscar">
                                <!-- <input type="submit" class="btn btn-primary" value="Mostrar Todo"> -->
                                
                                <a href="{{ url('/peliculas') }}" type="button">
                                    <input type="button" class="btn btn-primary" value="Mostrar Todo" >
                                </a>
                            </div>
                            <!-- <div class="row-auto">
                                <input type="submit" class="btn btn-primary" value="Mostrar Todo">
                            </div> -->
                        </div>
                    </form>

                </div>
                <div class="card">
                    <!-- <div class="card-header">APP SIN USUARIO</div> -->

                    <div class="card-body">
                       <!-- APP SIN USUARIO2 -->
                       @include('/peliculas/mostrar')
                    </div>
                <!-- </div> -->
            </div>
        </div>
    </div>
@endsection
