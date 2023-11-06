@extends('layouts.app')

@section('title', 'Register')

@section('content')

<h1 class="display-1 text-center">Register View</h1>
<div class="container col-md-5 bg-secondary border border-4 rounded-3">
  
    <form class="row g-1"  method="POST" action="">
        @csrf


        <div class="col-md-8 offset-md-2" > 
            <label for="Nombre" class="form-label">Nombre de usuario</label>
            <input type="name" class="form-control" placeholder="ingrese su nombre completo" id="name" name="name">
          </div>
          @error('name')
          <p class="border border-danger rounded-3 bg-danger col-md-8 offset-md-2">Error, nombre requerido</p>
         @enderror 
      
        <div class="col-md-8 offset-md-2" > 
        
          <label for="Email" class="form-label">Email </label>
          <input type="email" class="form-control" placeholder="ingrese su correo electronico" id="email" name="email">
          @error('email')
          <p class="border border-danger rounded-3 bg-danger col-md-8 offset-md-2">Error, email requerido</p>
         @enderror 
      
          <label for="date" class="form-label">Fecha de Nacimiento</label>
          <input type="date" class="form-control" id="fn" name="fn">
          @error('fn')
          <p class="border border-danger rounded-3 bg-danger col-md-8 offset-md-2">Error, fecha requerido</p>
         @enderror 
      
          <label for="mat" class="form-label">Matricula</label>
          <input type="name" class="form-control" id="mat" name="mat"  placeholder="ingrese su matricula">
          @error('mat')
          <p class="border border-danger rounded-3 bg-danger col-md-8 offset-md-2">Error, matricula requerida</p>
         @enderror 
      
          <label for="mat" class="form-label">Seleccione su genero</label> 
          <select type="name" class="form-select" aria-label="Default select example" id="gen" name="gen">
            <option selected>Seleccionar genero</option>
            <option value="1">Masculino</option>
            <option value="2">Femenino</option>
          </select>
          @error('gen')
          <p class="border border-danger rounded-3 bg-danger col-md-8 offset-md-2">Error, seleccionar su genero es requerido</p>
         @enderror 
      
        </div>
        <div class="col-md-8 offset-md-2">
          <label for="password" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="contraseña de 8 digitos">
          @error('password')
          <p class="border border-danger rounded-3 bg-danger col-md-8 offset-md-2">Error, contraseña requerida</p>
         @enderror 
      
          <label for="password" class="form-label">Confirme su contraseña</label>
          <input type="password" class="form-control" id="password" name="password_confirmation"  placeholder="ingrese de nuevo su contraseña">
          @error('password')
          <p class="border border-danger rounded-3 bg-danger col-md-8 offset-md-2">Error, las contraseñas no coinciden</p>
         @enderror 
      
        </div>
    
        
        <button class="btn btn-dark col-md-6 my-3 offset-md-3" type="submit" ¿>Registrarse</button>
     
        
    </div>
    </form> 
@endsection