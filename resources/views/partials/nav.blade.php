<div class="flex items-center justify-between px-4 border-b border-b-slate-200 py-4">
  <h2 class="font-semibold text-blue-700">
    <a href="{{ route('tasks.index')}}">To Do App</a>
  </h2>
  <div class="flex gap-4">
    <p>Mirësevini, <span class="font-semibold">{{ auth()->user()->name }}</span></p>
    <form action="logout" method="POST">
      @csrf
      <button type="submit" class="text-sm font-semibold text-blue-700 transition-all hover:text-blue-500 rounded-md">Dil</button>
    </form>
  </div>
</div>