@extends('layouts.app')

@section('title', 'Listagem dos Usuários')

@section('content')

<h1 class="text-4xl font-bold">
    Listagem dos Usuários
    <a href="{{ route('users.create') }}">(+)</a>
</h1>

<form action="{{ route('users.index') }}" method="get">
    <div class="flex items-center mt-5">
        <input type="text" name="search" placeholder="Insira o filtro" class="border py-2 pl-2 mb-3 w-60 rounded">

        <button class="mb-2 bg-teal-400 hover:bg-teal-500 rounded text-white p-3 ml-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" x2="16.65" y1="21" y2="16.65"></line></svg>
        </button>
    </div>
</form>

<table class="table min-w-full divide-y bg-gray-100">
    <thead>
        <tr>
          <th class="text-center py-2">Nome</th>
          <th class="text-center py-2">E-mail</th>
          <th class="text-center py-2">Ações</th>
        </tr>
      </thead>
      <tbody>
            @foreach ($users as $user)
                <tr>
                    <td class="text-center py-2">
                        @if ($user->image)
                            <img src="{{ url("storage/{$user->image}") }}" alt="Imagem" class="object-cover w-20">
                        @else
                            <img src="{{ url("images/favicon.ico")}}" alt="Imagem" class="object-cover w-20">
                        @endif
                        {{$user->name}}
                    </td>
                    <td class="text-center py-2">
                        {{$user->email}}
                    </td>
                    <td class="text-center py-2">
                        <a href="{{ route('users.edit', $user->id)}}">
                            <button class="py-2 px-2 bg-green-400 hover:bg-green-500 text-white rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                            </button>
                        </a>
                        <a href="{{ route('users.show', $user->id)}}">
                            <button class="ml-2 py-2 px-2 bg-gray-500 hover:bg-gray-600 text-white rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                            </button>
                        </a>

                        <a href="{{ route('comments.index', $user->id)}}">
                            <button class="ml-2 py-2 px-2 bg-blue-200 hover:bg-blue-300 rounded">Anotações({{ $user->comments->count() }})
                            </button>
                        </a>
                    </td>
                </tr>
            @endforeach
      </tbody>
</table>

<div class="py-4">
    {{ $users->appends(['search' => request()->get('search', '')])->links() }}
</div>

@endsection
