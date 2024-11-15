@include('partials.head')
    <body class="bg-slate-50">
        <main class="container mx-auto bg-white h-lvh">
            @include('partials.nav')
            <div class="my-10 mx-10 gap-10">
                <div class="flex items-center gap-4">
                    <p class="{{ $task->status ? "bg-green-400" : "bg-slate-400"}} text-white rounded-md w-fit text-xs py-1 px-5">{{ $task->status ? "E përfunduar" : "E papërfunduar" }}</p>
                    <p class="text-sm"><span class="font-semibold">Krijuar:</span> {{ date('d-m-Y, H:i', strtotime($task->created_at))  }}</p>
                </div>
                <h2 class="font-semibold text-xl mt-2">
                    <a href="{{ route('tasks.show', $task['id']) }}">{{ $task->title }}</a>
                </h2>
                <p class="text-sm text-slate-600 leading-6 mt-2">{{ $task->description }}</p>
                <div class="flex justify-between mt-4 items-center">
                    @switch($task->priority)
                        @case(1)
                            <div class="w-fit bg-red-500 py-1 px-3 rounded-md">
                                <p class=" text-white text-xs">Prioritet i lartë</p>
                            </div>
                            @break
                        @case(2)
                            <div class="w-fit bg-yellow-500 py-1 px-3 rounded-md">
                                <p class=" text-black text-xs">Prioritet i mesëm</p>
                            </div>
                            @break
                        @case(3)
                            <div class="w-fit bg-green-500 py-1 px-3 rounded-md">
                                <p class=" text-white text-xs">Prioritet i ulët</p>
                            </div>
                            @break
                    @endswitch
                    <div class="flex gap-2">
                        <a href="{{ route('tasks.edit', $task->id) }}" class="text-xs rounded-md text-white bg-green-500 py-1 px-5 hover:bg-green-600 transition-all">Modifiko</a>
                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('A jeni i/e sigurt se dëshironi të fshini këtë detyrë?')" class="text-xs rounded-md text-white bg-red-500 py-1 px-5 hover:bg-red-600 transition-all">Fshij</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </body>
@include('partials.footer')
