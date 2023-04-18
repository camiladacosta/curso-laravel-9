@extends('layouts.app')

@section('title', 'Novo Comentário')

@section('content')

<h2 class="text-4xl font-bold">Novo Comentário</h2>

{{-- @include('includes.validations-form') --}}

<form action="{{ route('comments.store', $user->id) }}" method="post">
    @include('users.comments._partials.form')
</form>

@endsection
