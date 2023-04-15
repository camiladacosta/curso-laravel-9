@extends('layouts.app')

@section('title', 'Novo Usuário')

@section('content')

<h2 class="text-4xl font-bold">Novo Usuário</h2>

@include('includes.validations-form')

<form action="{{ route('users.store') }}" method="post">
    @include('users._partials.form')
</form>

@endsection
