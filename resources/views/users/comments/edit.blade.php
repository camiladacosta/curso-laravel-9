@extends('layouts.app')

@section('title', 'Editar Comentário')

@section('content')

<h2 class="text-4xl font-bold">
    Editar Comentário
</h2>

@include('includes.validations-form')

<form action="{{ route('comments.update', $comment->id) }}" method="post">
    @method('PUT')
    @include('users.comments._partials.form')
</form>

@endsection
