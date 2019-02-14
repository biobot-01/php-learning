<?php

namespace App\Controllers;

use App\Core\App;

class TasksController
{
  public function index()
  {
      $title = App::get('config')['app']['name'];

      $tasks = App::get('database')->selectAll('todos');

      return view('tasks', [
          'title' => $title,
          'tasks' => $tasks
      ]);
  }

  public function store()
  {
      App::get('database')->insert('todos', [
          'description' => $_POST['description']
      ]);

      return redirect('tasks');
  }
}
