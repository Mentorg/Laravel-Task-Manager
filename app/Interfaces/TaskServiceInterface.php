<?php

namespace App\Interfaces;

use App\Models\Task;

interface TaskServiceInterface
{
  public function getTasks($request);

  public function createTask($request);

  public function getById(Task $task);

  public function updateTask(Task $task, array $fields);

  public function deleteTask(Task $task);
}
