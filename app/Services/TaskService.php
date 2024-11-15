<?php

namespace App\Services;

use App\Interfaces\TaskServiceInterface;
use App\Models\Task;
use Error;
use Exception;
use Illuminate\Support\Facades\DB;

class TaskService implements TaskServiceInterface
{
  public function getTasks($sortBy)
  {
    $user = request()->user();
    $query = Task::where('user_id', $user->id);

    switch ($sortBy) {
      case 'status_asc':
        $query->orderBy('status', 'asc');
        break;

      case 'status_desc':
        $query->orderBy('status', 'desc');
        break;

      case 'priority_asc':
        $query->orderBy('priority', 'asc');
        break;

      case 'priority_desc':
        $query->orderBy('priority', 'desc');
        break;

      default:
        $query->orderBy('status', 'asc');
        break;
    }

    return $query->get();
  }

  public function createTask($request)
  {
    $fields = $request->validated();
    $user = $request->user();

    DB::beginTransaction();

    try {
      $task = $user->tasks()->create([
        'title' => $fields['title'],
        'description' => $fields['description'],
        'priority' => $fields['priority'],
        'status' => false
      ]);
      DB::commit();
      return $task;
    } catch (Exception $e) {
      DB::rollBack();
      throw new Error($e->getMessage());
    }
  }

  public function getById($task)
  {
    return $task;
  }

  public function updateTask($task, array $fields)
  {
    DB::beginTransaction();

    try {
      $task->update([
        'title' => $fields['title'],
        'description' => $fields['description'],
        'priority' => $fields['priority'],
        'status' => $fields['status'],
      ]);
      DB::commit();
      return $task;
    } catch (Exception $e) {
      DB::rollBack();
      throw new Error($e->getMessage());
    }
  }

  public function deleteTask($job)
  {
    return $job->delete();
  }
}
