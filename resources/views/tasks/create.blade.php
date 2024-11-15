@include('partials.head')
    <body class="bg-slate-50">
        <main class="container mx-auto bg-white h-lvh">
            @include('partials.nav')
            <div class="p-4">
              <div class="py-4">
                <h2 class="text-2xl font-semibold">Krijo një detyrë të re</h2>
              </div>
              <form action="{{ route('tasks.store') }}" method="POST">
                @csrf
                <div class="flex items-center gap-4">
                  <div class="my-4 w-full">
                      <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Titulli</label>
                      <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Ofro një titull" />
                      @error('title')
                        <p class="text-red-600 text-xs font-semibold mt-1">Fusha 'Titulli' duhet të plotësohet</p>
                      @enderror
                  </div>
                  <div class="my-4 w-full">
                    <label for="priority" class="block mb-2 text-sm font-medium text-gray-900">Zgjedh prioritetin</label>
                    <select id="priority" name="priority" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                      <option value="1">Prioritet i lartë</option>
                      <option value="2">Prioritet mesatar</option>
                      <option value="3">Prioritet i ulët</option>
                    </select>
                  </div>
                </div>
                <div class="my-4">
                  <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Përshkrimi</label>
                  <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Përshkruaj detyrën..."></textarea>
                  @error('description')
                    <p class="text-red-600 text-xs font-semibold mt-1">Fusha 'Përshkrimi' duhet të plotësohet</p>
                  @enderror
                </div>
                <div class="my-4">
                  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Krijo</button>
                </div>
              </form>
            </div>
        </main>
    </body>
@include('partials.footer')