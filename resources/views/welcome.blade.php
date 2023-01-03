@extends('layouts.default')

@section('content')
    <div class="flex justify-center m-8">
        <a class="self-center" href="https://open.spotify.com/playlist/0U4v7Eo2A0yNfJs3kJ3E5V?si=d1d27b1865874c02">
            <img class="h-48 w-36 rounded mb-2" src="https://i.scdn.co/image/ab67706c0000bebb75241867475f7a728eabe8b4" alt="Playlist Preview">
        </a>
    </div>
    <div class="flex m-auto justify-center max-w-4xl gap-4">    
            <div class=" w-full flex flex-col justify-center content-center relative">
                <livewire:request-submitter />
            </div>
            <div class=" flex items-center text-center bg-slate-700 w-full rounded pr-3 pl-3">
                <div>
                    <h2>Условия:</h2>
                    <ol class="max-w-md m-auto mb-8 "><br>
                        <li>
                            1. Я гарантирую, лишь то, что вы получите ответ в течении 5 дней. Однако, я не гарантирую, что песня, которую вы мне отправляете будет добавлена.
                        </li><br>
                        <li> 2. Если композиция мне понравится, я ее добавлю на период минимум 24 дня.</li> <br>
                        <li> 3. Каждая новая композиция добавляется на 1-6 места.</li>
                    </ol>
                </div>
            </div>
        </div>
            <p class="text-center text-white text-xs mt-4">
                По другим вопросам: <a href="mailto:artalt3@gmail.com"> <b>artalt3@gmail.com</b></a><br>Запросы на прослушивание песен, отправленные на почту - буду игнорироваться
            </p>
    </div>
@stop