@extends('layouts.app')

@section('content')
 

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<title>Contacto</title>
</head>

<body>
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
<div class="col-md-12 p-lg-2 mx-auto my-2">
<h1 class="display-3 fw-normal">Contacto</h1>
<p class="lead fw-normal">Si tienes cualquier duda no dudes en contactar con nosotros.</p>
</div>
</div>

<div class="container mt-3">
<div class="row">
<div class="col-md-12">

<form action="{{ route('contact.send') }}" method="POST" class="row g-3 needs-validation" novalidate>
@csrf
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="validationCustom01" value="Nombre" required>
    <div class="valid-feedback">
      ¡Se ve bien!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Apellido</label>
    <input type="text" class="form-control" id="validationCustom02" value="Apellido" required>
    <div class="valid-feedback">
      ¡Se ve bien!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Nombre de usuario</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Por favor, elije un nombre de usuario.
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom03" class="form-label">Ciudad</label>
    <input type="text" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Proporciona una ciudad válida.
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom04" class="form-label">Provincia</label>
    <input type="text" class="form-control" id="validationCustom04" required>
    <div class="invalid-feedback">
      Selecciona un estado válido.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom05" class="form-label">Código postal</label>
    <input type="text" class="form-control" id="validationCustom05" required>
    <div class="invalid-feedback">
      Proporciona un código postal válido.
    </div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Acepta los términos y condiciones
      </label>
      <div class="invalid-feedback">
        Debe estar de acuerdo antes de enviar.
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-success" type="submit">Enviar formulario</button>
  </div>
</form>



</body>

</html>

@endsection