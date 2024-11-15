<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;
use App\Services\TaskService;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    protected $taskService;

    public function __construct(TaskService $taskService)
    {
        $this->taskService = $taskService;
    }

    public function index()
    {
        $sortBy = request('sort_by', 'status_asc');
        $tasks = $this->taskService->getTasks($sortBy);

        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(StoreTaskRequest $request)
    {
        return redirect()->route('tasks.index')->with('task', $this->taskService->createTask($request));
    }

    public function show(Task $task)
    {
        return view('tasks.show', ['task' => $this->taskService->getById($task)]);
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', ['task' => $task]);
    }

    public function update(Task $task, UpdateTaskRequest $request)
    {
        return redirect()->route('tasks.index')->with('task', $this->taskService->updateTask($task, $request->validated()));
    }

    public function destroy(Task $task)
    {
        return redirect()->route('tasks.index')->with('task', $this->taskService->deleteTask($task));
    }
}
