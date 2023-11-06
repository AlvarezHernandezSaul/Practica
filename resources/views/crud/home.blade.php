@extends('layouts.app')

@section('title', 'home')

@section('content')

<h3 class="display-7 text-start">CRUD AW I 4.0</h3>
<div>

<a type="button" name="gato" class="btn btn-outline-primary" href="{{ route('gato') }}">jugar EL Gato</a>
<a type="button" name="registro" class="btn btn-outline-primary" href="{{ route('registro') }}">Vista registros</a>

</div>
<div class="modal fade" id="addEmployeeModal" tabindex="-1" aria-labelledby="exampleModalLabel"
data-bs-backdrop="static" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
  <div class="modal-content bg-dark">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo usuario</h5>
      <button type="button" class="btn-close bg-danger" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <form action="#" method="POST" id="add_employee_form" enctype="multipart/form-data">
      @csrf
      <div class="modal-body p-4 bg-dark">
        <div class="col-lg">
            <label for="matri">Matricula</label>
            <input type="text" name="matri" class="form-control" id="matri" placeholder="matricula" required>
          </div>
        <div class="row">
          <div class="col-lg">
            <label for="name">Nombre</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="nombre" required>
          </div>
          <div class="col-lg">
            <label for="apep">Apellido Paterno</label>
            <input type="text" name="apep" class="form-control"  id="apep" required>
          </div>
          <div class="col-lg">
            <label for="apem">Apellido Materno</label>
            <input type="text" name="apem" class="form-control"  id="apem" required>
          </div>
        </div>
        <div class="my-2">
          <label for="email">E-mail</label>
          <input type="email" name="email"  id="email" class="form-control" placeholder="E-mail" required>
        </div>
        <div class="my-2">
            <label for="fnac">Fecha de Nacimiento</label>
            <input type="date" name="fnac" id="fnac" class="form-control"  required>
          </div>
        <div class="my-2">
          <label for="phone">Telefono</label>
          <input type="tel" name="phone" id="phone" class="form-control" placeholder="Phone" required>
        </div>
        <div class="my-2">
          <label for="avatar">Selecciona Imagen de Usuario</label>
          <input type="file" name="avatar" class="form-control" required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" id="add_employee_btn" class="btn btn-primary">Agregar usuario</button>
      </div>
    </form>
  </div>
</div>
</div>
{{-- add new employee modal end --}}

{{-- edit employee modal start --}}
<div class="modal fade" id="editEmployeeModal" tabindex="-1" aria-labelledby="exampleModalLabel"
data-bs-backdrop="static" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
  <div class="modal-content bg-dark">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Editar usuario</h5>
      <button type="button" class="btn-close bd-danger" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <form action="#" method="POST" id="edit_employee_form" enctype="multipart/form-data">
      @csrf
      <input type="hidden" name="emp_id" id="emp_id">
      <input type="hidden" name="emp_avatar" id="emp_avatar">
      <div class="modal-body p-4 bg-dark">
        <div class="col-lg">
            <label for="matri">Matricula</label>
            <input type="text" name="matri" id="matri" class="form-control" placeholder="matricula" required>
          </div>
          <div class="row">
            <div class="col-lg">
              <label for="name">Nombre</label>
              <input type="text" name="name" class="form-control" id="name" placeholder="nombre" required>
            </div>
            <div class="col-lg">
              <label for="apep">Apellido Paterno</label>
              <input type="text" name="apep" class="form-control"  id="apep" required>
            </div>
            <div class="col-lg">
              <label for="apem">Apellido Materno</label>
              <input type="text" name="apem" class="form-control"  id="apem" required>
            </div>
          </div>
        <div class="my-2">
          <label for="email">E-mail</label>
          <input type="email" name="email" id="email" class="form-control" placeholder="E-mail" required>
        </div>
        <div class="my-2">
            <label for="fnac">Fecha de Nacimiento</label>
            <input type="date" name="fnac" class="form-control"  id="fnac" required>
          </div>
          <div class="my-2">
            <label for="phone">Telefono</label>
            <input type="tel" name="phone" class="form-control" id="phone "placeholder="Phone" required>
          </div>
          <div class="my-2">
            <label for="avatar">Selecciona Imagen de Usuario</label>
            <input type="file" name="avatar" class="form-control" required>
          </div>
        <div class="mt-2" id="avatar">

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" id="edit_employee_btn" class="btn btn-success">Actualizar usuario</button>
      </div>
    </form>
  </div>
</div>
</div>
{{-- edit employee modal end --}}

<div class="container">
  <div class="row my-5">
    <div class="col-lg-12">
      <div class="card shadow">
        <div class="card-header bg-primary d-flex justify-content-between align-items-center">
          <h3 class="text-light">Control de Usuarios</h3>
          <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addEmployeeModal"><i
              class="bi-plus-circle me-2"></i>Agregar usuarios</button>
        </div>
        <div class="card-body" id="show_all_employees">
          <h1 class="text-center text-secondary my-5">Cargando...</h1>
        </div>
      </div>
    </div>
  </div>
</div>






@endsection