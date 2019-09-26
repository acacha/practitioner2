<?php

class TasksController {
    // GESTIONARA TOTES LES URLS que comencin per 
    // /tasks

    // CRUD -> CREATE RETRIEVE/LLISTAR UPDATE DELETE
    // CREATE RETRIEVE UPDATE DELETE

    // /tasks -> Mostrarà la llista completa de tasques

    // /task/{id}

    // /task/create TEMPORAL HTTP

    // /task/delete/{id}

    // / task/update/{id}

    public function list() {
        // TODO LIST TASKS
        // TOTS ELS TEMES COMUNS VAN FORA
        $tasks = Task::all(); 
        return view('tasks',$tasks);
    }

    public function show() {
        // TODO LIST ONE TASK
    }

    public function store() {
        // TODO
    }

    public function update() {
        // TODO
    }

    public function delete() {
        // TODO
    }

}