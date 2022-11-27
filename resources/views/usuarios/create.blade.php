@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Responsive Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="{{ asset('css/bootstrap1.css') }}" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="{{ asset('css/custom1.css') }}" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="{{ asset('css/font-awesome1.css') }}" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
     
           
          
<div id="wrapper">
       
       <nav class="navbar-default navbar-side" role="navigation">
           <div class="sidebar-collapse">
               <ul class="nav" id="main-menu">
                


                   <li class="active-link">
                       <a href="/usuarios/dashboard" ><i class="fa fa-desktop "></i>Panel Central<span class="badge">Nuevo!</span></a>
                   </li>
                  

                   <li>
                       <a href="/usuarios/create"><i class="fa fa-table "></i>Crear Usuario<span class="badge">Nuevo!</span></a>
              


                 
               </ul>
                           </div>

       </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
          <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Crear Usuario</h2>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />

                <div class="login-container">
	<form action="{{route('usuarios.store')}}" method="post" class="form-login">
        @csrf
		<ul class="login-nav">
			<li class="login-nav__item active">
				<a href="#">Agregar</a>
			</li>

		</ul>
        <label for="login-input-user" class="login__label">
			Nombre
		</label>
		<input id="login-input-user" class="login__input" name = "name" type="text" />

		<label for="login-input-user" class="login__label">
			Correo
		</label>
		<input id="login-input-user" class="login__input" name="email" type="email" />
        
		<label for="login-input-password" class="login__label">
			Contraseña
		</label>
		<input id="login-input-password" class="login__input" name = "password"type="password" />
        
        @foreach($roles as $id => $role)
        <label for="login-sign-up" class="login__label--checkbox" >
    
			<input id="login-sign-up" type="checkbox" name="roles[]" value="{{$id}}" class="login__input--checkbox" />
            <H4>{{$role}} </h4>
		</label>
        
		@endforeach
		<button class="login__submit" type="submit" >Agregar</button>
	</form>   
</div>             
</body>
</html>
@endsection