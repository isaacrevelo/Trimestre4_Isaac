@extends('layouts.app')

@section('content')

<div class="container w-50 border p-4 mt-4">
  <form action="{{ route('vacante.store') }}" method="POST" novalidate>
    @csrf

    @if (session('success'))
      <h6 class="alert alert-success p-2 mt-2">{{ session('success') }}</h6>
    @endif

    <div class="mb-3">
      <label for="descripcion" class="form-label">
        Descripción de la vacante:
      </label>
      <input
        id="descripcion"
        name="descripcion"
        type="text"
        class="form-control"
        value="{{ old('descripcion') }}"
      >
      @error('descripcion')
        <h6 class="alert alert-danger p-2 mt-2">{{ $message }}</h6>
      @enderror
    </div>

    <div class="mb-3">
      <label for="cantidad_vacantes" class="form-label">
        Cantidad de vacantes:
      </label>
      <input
        id="cantidad_vacantes"
        name="cantidad_vacantes"
        type="text"
        class="form-control"
        value="{{ old('cantidad_vacantes') }}"
      >
      @error('cantidad_vacantes')
        <h6 class="alert alert-danger p-2 mt-2">{{ $message }}</h6>
      @enderror
    </div>

    <div class="mb-3">
      <label for="salario" class="form-label">
        Salario:
      </label>
      <input
        id="salario"
        name="salario"
        type="text"
        class="form-control"
        value="{{ old('salario') }}"
      >
      @error('salario')
        <h6 class="alert alert-danger p-2 mt-2">{{ $message }}</h6>
      @enderror
    </div>

    <button type="submit" class="btn btn-primary">
      Enviar
    </button>
  </form>
</div>

@endsection
