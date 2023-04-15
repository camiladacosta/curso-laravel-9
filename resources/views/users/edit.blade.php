@extends('layouts.app')

@section('title', 'Editar Usuário')

@section('content')

<h2 class="text-4xl font-bold">
    Listagem do usuário {{ $user->name }}
</h2>

@include('includes.validations-form')

<form action="{{ route('users.update', $user->id) }}" method="post">
    @method('PUT')
    @include('users._partials.form')
</form>

@endsection
