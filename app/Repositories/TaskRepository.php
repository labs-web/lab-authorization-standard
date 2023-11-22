<?php

namespace App\Repositories;

use App\Models\Task;
use App\Repositories\BaseRepository;

class TaskRepository extends BaseRepository {

    public function __construct(Task $task){
        $this->model = $task;
    }
 protected $fieldtask = [
    'name',
    'description', 
 ];
 public function getFieldData(): array {
    return $this->fieldtask;
 }
 public function model() : string {
    return Task::class;
 }
}