@extends('templates.template')

@section('content')
    <h1 class="text-center">Tasks</h1>
    <hr>
    <div class="col-8 m-auto">
        Título: {{$task->title}}<br>
        Descrição: {{$task->description}}<br>
        Status: {{($task->completed == "0")? 'nova' : 'finalizada'}}<br>
    </div>
@endsection