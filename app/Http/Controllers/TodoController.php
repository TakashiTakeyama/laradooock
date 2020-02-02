<?php

namespace App\Http\Controllers;

use App\Todo;
use App\User;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index() {

    // $todos = Todo::all();
    // $todos = DB::table('todo')->get();

    $current_user = User::find(1);

    return view('todos/index', [
        // 'todos' => $todos,
        'current_user_id' => $current_user->id,
    ]);
    //
    }
}
        