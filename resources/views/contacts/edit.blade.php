@extends('layouts.app')

@section('content')
@include('includes.navbar')
<h1>Editar Contato</h1>

<form method="POST" action="{{ route('contacts.update', $contact->id) }}">
    @csrf
    @method('PUT') <!-- Use o método PUT para atualizar o registro -->

    <div class="form-group">
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ $contact->name }}">
    </div>

    <div class="form-group">
        <label for="contact">Contact:</label>
        <input type="text" name="contact" id="contact" class="form-control" value="{{ $contact->contact }}">
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" class="form-control" value="{{ $contact->email }}">
    </div>

    <button type="submit" class="btn btn-primary mt-4">Atualizar Contato</button>
</form>
@endsection