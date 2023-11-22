<?php
namespace App\Repositories;
use App\Models\Task;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;

abstract class BaseRepository {
    protected $model ;

    public function __construct(Model $model){
        $this->model = $model;
    }

    abstract public function getFieldData() : array ;
    Abstract public function model() : string;

    public function getAll(){
       return $this->model->paginate(3);
    }
    public function createTask(array $validatedData){
       $this->model->create($validatedData);
    }
    public function editForm($id){
       return $this->model->findOrFail($id);
    }
    public function updateTask(array $validatedData , $id){
        $task =  $this->model->findOrFail($id);
        $task->update($validatedData);
        return $task;
    }
    
    public function destroyTask($id){
       return $this->model->findOrFail($id)->delete();
    }
}
