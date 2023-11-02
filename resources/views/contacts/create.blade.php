@extends('layouts.app')
@section('content')
@include('includes.navbar')
<h1>Adicionar Novo Contato</h1>

<form method="POST" action="{{ route('contacts.store') }}">
    @csrf
    <div class="form-group">
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>

    <div class="form-group">
        <label for="contact">Contact:</label>
        <input type="text" name="contact" id="contact" class="form-control">
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary mt-4">Adicionar Contato</button>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

</form>
@endsection