@extends('layouts.app')

@section('title', "Comentários do Usuário")

@section('content')

<h1 class="text-4xl font-bold">
    Comentários do Usuário {{ $user->name }}
    <a href="{{ route('comments.create', $user->id) }}">(+)</a>
</h1>

<form action="{{ route('comments.index', $user->id) }}" method="get">
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
          <th class="text-center py-2">Comentário</th>
          <th class="text-center py-2">Visível</th>
          <th class="text-center py-2">Ações</th>
        </tr>
      </thead>
      <tbody>
            @foreach ($comments as $comment)
                <tr>
                    <td class="text-center py-2">
                        {{$comment->body}}
                    </td>
                    <td class="text-center py-2">
                        {{$comment->visible ? 'Sim' : 'Não'}}
                    </td>
                    <td class="text-center py-2">
                        <a href="{{ route('comments.edit', ['user' => $user->id, 'id' => $comment->id ])}}">
                            <button class="py-2 px-2 bg-green-400 hover:bg-green-500 text-white rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                            </button>
                        </a>
                    </td>
                </tr>
            @endforeach
      </tbody>
</table>

@endsection
