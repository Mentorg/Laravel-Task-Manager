@include('partials.head')
    <body class="bg-slate-50">
        <main class="container mx-auto bg-white h-lvh">
            @include('partials.nav')
            <div class="flex justify-between py-4 px-4">
                <div>
                    <a href="{{ route('tasks.create') }}" class="py-2 px-6 text-md bg-blue-700 text-white transition-all rounded-md hover:bg-blue-800">Krijo</a>
                </div>
                <div class="flex items-center gap-4">
                    <p class="font-semibold">Rëndit sipas: </p>
                    <form action="{{ route('tasks.index') }}" method="GET" id="sortForm">
                        <select name="sort_by" class="p-2 rounded-md border border-gray-300 pr-8" onchange="document.getElementById('sortForm').submit()">
                            <option value="status_asc" {{ request('sort_by') == 'status_asc' ? 'selected' : '' }}>Statusit (E papërfunduar -> E përfunduar)</option>
                            <option value="status_desc" {{ request('sort_by') == 'status_desc' ? 'selected' : '' }}>Statusit (E përfunduar -> E papërfunduar)</option>
                            <option value="priority_asc" {{ request('sort_by') == 'priority_asc' ? 'selected' : '' }}>Prioritetit (Të lartë fillimisht)</option>
                            <option value="priority_desc" {{ request('sort_by') == 'priority_desc' ? 'selected' : '' }}>Prioritetit (Të ulët fillimisht)</option>
                        </select>
                    </form>
                </div>
            </div>
            @if($tasks->isNotEmpty())
                <div class="grid grid-cols-3 my-10 mx-10 gap-10">
                    @foreach ($tasks as $task)
                        <div class="border-2 shadow-sm border-slate-100 rounded-md py-6 px-4">
                            <div class="flex flex-col h-full">
                                <p class="{{ $task->status ? "bg-blue-600" : "bg-slate-400"}} text-white rounded-md w-fit text-xs py-1 px-5">{{ $task->status ? "E përfunduar" : "E papërfunduar" }}</p>
                                <h2 class="font-semibold text-xl mt-2 hover:text-blue-700 transition-all">
                                    <a href="{{ route('tasks.show', $task['id']) }}">{{ $task->title }}</a>
                                </h2>
                                <p class="text-sm text-slate-600 leading-6 mt-2 line-clamp-2">{{ $task->description }}</p>
                                <div class="py-4 mt-auto">
                                    <p class="text-sm"><span class="font-semibold">Krijuar:</span> {{ date('d-m-Y, H:i', strtotime($task->created_at))  }}</p>
                                </div>
                                <div class="flex justify-between items-center mt-auto">
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
                        </div>
                    @endforeach
                </div>
            @else
                <div class="h-dvh flex place-items-center place-content-center">
                    <h2 class="text-center text-2xl text-slate-500">Momentalisht nuk keni detyra.</h2>
                </div>
            @endif
        </main>
    </body>
@include('partials.footer')
