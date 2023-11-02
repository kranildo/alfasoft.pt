@extends('layouts.app')

@section('content')
@include('includes.navbar')
<h1>Detalhes do Contato</h1>

<p><strong>ID:</strong> {{ $contact->id }}</p>
<p><strong>Nome:</strong> {{ $contact->name }}</p>
<p><strong>Contact:</strong> {{ $contact->contact }}</p>
<p><strong>Email:</strong> {{ $contact->email }}</p>
<p>
    <a href="{{ route('contacts.edit', ['id' => $contact->id]) }}" class="btn btn-primary mt-4">Editar Contato</a>
</p>


@endsection