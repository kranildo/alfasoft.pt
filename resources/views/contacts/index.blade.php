@extends('layouts.app')

@section('content')
@include('includes.navbar')
<h1>Listagem de Contatos</h1>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Contact</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach($contacts as $contact)
        <tr>
            <td>
                <strong>
                    <a href="{{ route('contacts.show', ['id' => $contact->id]) }}">
                        {{ $contact->id }}</a></strong>
            </td>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->contact }}</td>
            <td>{{ $contact->email }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection