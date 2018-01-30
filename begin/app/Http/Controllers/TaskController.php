<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    //all tasks
    public function index()
    {
        $tasks = Task::all();
        return view('tasks', compact('tasks'));
    }

    //pojedinacni task
    public function show(Task $task)
    {
        //    $tasks = DB::table('tasks')->where('id',$id)->get();
        //    $tasks = Task::all()->where('id',$id);
        return view('layouts.tasks', compact('task'));
    }

    //gotovi taskovi
    public function showCompleted()
    {
        $tasks = Task::completed();
        return view('tasks', compact('tasks'));
    }

    //prikazi favorites
    public function showFavorite()
    {
        $tasks = Task::favorite();
        return view('tasks',compact('tasks'));
    }

    public function showActive()
    {
        $tasks = Task::active();
        return view('tasks', compact('tasks'));
    }

    //sacuvaj novi task
    public function store()
    {
        $this->validate(request(), ['body' => 'required']);
        if(!Auth::check()){
            return back();
        }


        $task = new Task();
        $task->body = request('body');
        $task->user_id = auth()->id();
        $task->save();
        return redirect('tasks');
    }

    //obrisi task
    public function delete(Task $task)
    {
        if(!Auth::check()){
            return back();
        }

        $task->delete();
        return back();
    }

    public function favorite(Task $task)
    {
        $task->update(['favorite' => 1]);
        $task->save();
        return back();
    }

    public function unfavorite(Task $task)
    {
        $task->update(['favorite' => 0]);
        $task->save();
        return back();
    }

    public function complete(Task $task)
    {
        $task->update(['completed' => 1, 'favorite' => 0]);
        $task->save();
        return back();
    }

    public function destroy(Request $request)
    {
        $this->validate($request, [
            'checked' => 'required',
        ]);

        $checked = $request->input('checked');

        Task::destroy($checked);
        return back();
    }
}
