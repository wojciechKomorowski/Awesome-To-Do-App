<?php

namespace App\Controllers;
use App\Core\App;

class PagesController
{
    public function home()
    {   
        $today = getdate(); 
        $today = "$today[mday] " . "$today[month] " . "$today[year]";
        
        $tasks = App::get('database')->selectAll('todos');
        
        // require 'views/index.view.php';
        return view('index', compact('tasks', 'today'));
    }
}