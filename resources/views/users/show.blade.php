@extends('layouts.app')

@section('title', 'Listagem dos Usuários')

@section('content')

<h2 class="text-4xl font-bold">
    Listagem do usuário {{ $user->name }}
</h2>

<table class="table min-w-full divide-y bg-gray-100 mt-3">
    <thead>
        <tr>
          <th class="text-center py-2">Nome</th>
          <th class="text-center py-2">E-mail</th>
          <th class="text-center py-2">Ação</th>
        </tr>
      </thead>
      <tbody>
            <tr>
                <td class="text-center py-2">
                    {{$user->name}}
                </td>
                <td class="text-center py-2">
                    {{$user->email}}
                </td>
                <td class="text-center py-2">
                    <form action="{{ route('users.delete', $user->id) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="bg-gray-400 hover:bg-gray-500 p-2 rounded text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash-2"><path d="M3 6h18"></path><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path><line x1="10" x2="10" y1="11" y2="17"></line><line x1="14" x2="14" y1="11" y2="17"></line></svg>
                        </button>
                    </form>
                </td>
            </tr>
      </tbody>
</table>

@endsection
