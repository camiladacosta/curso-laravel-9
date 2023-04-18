@csrf
<div class="mt-3">
    <textarea name="body" id="" cols="30" rows="10" placeholder="Comentário" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 br-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0">{{ $comment->body ?? old('body') }}</textarea>
    <label for="visible">
        <input type="checkbox" name="visible"
        @if (isset($comment) && $comment->visible)
            @checked(true)
        @endif
        >
        Visível?
    </label>

    <button type="submit" class="bg-teal-400 hover:bg-teal-500 rounded text-white p-2">Enviar</button>
</div>
