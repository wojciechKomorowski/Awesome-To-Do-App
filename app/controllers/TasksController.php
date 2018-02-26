<?php

namespace App\Controllers;
use App\Core\App;

class TasksController {
    public function store()
    {   
        App::get('database')->insert('todos', [
            'task' => $_POST['task'],
            'status' => 0
        ]);
        
        header('Location: /');
    }

    public function delete()
    {   
        App::get('database')->remove('todos', [
            'id' => $_POST['id'],
        ]);
        
        header('Location: /');
    }

    public function update()
    {
        App::get('database')->update('todos', [
            'id' => $_POST['id'],
        ]);
        
        header('Location: /');
    }
}