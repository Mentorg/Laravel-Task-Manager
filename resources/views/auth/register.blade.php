@include('partials.head')
    <body class="bg-white h-lvh">
        <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
              <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
              <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Create a new account</h2>
            </div>
          
            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
              <form class="space-y-6" action="/register" method="POST">
                @csrf
                <div>
                  <label for="name" class="block text-sm/6 font-medium text-gray-900">Emri i plotë</label>
                  <div class="mt-2">
                    <input id="name" name="name" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                    @error('name')
                      <p class="text-red-600 text-xs font-semibold mt-1">Fusha 'Emri i plotë' duhet të plotësohet</p>
                    @enderror
                  </div>
                </div>

                <div>
                  <label for="email" class="block text-sm/6 font-medium text-gray-900">Email adresa</label>
                  <div class="mt-2">
                    <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                    @error('email')
                      <p class="text-red-600 text-xs font-semibold mt-1">Fusha 'Email adresa' duhet të plotësohet</p>
                    @enderror
                  </div>
                </div>
          
                <div>
                  <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm/6 font-medium text-gray-900">Fjalëkalimi</label>
                  </div>
                  <div class="mt-2">
                    <input id="password" name="password" type="password" autocomplete="current-password" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                    @error('password')
                      <p class="text-red-600 text-xs font-semibold mt-1">Fusha 'Fjalëkalimi' duhet të plotësohet</p>
                    @enderror
                  </div>
                </div>
                
                <div>
                  <div class="flex items-center justify-between">
                    <label for="password_confirmation" class="block text-sm/6 font-medium text-gray-900">Konfirmimi i fjalëkalimit</label>
                  </div>
                  <div class="mt-2">
                    <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="current-password" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                    @error('password_confirmation')
                      <p class="text-red-600 text-xs font-semibold mt-1">Fusha 'Konfirmimi i fjalëkalimit' duhet të plotësohet</p>
                    @enderror
                  </div>
                </div>
          
                <div>
                  <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
                </div>
              </form>
          
              <p class="mt-10 text-center text-sm/6 text-gray-500">
                Keni llogari tashmë?
                <a href="{{ route('login') }}" class="font-semibold text-indigo-600 hover:text-indigo-500">Kyçu</a>
              </p>
            </div>
          </div>
    </body>
@include('partials.footer')