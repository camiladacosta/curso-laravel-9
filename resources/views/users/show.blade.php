@extends('layouts.app')

@section('title', 'Listagem dos Usuários')

@section('content')

<h1>Listagem do usuário {{ $user->name }}</h1>

<ul>
    <li>{{ $user->name }}</li>
    <li>{{ $user->email }}</li>
</ul>

<form action="{{ route('users.delete', $user->id) }}" method="post">
    @method('DELETE')
    @csrf
    <button>Deletar</button>
</form>

@endsection
