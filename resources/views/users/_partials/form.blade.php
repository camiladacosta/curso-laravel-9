@csrf
<div class="mt-3">
    <input type="text" name="name" placeholder="Nome" value="{{ $user->name ?? old('name') }}" class="border py-2 pl-2 w-60 rounded">
    <input type="email" name="email" placeholder="Email" value="{{ $user->email ?? old('email') }}" class="border py-2 pl-2 w-60 rounded">
    <input type="password" name="password" placeholder="Senha" class="border py-2 pl-2 w-60 rounded">

    <button type="submit" class="bg-teal-400 hover:bg-teal-500 rounded text-white p-2">Enviar</button>
</div>
