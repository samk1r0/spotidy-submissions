<form wire:submit.prevent="addRequestToTheTable" class="bg-neutral-800 shadow-xl rounded px-8 pt-6 pb-8">
    
    <div class="mb-4">
        <label class="block text-sm font-bold mb-2" for="email">
            Email
        </label>
        <input wire:model.debounce="email" class="shadow bg-neutral-700 appearance-none border-transparent rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" required placeholder="Your email">
    </div>
    <div class="mb-6">
        <label class="block text-sm font-bold mb-2" for="song_link">
            Song link
        </label>
        <textarea wire:model.debounce="link" rows="4" class="shadow bg-neutral-700 appearance-none border-transparent rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="song_link" type="text" required placeholder="Ссылка на песню"></textarea>
    </div>
    <div class="mb-6">
        <label class="block text-sm font-bold mb-2" for="description">
            Descirption
        </label>
        <textarea wire:model.debounce="description" rows="4" class="shadow bg-neutral-700 appearance-none border-transparent rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="description" type="text" placeholder="Дополнительная информация"></textarea>
    </div>
    <div class="flex items-center justify-between">
        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
            Отправить на прослушивание
        </button>
    </div>
</form>