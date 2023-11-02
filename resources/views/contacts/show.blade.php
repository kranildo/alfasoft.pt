@extends('layouts.app')

@section('content')
@include('includes.navbar')
<h1>Detalhes do Contato</h1>

<p><strong>ID:</strong> {{ $contact->id }}</p>
<p><strong>Nome:</strong> {{ $contact->name }}</p>
<p><strong>Contact:</strong> {{ $contact->contact }}</p>
<p><strong>Email:</strong> {{ $contact->email }}</p>

@endsection