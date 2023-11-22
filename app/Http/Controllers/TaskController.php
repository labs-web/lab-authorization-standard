<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Repositories\TaskRepository;
use App\Http\Requests\TaskRequest;

class TaskController extends AppBaseController
{
    protected $taskRepository ; 
    public function __construct(TaskRepository $taskRepository){
     $this->taskRepository = $taskRepository;
    }
    public function index(Request $request){
    $tasks = $this->taskRepository->getAll();     
        
        $tasks = Task::paginate(3);
        if($request->ajax()){
            $seachQuery = $request->get('searchValue');
            $seachQuery = str_replace(' ','%', $seachQuery);
            $tasks = Task::query()->where('nom','like','%'.$seachQuery. '%')->orWhere('description' , 'like' , '%' . $seachQuery . '%')->paginate(3);
               
            return view('search' , compact('tasks'))->render();
        }
        return view('main' , compact('tasks'));
    }
  
    public function create(){
    $projects = Project::all();
        return view('add' , compact('projects'));
    }
    public function store(TaskRequest $request){
        $validatedData = $request->validated();
       $this->taskRepository->createTask($validatedData);
        return redirect()->route('add.task')->with('success' , 'tache a été ajouter avec succés');
    }
    public function edit($id){
        $task = $this->taskRepository->editForm($id);
        $projects = Project::all();
        return view('edit' , compact('task' , 'projects'));
    }
    public function update(TaskRequest $request , $id){
        $validatedData = $request->validated();
        $task = $this->taskRepository->updateTask($validatedData , $id);
        return redirect()->route('edit.task' , ['id' => $task->id])->with('success' , 'tache a été modifier avec succés');
    }
    public function destroy($id){
       
       $this->taskRepository->destroyTask($id);
        return redirect()->route('main');
    }
}
